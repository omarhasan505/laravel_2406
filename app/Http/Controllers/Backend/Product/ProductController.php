<?php

namespace App\Http\Controllers\Backend\Product;

use App\Http\Controllers\Controller;
use App\Models\Category\Category;
use App\Models\Image\Image;
use App\Models\Product\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use SweetAlert2\Laravel\Swal;

use function Pest\Laravel\get;

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
        $allCategory = Category::select('id', 'title')->get();

        return view('pages.products.editProduct' , compact('newProduct' , 'allCategory'));
    }

    //* Store Edit Product

    public function storeEditProduct(Request $request , $id){



        $request -> validate([
                'name' => 'required',
                'price' => 'required|numeric',
                'category' => 'required',
                'stock' => 'required',
                'status' => 'required',

            ],
            [
                'name.required' => 'Please enter the product name',
                'price.required' => 'Please enter the product price',
                'category.required' => 'Please enter the category ',
                'stock.required' => 'Please enter the stock ',
                'status.required' => 'Please enter the status ',

            ]
            );

                $new = Product::find($request->id);
                $new->title = $request->name;
                $new->category_id = $request->category;
                $new->discount_price = $request->discount_price;
                $new->price = $request->price;
                $new->status = $request->status;
                $new->in_stock = $request->stock;
                $new->feature = $request->feature;
                $new->description = $request->description;
                $new->save();

            return redirect()->route('products.product.list')->with('success' , 'Updated Successfully!');

    }

    //* Delete Product
    public function deleteProduct($id){

    $product = Product::find($id);

    $product -> delete();

    return back()->with('success' , 'Deleted Successfully!');

    }

    //* Product image

    public function productImage()
        {
        $allProduct= Product::select('id', 'title')->get();

        return view('pages.products.productImage' , compact('allProduct'));
        }

        public function storeProductImage(Request $request){
            // dd($request->all());

            $request->validate([
                'name' => 'required',
                'product_id' => 'required',
                'images' => 'required|array',
                // 'images.*' => 'image|mimes:jpg,jpeg,png,webp',
            ]);

            if($request->hasFile('images')){
                foreach( $request->file('images') as $image){
                    $imageName = 'productImage-' . time() . Str::slug($image->getClientOriginalName());
                    $image->storeAs('productImage/' , $imageName , 'public');
                    Image::create([
                    'product_name' => $request->name ,
                    'product_id' => $request->product_id,
                    'image' => $imageName,
                    ]);
                };


            }

        // $image = new Image();
        // $image->product_id = $request->product_id;
        // $image->image = $imageName;
        // $image->Product_name = $request->name;
        // $image->save();

        return back()->with('success', 'Uploaded Successfully!');

        }

        //* Showing Product Images

        public function showProductImage (){
        // $productImages = Image::latest()
        //     ->get()
        //     ->groupBy('product_id');

        $productImages = Product::with('images')->paginate(1);


        return view('pages.products.showProductImage' , compact('productImages' ));
        }

        //* edit product image

        public function editProductImage($id){
        $allProduct = Product::select('id', 'title')->get();
        $editProductImage = Product::with('images')->find($id);
        if (!$editProductImage) {
            return redirect()->back()->with('error', 'Image not found!');
        }

            return view('pages.products.editProductImage' , compact('editProductImage' , 'allProduct')) ;
        }

        //* Delete old image

        public function deletEditProductImage($id){
            Image::find($id)->delete();
            return back();
        }


        //* update product image

        public function updateProductImage( Request $request , $id){

            $edited = Image::find($id);

            $request->validate([

                'product_id' => 'required',
                'images' => 'required|array',
                // 'images.*' => 'image|mimes:jpg,jpeg,png,webp',
            ]);


        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imageName = 'productImage-' . time() . Str::slug($image->getClientOriginalName());
                $image->storeAs('productImage/', $imageName, 'public');
                Image::create([
                    'product_name' => $request->name,
                    'product_id' => $request->product_id,
                    'image' => $imageName,
                ]);
            };
        }

        // $edited->save();

        return redirect()->route('products.show.product.image')->with('success' , 'Uploaded Successfully!') ;

        }

        //* Delete Product image
        public function deleteProductImage($id){

         Product::with('images')->find($id)->delete();

         return back()->with('success', 'Deleted Successfully!');


        }


}
