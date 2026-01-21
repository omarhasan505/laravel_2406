<?php

namespace App\Http\Controllers\Backend\Product;

use App\Http\Controllers\Controller;
use App\Models\Product\Product;
use Illuminate\Http\Request;
use SweetAlert2\Laravel\Swal;

class ProductController extends Controller
{
    //* Store Product
    public function storeProduct(){

      return view('pages.products.productStore');

    }

    //* Store Product List
    public function storeProductList(Request $request){
        // dd($request->all());

        $request -> validate([

            'name' => 'required',
            'price' => 'required|numeric'

            ],
                [
                    'name.required' => 'Please enter the product name',
                    'price.required' => 'Please enter the  product price',

                ]

            );


        $product = new Product();

        $product -> title = $request->name ;
        $product -> price = $request->price;
        $product ->save();

        // Swal::success([
        //     'title' => 'Product Stored Successfully!',
        // ]);

        return back()->with('success' , 'Product Stored Successfully!');
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
            'price' => 'required|numeric'

            ],
            [
                'name.required' => 'Please enter the product name',
                'price.required' => 'Please enter the  product price',

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
