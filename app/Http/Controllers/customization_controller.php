<?php

namespace App\Http\Controllers;

use App\Models\customization;
use Illuminate\Http\Request;

class customization_controller extends Controller
{
    public function showcustomize(){
        $data= customization::find(1);

        return view('admin/customizewebsite',['details'=>$data]);
    }
    public function update_customize(Request $request){
        $this->validate($request,[
            'logo'=>'required',
            'facebook'=>'required',
            'youtube'=>'required',
            'twitter'=>'required'

        ]);


        $data=customization::find(1);

        $data->logo=$request->file('logo')->store('images');
        $data->facebook=$request->facebook;
        $data->youtube=$request->youtube;
        $data->twitter=$request->twitter;

        $data->save();
        return redirect()->back()->with('message', 'Changes have been Saved successfully!');


    }
    // user side ++++++++++++++++++++++++++++++++++++++++++++++++++++++

    // public function useraboutus(){
    //     $showdetails= ModelsAboutus::find(1);
    //     return view('website/aboutus',['information'=>$showdetails]);
    // }
}
