<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Policy;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class PolicyController extends Controller
{
    public function AddPolicy(){
        return view('backend.policy.add');
    }//End Method

    public function ManagePolicy(){
        $policies = Policy::orderBy('id','DESC')->get();
        return view('backend.policy.view', compact('policies'));
    }//End Method

    public function StorePolicy(Request $request)
    {

        Policy::insert([
            'title' => $request->title,
            'description' => $request->description,
            'status' => 1,
            'created_at' => Carbon::now(),
        ]);


        $notification = array(
            'message' => 'Policy added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('manage.policy')->with($notification);

    }//End Method


    public function EditPolicy($id){

        $policy = Policy::findOrFail($id);

        return view('backend.policy.edit', compact('policy'));


    }//End Method


    public function UpdatePolicy(Request $request, $id){

        Policy::findOrFail($id)->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        $notification = array(
            'message' => 'Policy Updated Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('manage.policy')->with($notification);


    } // end method


    public function PolicyInactive($id){
        Policy::findOrFail($id)->update(['status' => 0]);
        $notification = array(
            'message' => 'Policy Inactive',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }//End Method


    public function PolicyActive($id){
        Policy::findOrFail($id)->update(['status' => 1]);
        $notification = array(
            'message' => 'Policy Active',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }//End Method

    public function DeletePolicy($id){
        Policy::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Policy Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }// end method



}
