<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;

class AdminProfileController extends Controller
{
    public function AdminProfile(){
        $adminData = Admin::find(Auth::user()->id);
        return view('admin.settings.profile', compact('adminData'));
    }//End Method

    public function AdminProfileEdit(){
        $editData = Admin::find(Auth::user()->id);
        return view('admin.settings.edit_profile', compact('editData'));
    }//End Method

    public function AdminProfileUpdate(Request $request){
        $data = Admin::find(Auth::user()->id);
        $data->name = $request->name;
        $data->email = $request->email;
        $oldImage = $data->profile_photo_path;

        if ($request->file('profile_photo_path')){
            $image = $request->file('profile_photo_path');
            $image_name = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();

            Image::make($image)->resize(200,200)->save('upload/admin_profile_images/'.$image_name);
//            $save_url = 'upload/admin_profile_images/'.$image_name;
            $data['profile_photo_path'] = 'upload/admin_profile_images/'.$image_name;;

            if (is_file($oldImage)) {
                unlink($oldImage);
            }
        }
        $data->save();

        $notification = array(

            'message' => 'Admin Profile Updated Successfully',
            'alart-type' => 'success'
        );
        return redirect()->route('admin.profile')->with($notification);
    }//End Method

    public function AdminPasswordChange(){
        $adminData = Admin::find(Auth::user()->id);
        return view('admin.settings.password', compact('adminData'));
    }//End Method

    public function AdminPasswordUpdate(Request $request){
        $validateData = $request->validate([
            'oldpassword' => 'required',
            'password' => 'required',
            'confirm_password' => 'required|same:password',

        ]);

        $hashedPassword = Admin::find(Auth::user()->id)->password;
        if (Hash::check($request->oldpassword, $hashedPassword)) {
            $admin = Admin::find(1);
            $admin->password = Hash::make($request->password);
            $admin->save();

            session()->flash('message','Password Updated Successfully');
            return redirect()->back();

        } else{
            session()->flash('message','Old Password Is Not Match');
            return redirect()->back();
        }
    }//End Method
}
