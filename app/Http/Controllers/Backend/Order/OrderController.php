<?php

namespace App\Http\Controllers\Backend\Order;

use App\Http\Controllers\Controller;
use App\Models\Detail\Detail;
use App\Models\Order\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //* getting order

    public function index()
    {
        $orderLists = Order::latest()->paginate(5);
        return view('pages.order.orderList', compact('orderLists'));
    }

    //* details send to database



    //* order info

    public function orderInfo($id)
    {
        $orderlist = Order::with('details')->find($id);

        // $cart = session('cart' , []);

        // if (!$cart) {
        //     return redirect()->back()->with('success', 'Cart is empty');
        // }

        return view('pages.order.orderInfo', compact('orderlist'));
    }

    //* Order Passing

    public function passOder($id)
    {
        // Order::find($id)->delete() ;
        $passingOrder = Order::find($id);

        if ($passingOrder->status !== 'completed') {
            $passingOrder->status = 'completed';
            $passingOrder->save();
        }
        return back()->with('success', 'Order Passed Successfully!');
    }

    //* Delet order
    public function deletOder($id)
    {
        Order::find($id)->delete();
        return back()->with('success', 'Order deleted Successfully!');
    }
}
