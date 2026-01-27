<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category\Category;
use App\Models\Product\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $categories = Category::with(['products'])->get();
        $featuredProducts = Product::with('images')->get();

        // dd($featuredProducts);

        return view('welcome', compact('featuredProducts', 'categories'));
    }
}
