<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class BrandController extends Controller
{
    public function AllBrand(){
        $brands = Brand::latest()->get();
        return view('backend.brand.view', compact('brands'));
    }//End Method

    public function AddBrand(){
        return view('backend.brand.add');
    }//End Method

    public function StoreBrand(Request $request){
        $request->validate([
            'brand_name' => 'required',
            'brand_image' => 'required'
        ]);

            $image = $request->file('brand_image');
            $image_name = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(150, 80)->save('upload/brands/'.$image_name);
            $save_image = 'upload/brands/'.$image_name;

        Brand::insert([
            'brand_name' => $request->brand_name,
            'brand_slug' => strtolower(str_replace(' ', '-', $request->brand_name)),
            'brand_image' => $save_image,
        ]);

        $notification = array(
            'message' => 'New Brand Added Successfully',
            'alart-type' => 'success'
        );
        return redirect()->route('all.brand')->with($notification);
    }//End Method

    public function EditBrand($id){
        $editBrand = Brand::find($id);
        return view('backend.brand.edit', compact('editBrand'));
    }//End Method

    public function UpdateBrand(Request $request, $id){
        $data = Brand::find($id);

        if ($request->file('brand_image')){
            unlink($data->brand_image);
            $image = $request->file('brand_image');
            $image_name = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(150, 80)->save('upload/brands/'.$image_name);
            $save_image = 'upload/brands/'.$image_name;

            Brand::findOrFail($id)->update([
                'brand_name' => $request->title_en,
                'brand_slug' => strtolower(str_replace(' ', '-', $request->brand_name)),
                'brand_image' => $save_image,
            ]);

            $notification = array(
                'message' => 'Brand Updated Successfully with Image!',
                'alart-type' => 'success'
            );
            return redirect()->route('all.brand')->with($notification);

        } else {
            Brand::findOrFail($id)->update([
                'brand_name' => $request->brand_name,
                'brand_slug' => strtolower(str_replace(' ', '-', $request->brand_slug)),
            ]);

            $notification = array(
                'message' => 'Brand updated Successfully',
                'alart-type' => 'success'
            );
            return redirect()->route('all.brand')->with($notification);
        }
    }//End Method


    public function DeleteBrand($id){
        $data = Brand::find($id);
        unlink($data->brand_image);
        Brand::find($id)->delete();

        $notification = array(
            'message' => 'Brand deleted Successfully',
            'alart-type' => 'alert'
        );
        return redirect()->back()->with($notification);
    }

}
