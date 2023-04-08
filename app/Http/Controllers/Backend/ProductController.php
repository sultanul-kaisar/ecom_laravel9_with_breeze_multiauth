<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\MultiImg;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\SubSubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    public function AddProduct(){
        $brands = Brand::orderBy('brand_name', 'ASC')->get();
        $categories = Category::orderBy('category_title', 'ASC')->get();
        return view('backend.product.add', compact('brands','categories'));
    }//End Method

    public function ManageProduct(){
        $categories = Category::latest()->get();
        $subcategories = Subcategory::latest()->get();
        $products = Product::orderBy('id','DESC')->get();
        return view('backend.product.view', compact('products', 'categories', 'subcategories'));
    }//End Method



    public function StoreProduct(Request $request)
    {
        $image = $request->file('product_thumbnail');
        $image_name = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(600, 600)->save('upload/products/thumbnail/'.$image_name);
        $save_image = 'upload/products/thumbnail/'.$image_name;

        $product_id = Product::insertGetId([
            'brand_id' => $request->brand_id,
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'subsubcategory_id' => $request->subsubcategory_id,
            'product_name' => $request->product_name,
            'product_slug' =>  strtolower(str_replace(' ', '-', $request->product_name)),
            'product_code' => $request->product_code,

            'product_qty' => $request->product_qty,
            'product_tags' => $request->product_tags,
            'product_size' => $request->product_size,
            'product_color' => $request->product_color,

            'buying_price' => $request->buying_price,
            'selling_price' => $request->selling_price,
            'discount_price' => $request->discount_price,
            'short_desc_en' => $request->short_desc,
            'long_desc_en' => $request->long_desc,

            'hot_deals' => $request->hot_deals,
            'featured' => $request->featured,
            'special_offer' => $request->special_offer,
            'special_deals' => $request->special_deals,

            'product_thumbnail' => $save_image,
            'status' => 1,
            'created_at' => Carbon::now(),
        ]);


        //////////Multi Image Upload//////////

        $images = $request->file('multi_img');
        foreach ($images as $img) {
            $make_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
            Image::make($img)->resize(600,600)->save('upload/products/multi-images/'.$make_name);
            $save_multiImg = 'upload/products/multi-images/'.$make_name;

            MultiImg::insert([
                'product_id' => $product_id,
                'photo_name' => $save_multiImg,
                'created_at' => Carbon::now(),

            ]);

        }

        ////////// Eed Multiple Image Upload Start ///////////

        $notification = array(
            'message' => 'Product added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('manage.product')->with($notification);

    }//End Method


    public function EditProduct($id){
        $brands = Brand::orderBy('brand_name', 'ASC')->get();
        $category = Category::orderBy('category_title', 'ASC')->get();
        $subcategory = SubCategory::orderBy('subcategory_title', 'ASC')->get();
        $subsubcategory = SubSubCategory::orderBy('subsub_title', 'ASC')->get();
        $multiImgs = MultiImg::where('product_id',$id)->get();

        $product = Product::findOrFail($id);

        return view('backend.product.edit', compact( 'brands', 'category', 'subcategory', 'subsubcategory', 'multiImgs', 'product' ));


    }//End Method

    public function UpdateProduct(Request $request, $id){

        Product::findOrFail($id)->update([
            'brand_id' => $request->brand_id,
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'subsubcategory_id' => $request->subsubcategory_id,
            'product_name' => $request->product_name,
            'product_slug' =>  strtolower(str_replace(' ', '-', $request->product_name)),
            'product_code' => $request->product_code,

            'product_qty' => $request->product_qty,
            'product_tags' => $request->product_tags,
            'product_size' => $request->product_size,
            'product_color' => $request->product_color,
            
            'buying_price' => $request->buying_price,
            'selling_price' => $request->selling_price,
            'discount_price' => $request->discount_price,
            'short_desc' => $request->short_desc,
            'long_desc' => $request->long_desc,

            'hot_deals' => $request->hot_deals,
            'featured' => $request->featured,
            'special_offer' => $request->special_offer,
            'special_deals' => $request->special_deals,
            'status' => 1,
            'updated_at' => Carbon::now(),

        ]);

        $notification = array(
            'message' => 'Product Updated Without Image Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('manage.product')->with($notification);

    }//End Method

    public function ThumbnailUpdate(Request $request, $id){
        $data = Product::find($id);
        unlink($data->product_thumbnail);

        $image = $request->file('product_thumbnail');
        $name_name = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(600,600)->save('upload/products/thumbnail/'.$name_name);
        $save_thumbnail = 'upload/products/thumbnail/'.$name_name;

        Product::findOrFail($id)->update([
            'product_thumbnail' => $save_thumbnail,
            'updated_at' => Carbon::now(),

        ]);

        $notification = array(
            'message' => 'Product Thumbnail Updated Successfully',
            'alert-type' => 'info'
        );

        return redirect()->back()->with($notification);

    } // end method

    public function MultiImgUpdate(Request $request){
        $imgs = $request->multi_img;

        foreach ($imgs as $id => $img) {
            $imgData = MultiImg::findOrFail($id);
            unlink($imgData->photo_name);

            $make_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
            Image::make($img)->resize(600,600)->save('upload/products/multi-images/'.$make_name);
            $updateImg = 'upload/products/multi-images/'.$make_name;

            MultiImg::where('id',$id)->update([
                'photo_name' => $updateImg,
                'updated_at' => Carbon::now(),

            ]);

        } // end foreach

        $notification = array(
            'message' => 'Product Image Updated Successfully',
            'alert-type' => 'info'
        );

        return redirect()->back()->with($notification);

    } // end method

    public function MultiImgDelete($id){
        $oldimg = MultiImg::findOrFail($id);
        unlink($oldimg->photo_name);
        MultiImg::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Product Image Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    } // end method


    public function ProductInactive($id){
        Product::findOrFail($id)->update(['status' => 0]);
        $notification = array(
            'message' => 'Product Inactive',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }//End Method


    public function ProductActive($id){
        Product::findOrFail($id)->update(['status' => 1]);
        $notification = array(
            'message' => 'Product Active',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }//End Method


    public function DeleteProduct($id){
        $product = Product::findOrFail($id);
        unlink($product->product_thumbnail);
        Product::findOrFail($id)->delete();

        $images = MultiImg::where('product_id',$id)->get();
        foreach ($images as $img) {
            unlink($img->photo_name);
            MultiImg::where('product_id',$id)->delete();
        }

        $notification = array(
            'message' => 'Product Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }// end method


}
