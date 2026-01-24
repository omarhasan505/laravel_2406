<?php

namespace App\Http\Controllers\Backend\Product;

use App\Http\Controllers\Controller;
use App\Models\Category\Category;
use App\Models\Product\Product;
use Illuminate\Http\Request;
use SweetAlert2\Laravel\Swal;

class ProductController extends Controller
{
    //* Store Product
    public function storeProduct(){

        $allCategory = Category::select('id', 'title')->get();


      return view('pages.products.productStore' , compact('allCategory'));

    }

    //* Store Product List
    public function storeProductList(Request $request){
        // dd($request->all());

        $request -> validate([

            'name' => 'required',
            'price' => 'required|numeric',
            'category' => 'required',
            'stock' => 'required',
            'status' => 'required',


            ],
                [
                    'name.required' => 'Please enter the product name',
                    'price.required' => 'Please enter the  product price',
                    'category.required' => 'Please enter the  category ',
                    'status.required' => 'Please enter the stock ',
                    'stock.required' => 'Please enter the status ',

            ]

            );


        $product = new Product();

        $product -> title = $request->name ;
        $product -> category_id = $request->category ;
        $product -> price = $request->price;
        $product ->discount_price = $request->discount_price;
        $product ->in_stock = $request->stock;
        $product ->status = $request->status;
        $product ->description = $request->description;
        $product ->feature = $request->feature;
        $product ->save();

        // Swal::success([
        //     'title' => 'Product Stored Successfully!',
        // ]);

        return redirect()->route('products.product.list')->with('success' , 'Product Stored Successfully!');
    }

    //* Product list
    public function productList(){

        $products = Product::latest()->get();

        return view('pages.products.productList' , compact('products'));
    }

    //* Edit Product
    public function editProduct($id){
        $newProduct = Product::find($id);
        return view('pages.products.editProduct' , compact('newProduct'));
    }

    //* Store Edit Product
    public function storeEditProduct(Request $request , $id){


        $request -> validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'category' => 'required'

            ],
            [
                'name.required' => 'Please enter the product name',
                'price.required' => 'Please enter the  product price',
                'category.required' => 'Please enter the  category ',

            ]
            );

                $new = Product::find($request->id);
                $new -> title = $request->name;
                $new -> price = $request->price;
                $new -> save();

            return redirect()->route('products.product.list')->with('success' , 'Updated Successfully!');

    }

    //* Delete Product
    public function deleteProduct($id){

    $product = Product::find($id);

    $product -> delete();

    return back()->with('success' , 'Deleted Successfully!');

    }
}
