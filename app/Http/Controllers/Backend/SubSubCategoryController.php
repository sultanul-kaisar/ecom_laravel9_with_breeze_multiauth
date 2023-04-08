<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\SubSubCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SubSubCategoryController extends Controller
{
    public function AllSubSubCat(){
        $categories = Category::orderBy('category_title','ASC')->get();
        $subsubcategories = SubSubCategory::orderBy('id', 'DESC')->get();
        return view('backend.subsubcat.view', compact('categories','subsubcategories'));
    }//End Method

    public function AddSubSubCat(){
        $categories = Category::orderBy('category_title', 'ASC')->get();
        $subcategories = SubCategory::orderBy('subcategory_title', 'ASC')->get();
        return view('backend.subsubcat.add', compact('categories', 'subcategories'));
    }//End Method

    public function StoreSubSubCat(Request $request){
        $request->validate([
           'subsub_title' => 'required',
           'category_id' => 'required',
           'subcategory_id' => 'required',
        ]);

        SubSubCategory::insert([
           'subsub_title' => $request->subsub_title,
           'subsub_slug' => strtolower(str_replace(' ', '-', $request->subsub_title)),
           'category_id' => $request->category_id,
           'subcategory_id' => $request->subcategory_id,
           'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Sub-Sub category added successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.subsubcat')->with($notification);
    }//End Method


    public function EditSubSubCat($id){
        $categories = Category::orderBy('category_title', 'ASC')->get();
        $subcategories = SubCategory::orderBy('subcategory_title', 'ASC')->get();
        $editData = SubSubCategory::find($id);
        return view('backend.subsubcat.edit', compact('categories', 'subcategories', 'editData'));
    }//End Method

    public function UpdateSubSubCat(Request $request, $id){
        SubSubCategory::findOrFail($id)->update([
            'subsub_title' => $request->subsub_title,
            'subsub_slug' => strtolower(str_replace(' ', '-', $request->subsub_slug)),
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
        ]);

        $notification = array(
            'message' => 'Sub-Sub category updated successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.subsubcat')->with($notification);

    }//End Method

    public  function DeleteSubSubCat($id){
        SubSubCategory::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Sub-Sub category deleted successfully',
            'alert-type' => 'danger'
        );

        return redirect()->back()->with($notification);
    }//End Method

    public function GetSubSubCategory($subcategory_id){
        $subsubcat = SubSubCategory::where('subcategory_id',$subcategory_id)->orderBy('subsub_title','ASC')->get();
        return json_encode($subsubcat);
    }//End Method




}
