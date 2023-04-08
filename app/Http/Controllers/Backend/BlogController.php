<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Carbon;

class BlogController extends Controller
{
    public function AddBlog(){
        return view('backend.blog.add');
    }//End Method

    public function ManageBlog(){
        $blogs = Blog::orderBy('id','DESC')->get();
        return view('backend.blog.view', compact('blogs'));
    }//End Method

    public function StoreBlog(Request $request)
    {
        $image = $request->file('blog_image');
        $image_name = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(1275, 700)->save('upload/blogs/'.$image_name);
        $save_image = 'upload/blogs/'.$image_name;

        Blog::insert([
            'title' => $request->title,
            'blog_slug' =>  strtolower(str_replace(' ', '-', $request->title)),

            'bloger_name' => $request->bloger_name,
            'description' => $request->description,

            'blog_image' => $save_image,
            'status' => 1,
            'created_at' => Carbon::now(),
        ]);


        $notification = array(
            'message' => 'Blog added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('manage.blog')->with($notification);

    }//End Method


    public function EditBlog($id){

        $blog = Blog::findOrFail($id);

        return view('backend.blog.edit', compact('blog'));


    }//End Method


    public function UpdateBlog(Request $request, $id){
        $data = Blog::find($id);

        if ($request->has('blog_image')){
            unlink($data->blog_image);
            $image = $request->file('blog_image');
            $image_name = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(1275,700)->save('upload/blogs/'.$image_name);
            $save_image = 'upload/blogs/'.$image_name;

            Blog::findOrFail($id)->update([
                'title' => $request->title,
                'blog_slug' =>  strtolower(str_replace(' ', '-', $request->title)),

                'bloger_name' => $request->bloger_name,
                'description' => $request->description,

                'blog_image' => $save_image,
            ]);

            $notification = array(
                'message' => 'Blog Updated Successfully with image',
                'alert-type' => 'info'
            );

            return redirect()->route('manage.blog')->with($notification);

        } else {
            Blog::findOrFail($id)->update([
                'title' => $request->title,
                'blog_slug' =>  strtolower(str_replace(' ', '-', $request->title)),

                'bloger_name' => $request->bloger_name,
                'description' => $request->description,
            ]);

            $notification = array(
                'message' => 'Blog Updated Successfully without image',
                'alert-type' => 'info'
            );

            return redirect()->route('manage.blog')->with($notification);
        }


    } // end method


    public function BlogInactive($id){
        Blog::findOrFail($id)->update(['status' => 0]);
        $notification = array(
            'message' => 'Blog Inactive',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }//End Method


    public function BlogActive($id){
        Blog::findOrFail($id)->update(['status' => 1]);
        $notification = array(
            'message' => 'Blog Active',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }//End Method

    public function DeleteBlog($id){
        $blog = Blog::findOrFail($id);
        unlink($blog->blog_image);
        Blog::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Blog Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }// end method



}
