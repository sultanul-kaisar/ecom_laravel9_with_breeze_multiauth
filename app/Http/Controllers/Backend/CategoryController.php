<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryFormRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class CategoryController extends Controller
{
    public function AllCategory(){
        $categories = Category::orderBy('id', 'DESC')->get();
        return view('backend.category.view', compact('categories'));
    }//End Method


    public function AddCategory(){
        return view('backend.category.add');
    }

    public function StoreCategory(Request $request){
        $request->validate([
            'category_title' => 'required|string',
            'category_icon' => 'required|string',
        ]);
        Category::insert([
            'category_title' => $request->category_title,
            'category_slug' => strtolower(str_replace(' ', '-',$request->category_title)),
            'category_icon' => $request->category_icon,
            'created_at' => Carbon::now()
        ]);

        $notification = array(

            'message' => 'New Category Added Successfully',
            'alart-type' => 'success'
        );
        return redirect()->route('all.category')->with($notification);
    }//End Method

    public function EditCategory($id){
        $editCategory = Category::findOrFail($id);
        return view('backend.category.edit', compact('editCategory'));
    }//End Method


    public function UpdateCategory(Request $request, $id){
        Category::findOrFail($id)->update([
            'category_title' => $request->category_title,
            'category_slug' => strtolower(str_replace(' ', '-',$request->category_title)),
            'category_icon' => $request->category_icon,
        ]);

        $notification = array(

            'message' => 'Category Updated Successfully',
            'alart-type' => 'info'
        );
        return redirect()->route('all.category')->with($notification);

    }//End Method

    public function DeleteCategory($id){
        Category::find($id)->delete();

        $notification = array(
            'message' => 'Category Deleted Successfully',
            'alert_type' => 'success'
        );

        return redirect()->back()->with($notification);
    }//End Method
}
