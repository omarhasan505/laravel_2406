<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product\Product;
use Illuminate\Http\Request;

use function Laravel\Prompts\alert;

class AddToCartController extends Controller
{

//* Add  to Cart
    public function addToCart($id){

       $product = Product::with('images')->find($id);
       $cart = session('cart' , []);

       if(isset($cart[$id])){
        $cart[$id]['quantity'] +=1;
            session()->put('cart', $cart);
        }else{

           $cart[$id] = [
            'title' => $product->title,
            'description' => $product->description,
            'price' => $product->price,
            'image' => $product->images[0]->image,
            'quantity' => 1,
           ];
       }


        session()->put('cart' , $cart);

        return back()->with('success' , 'add to cart successfully!');

    }

    //* Delet Cart

    public function deletCart($id){

        $cart = session('cart', []);


        if(isset ($cart[$id])){

            unset ($cart[$id]);
            session()->put('cart', $cart);

        }

        return back()->with('success', 'Item removed from cart!');
    }


}
