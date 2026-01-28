<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Library\SslCommerz\SslCommerzNotification;
use App\Models\Category\Category;

use App\Models\Detail\Detail;
use App\Models\Order\Order;
use App\Models\Product\Product;
use function Laravel\Prompts\alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AddToCartController extends Controller
{

    //* Add  to Cart
    public function addToCart($id)
    {

        $product = Product::with('images')->find($id);
        $cart = session('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity'] += 1;
            session()->put('cart', $cart);
        } else {

            $cart[$id] = [
                'title' => $product->title,
                'description' => $product->description,
                'price' => $product->price,
                'image' => $product->images[0]->image,
                'quantity' => 1,
            ];
        }


        session()->put('cart', $cart);

        return back()->with('success', 'add to cart successfully!');
    }

    //* Delet Cart

    public function deletCart($id)
    {

        $cart = session('cart', []);


        if (isset($cart[$id])) {

            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return back()->with('success', 'Item removed from cart!');
    }

    //* Checkout Cart

    public function checkoutCart(){
        $categories = Category::with(['products.images'])->get();

        $cart = session('cart', []);

        return view('frontend.checkout' , compact('categories'));
    }

    //* Place Order

    public function placeOrder(Request $request)
    {
        // dd($request->all());


        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'address' => 'required',
            'country' => 'required',
            'states' => 'required',
            'zip_code' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'payment' => 'required',
        ]);

        $cart = session('cart', []);

        $currentAmount = 0;
        $currentQuantity = 0;

        foreach($cart as $item){
            $currentAmount += ($item['quantity'] ?? 0)*($item['price'] ?? 0);
            $currentQuantity = $currentQuantity + $item['quantity'];
        }

        if(empty($cart)){
            return redirect()->back();
        }

        if($request->payment== 'online_payment'){

            # Here you have to receive all the order data to initate the payment.
            # Let's say, your oder transaction informations are saving in a table called "orders"
            # In "orders" table, order unique identity is "transaction_id". "status" field contain status of the transaction, "amount" is the order amount to be paid and "currency" is for storing Site Currency which will be checked with paid currency.

            $post_data = array();
            $post_data['total_amount'] = $currentAmount ?? 10; # You cant not pay less than 10
            $post_data['currency'] = "BDT";
            $post_data['tran_id'] = uniqid(); // tran_id must be unique

            # CUSTOMER INFORMATION
            $post_data['cus_name'] = $request->first_name;
            $post_data['cus_email'] = $request->email;
            $post_data['cus_add1'] = $request->address;
            $post_data['cus_add2'] = "";
            $post_data['cus_city'] = "";
            $post_data['cus_state'] = $request->states;
            $post_data['cus_postcode'] = "";
            $post_data['cus_country'] = $request->country;
            $post_data['cus_phone'] = $request->phone;
            $post_data['cus_fax'] = "";

            # SHIPMENT INFORMATION
            $post_data['ship_name'] = "Store Test";
            $post_data['ship_add1'] = "Dhaka";
            $post_data['ship_add2'] = "Dhaka";
            $post_data['ship_city'] = "Dhaka";
            $post_data['ship_state'] = "Dhaka";
            $post_data['ship_postcode'] = "1000";
            $post_data['ship_phone'] = "";
            $post_data['ship_country'] = "Bangladesh";

            $post_data['shipping_method'] = "NO";
            $post_data['product_name'] = "Computer";
            $post_data['product_category'] = "Goods";
            $post_data['product_profile'] = "physical-goods";

            # OPTIONAL PARAMETERS
            $post_data['value_a'] = "ref001";
            $post_data['value_b'] = "ref002";
            $post_data['value_c'] = "ref003";
            $post_data['value_d'] = "ref004";

            #Before  going to initiate the payment order status need to insert or update as Pending.
            $order = Order::
                where('transaction_id', $post_data['tran_id'])
                ->updateOrInsert([
                    'name' => $post_data['cus_name'],
                    'email' => $post_data['cus_email'],
                    'phone' => $post_data['cus_phone'],
                    'amount' => $post_data['total_amount'],
                    'status' => 'Pending',
                    'address' => $post_data['cus_add1'],
                    'transaction_id' => $post_data['tran_id'],
                    'currency' => $post_data['currency'],
                'quantity' => $currentQuantity,
                ]);

            $sslc = new SslCommerzNotification();
            # initiate(Transaction Data , false: Redirect to SSLCOMMERZ gateway/ true: Show all the Payement gateway here )
            $payment_options = $sslc->makePayment($post_data, 'hosted');

            if (!is_array($payment_options)) {
                print_r($payment_options);
                $payment_options = array();
            }



            return ;
        }

        $transac_id = uniqid();

        //  DB::table('orders')
            $order = Order::
            where('transaction_id',  $transac_id)
            ->create([
                'name' => $request->first_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'amount' => $currentAmount,
                'status' => 'Pending',
                'address' => $request->address,
                'transaction_id' => $transac_id,
                'currency' => "BDT",
                'quantity' => $currentQuantity,
            ]);


        // $orderlist = Order::with('details')->get();
        // if (!$cart) {
        //     return redirect()->back()->with('success', 'Cart is empty');
        // }

        

        $subtotal = 0;
        foreach ($cart as $item) {
            $subtotal = $subtotal + $item['quantity'] * $item['price'];



            $orderInfo = new Detail();

            $orderInfo->product_name = $item['title'];
            $orderInfo->quantity = $item['quantity'];
            $orderInfo->price = $item['price'];
            $orderInfo->subtotal = $subtotal;
            $orderInfo->order_id = $order ->id;

            $orderInfo->save();
        }

            session()->forget('cart');

            return redirect()->route('frontend.featured')->with('success' , 'Order Placed Successfully!');



    }
}
