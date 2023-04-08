<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class UserProfileController extends Controller
{
    public function UserDashboard(){
        $userData = User::find(Auth::user()->id);
        return view('frontend.profile.user_dashboard', compact('userData'));

    }//End Method

    public function UserProfile(){
        $userData = User::find(Auth::user()->id);
        return view('frontend.profile.user_profile', compact('userData'));

    }//End Method

    public function EditProfile(){
        $userData = User::find(Auth::user()->id);
        return view('frontend.profile.edit_profile', compact('userData'));

    }//End Method

    public function UserProfileUpdate(Request $request){
        // $request->validate([
        //     'phone' => ['required', 'string', 'phone', 'max:20', 'unique:'.User::class],
        // ]);


        $data = User::find(Auth::user()->id);

        if ($request->file('profile_image')){
            // unlink($data->profile_image);
            $image = $request->file('profile_image');
            $image_name = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();

            Image::make($image)->resize(200,200)->save('upload/user_profile_images/'.$image_name);
            $imageData = 'upload/user_profile_images/'.$image_name;
            // dd($request);
            User::findOrFail($data->id)->update([
                'email'=> $request->email,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'phone' => $request->phone,
                'profile_image' => $imageData,
            ]);

            $notification = array(

                'message' => 'User Profile Updated Successfully with image',
                'alart-type' => 'success'
            );
            return redirect()->route('user.profile')->with($notification);
        } else{

            User::findOrFail($data->id)->update([
                'email'=> $request->email,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'phone' => $request->phone,
            ]);

            $notification = array(

                'message' => 'User Profile Updated Successfully without image',
                'alart-type' => 'success'
            );
            return redirect()->route('user.profile')->with($notification);

        }




    }//End Method

    public function UserPasswordChange(){
        $userData = User::find(Auth::user()->id);
        return view('frontend.profile.user_password', compact('userData'));
    }//End Method

    public function UserUpdatePassword(Request $request){
        $validateData = $request->validate([
            'oldpassword' => 'required',
            'password' => 'required',
            'confirm_password' => 'required|same:password',

        ]);

        $id = Auth::user()->id;
        $hashedPassword = User::find($id)->password;
        if (Hash::check($request->oldpassword, $hashedPassword)) {
            $user = User::find($id);
            $user->password = Hash::make($request->password);
            $user->save();
            Auth::logout();

            session()->flash('message','Password Updated Successfully');
            $notification = array(

                'message' => 'Your password changed successfully, Please log in with your new password',
                'alart-type' => 'success'
            );
            return redirect()->route('login')->with($notification);

        } else{
            session()->flash('message','Old Password Is Not Match');
            return redirect()->back();
        }
    }//End Method
}
