<?php

namespace App\Http\Controllers;

use App\Models\aboutus as ModelsAboutus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class aboutus extends Controller
{
    // public function savedetails(Request $request){
    //     $this->validate($request,[
    //         'details'=>'required|max:3000|min:5',

    //     ]);
    //     $details=new ModelsAboutus();
    //     $details->details=$request->details;



    //     $details->save();
    //     return redirect()->back()->with('message', 'Changes have been Saved !');
    // }
    // admin side+++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    public function showaboutus(){
        $getdetails= ModelsAboutus::find(1);
        return view('admin/aboutus',['details'=>$getdetails]);
    }
    public function update_aboutus_admin(Request $request){
        $this->validate($request,[
            'details'=>'required|max:5000|min:5',

        ]);
        $data=ModelsAboutus::find(1);

        $data->details=$request->details;

        $data->save();
        return redirect()->back()->with('message', 'About us Has Been updated Sucessfully !');


    }
    // user side ++++++++++++++++++++++++++++++++++++++++++++++++++++++

    public function useraboutus(){
        $showdetails= ModelsAboutus::find(1);
        return view('website/aboutus',['information'=>$showdetails]);
    }


}
