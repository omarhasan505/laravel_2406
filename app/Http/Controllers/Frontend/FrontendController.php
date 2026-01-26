<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $featuredProducts = Product::with('images')->get();

        // dd($featuredProducts);

        return view('welcome' , compact('featuredProducts'));
    }
}
