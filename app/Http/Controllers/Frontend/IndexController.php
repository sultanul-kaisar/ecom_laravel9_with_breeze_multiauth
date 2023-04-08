<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Blog;
use App\Models\User;
use App\Models\MultiImg;
use App\Models\Policy;
use App\Models\SubSubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;

class IndexController extends Controller
{
    public function Index(){
        $featuredproducts = Product::where('status', 1)
                                ->where('featured', 1)
                                ->get();

        return view('frontend.index', compact('featuredproducts'));

    }//End Method

    public function UserLogout(){
        Auth::logout();
        return redirect()->route('login');
    }//End Method


    public function ProductDetails($id, $slug)
    {
       $product = Product::findOrFail($id);

       $p_color = $product->product_color;
       $product_color = explode(',', $p_color);

       $p_size = $product->product_size;
       $product_size = explode(',', $p_size);

       $multiImages = MultiImg::where('product_id', $id)->get();
       $hotproducts = Product::where('status', 1)
                               ->where('hot_deals', 1)
                               ->get();

        $related_products = Product::where('category_id', $product->category_id)
                                     ->orderBy('id','DESC')
                                     ->where('id', '!=', $id)
                                     ->where('status', 1)
                                     ->get();
       return view('frontend.products.product_details', compact('product', 'multiImages', 'hotproducts', 'product_color', 'product_size', 'related_products'));
    }//End Method

    public function ProductBySubSubCat($id){
        $subsubcat = SubSubCategory::findOrFail($id);
        $products = Product::where('subsubcategory_id', $id)->latest()->get();
        return view('frontend.products.products_subsubcat', compact('subsubcat', 'products'));
    }//End Method


    public function ProductViewAjax($id)
    {
        $product = Product::with('category', 'brand')->findOrFail($id);
        $multiImages = MultiImg::where('product_id', $id)->get();

        $color = $product->product_color;
        $product_color = explode(',', $color);

        $size = $product->product_size;
        $product_size = explode(',', $size);

        return response()->json(array(

            'product' => $product,
            'color' => $product_color,
            'size' => $product_size,
            'multiImages' => $multiImages,
        ));
    }


    public function ViewBlog(){
        $blogs = Blog::where('status', 1)->latest()->paginate(3);

        return view('frontend.blogs', compact('blogs'));
    }//End Method


    public function BlogDetails($id, $slug)
    {
       $blog = Blog::findOrFail($id);
       $latestBlogs = Blog::where('status', 1)
                            ->where('id', '!=', $id)
                            ->orderBy('id', 'DESC')
                            ->limit(3)
                            ->get();
       return view('frontend.blog_details', compact('blog', 'latestBlogs'));
    }//End Method


    public function Policy()
    {
        $policies = Policy::orderBy('id', 'ASC')->where('status', 1)->get();

        return view('frontend.policy', compact('policies'));
    }

}
