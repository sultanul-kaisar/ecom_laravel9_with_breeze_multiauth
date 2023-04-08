<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function AllSubCategory(){
        $subcategories = SubCategory::with('category')->orderBy('id', 'DESC')->get();
        return view('backend.subcategory.view', compact('subcategories'));
    }//End Method


    public function AddSubCategory(){
        $categories = Category::orderBy('category_title', 'ASC')->get();
        return view('backend.subcategory.add', compact('categories'));
    }

    public function StoreSubCategory(Request $request){
        $request->validate([
            'category_id' => 'required',
            'subcategory_title' => 'required',
        ]);
        SubCategory::insert([
            'category_id' => $request->category_id,
            'subcategory_title' => $request->subcategory_title,
            'subcategory_slug' => strtolower(str_replace(' ', '-',$request->subcategory_title)),
            'created_at' => Carbon::now(),
        ]);

        $notification = array(

            'message' => 'Sub Category Added Successfully',
            'alart-type' => 'success'
        );
        return redirect()->route('all.subcategory')->with($notification);
    }//End Method

    public function EditSubCategory($id){
        $categories = Category::orderBy('category_title', 'ASC')->get();
        $editSubcategory = SubCategory::findOrFail($id);
        return view('backend.subcategory.edit', compact('categories','editSubcategory'));
    }//End Method


    public function UpdateSubCategory(Request $request, $id){
        SubCategory::findOrFail($id)->update([
            'category_id' => $request->category_id,
            'subcategory_title' => $request->subcategory_title,
            'subcategory_slug' => strtolower(str_replace(' ', '-',$request->subcategory_title)),
        ]);

        $notification = array(

            'message' => 'Sub Category Updated Successfully',
            'alart-type' => 'info'
        );
        return redirect()->route('all.subcategory')->with($notification);

    }//End Method

    public function DeleteSubCategory($id){
        SubCategory::find($id)->delete();

        $notification = array(
            'message' => 'Sub Category Deleted Successfully',
            'alert_type' => 'success'
        );

        return redirect()->back()->with($notification);
    }//End Method


    public function GetSubCategory($category_id){

        $subcat = SubCategory::where('category_id',$category_id)->orderBy('subcategory_title','ASC')->get();
        return json_encode($subcat);
    }//End Method

}
