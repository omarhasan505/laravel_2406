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

        if($request->hasFile('meta_image')){
            $image = $request->file('meta_image');
            $uniqueName = 'metaImage-' . time() . '-' . $image->getClientOriginalName();
            $image -> storeAs('category/' , $uniqueName , 'public');
            $category->image = $uniqueName;
        }

        $category->save();

        return back()->with('success' , 'Category Added Successfully!');





        // return view('pages.category.selectCategory');
    }

    //* category List view

    public function categorylist(){
        // dd($allCategory);
        $allCategory = Category::with('subCategory')->get();
        return view('pages.category.categoryList' , compact('allCategory'));
    }

    //* Edit Category
    public function categoryEdit($id){
       $editCategory =  Category::with('subCategory')->find($id);
        $allCategory = Category::select('id', 'title')->get();

        //    dd($editCategory);
        return view('pages.category.editCategory' , compact('editCategory' , 'allCategory'));
    }

    //* Store Edited Category

    public function storeEditCategory(Request $request , $id){
        // dd($request->all());

        $request->validate([

            'title' => 'required',
            'status' => 'required',

            ]);

        $updateCategory =  Category::find($id);
        $updateCategory ->title = $request->title;
        $updateCategory ->parent_id = $request->category;
        $updateCategory ->meta_title = $request->meta_title;
        $updateCategory ->status = $request->status;
        $updateCategory ->meta_description = $request->meta_description;

        if($request->hasFile('meta_image')){
            $updateImage = $request->file('meta_image');
            $updatedUniName = 'UpdatedImage-' . time() . '-' . $updateImage->getClientOriginalName();
            $updateImage ->storeAs('category/' , $updatedUniName , 'public');
            $updateCategory->image = $updatedUniName;
        }

        $updateCategory->save();

        return redirect()->route('category.list.category')->with('success' , 'Update Successfully!');


    }

    //* Delete Category

    public function categoryDelete($id){
        Category::with('subCategory')->find($id)->delete();

        return back()->with('success', 'Delete Successfully!');

    }


}
