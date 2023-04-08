<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;

class SliderController extends Controller
{
    public function ViewSlider(){

        $sliders = Slider::latest()->get();
        return view('backend.slider.view', compact('sliders'));
    }//End Method

    public function AddSlider(){
        return view('backend.slider.add');
    }//End Method


    public function StoreSlider(Request $request){

        $image = $request->file('slider_img');
        $image_name = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(1920,800)->save('upload/slider/'.$image_name);
        $save_url = 'upload/slider/'.$image_name;

        Slider::insert([
           'slider_title' => $request->slider_title,
           'description' => $request->description,
           'slider_img' => $save_url,
           'status' => 1,
           'created_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => 'New Slider Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('view.slider')->with($notification);
    }//End Method

    public function EditSlider($id){
        $slider = Slider::find($id);
        return view('backend.slider.edit', compact('slider') );
    }//End Method

    public function UpdateSlider(Request $request, $id){
        $data = Slider::find($id);

        if ($request->has('slider_img')){
            $image = $request->file('slider_img');
            unlink($data->slider_img);
            $image_name = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(1920,800)->save('upload/slider/'.$image_name);
            $save_url = 'upload/slider/'.$image_name;

            Slider::findOrFail($id)->update([
               'slider_title' => $request->slider_title,
               'description' => $request->description,
               'slider_img' =>$save_url,
               'updated_at' => Carbon::now(),
            ]);

            $notification = array(
                'message' => 'Slider updated with image successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('view.slider')->with($notification);
        } else {
            Slider::findOrFail($id)->update([
                'slider_title' => $request->slider_title,
                'description' => $request->description,
                'updated_at' => Carbon::now(),
            ]);

            $notification = array(
                'message' => 'Slider updated without image successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('view.slider')->with($notification);
        }

    }//End Method


    public function SliderInactive($id){
        Slider::findOrFail($id)->update([
            'status' => 0,
        ]);

        $notification = array(
            'message' => 'Slider inactive successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }//End Method

    public function SliderActive($id){
        Slider::findOrFail($id)->update([
            'status' => 1,
        ]);

        $notification = array(
            'message' => 'Slider active successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }//End Method

    public function DeleteSlider($id){
        $data = Slider::find($id);
        unlink($data->slider_img);
        Slider::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Slider deleted successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }



}
