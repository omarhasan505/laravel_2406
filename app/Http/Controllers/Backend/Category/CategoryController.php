<?php

namespace App\Http\Controllers\Backend\Category;

use App\Http\Controllers\Controller;
use App\Models\Category\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //* Index Category

    public function categoryIndex(){

        $allCategory = Category::select('id', 'title')->get();

        return view('pages.category.selectCategory' , compact('allCategory'));
    }

    //* Store category

    public function categoryStore(Request $request){


        // dd($request->all());

        $request->validate([
            'title' => 'required',
            'status' => 'required',

        ]);



        $category = new Category();
        $category->title = $request->title;
        $category->parent_id = $request->category;
        $category->meta_title = $request->meta_title;
        $category->status = $request->status;
        $category->meta_description = $request->meta_description;

        $category->save();

        return back()->with('success' , 'Category Added Successfully!');





        // return view('pages.category.selectCategory');
    }
}
