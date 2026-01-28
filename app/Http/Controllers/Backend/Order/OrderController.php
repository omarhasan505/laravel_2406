<?php

namespace App\Http\Controllers\Backend\Order;

use App\Http\Controllers\Controller;
use App\Models\Detail\Detail;
use App\Models\Order\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //* getting order

    public function index(){
        $orderLists = Order::latest()->get();
        return view('pages.order.orderList' , compact('orderLists'));
    }

    //* details send to database



    //* order info

    public function orderInfo($id){
        $orderlist = Order::with('details')->find($id);

        // $cart = session('cart' , []);

        // if (!$cart) {
        //     return redirect()->back()->with('success', 'Cart is empty');
        // }

        // $subtotal = 0;
        // foreach(session('cart' , []) as $item){
        //     $subtotal = $subtotal + $item['quantity']*$item['price'];



        // $orderInfo = new Detail();

        // $orderInfo->product_name = $cart['title'];
        // $orderInfo->quantity = $cart['quantity'];
        // $orderInfo->price = $cart['price'];
        // $orderInfo->subtotal = $subtotal;
        // $orderInfo->order_id = $orderlist->id;

        // $orderInfo->save();

        // }


        return view('pages.order.orderInfo' , compact('orderlist'));



    }
}
