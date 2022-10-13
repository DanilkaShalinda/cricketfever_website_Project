<?php

namespace App\Http\Controllers;

use App\Models\contact_admin;
use Illuminate\Http\Request;

class web_contactus extends Controller
{
    public function contactus(Request $request){
        $this->validate($request,[
            'name'=>'required|max:250|min:5',
            'email'=>'required|max:250|min:3',
            'subject'=>'required|max:250|min:5',
            'message'=>'required|max:2500|min:10',

        ]);


            $message=new contact_admin();
            $message->name=$request->name;
            $message->email=$request->email;
            $message->subject=$request->subject;
            $message->message=$request->message;



            $message->save();
            return redirect()->back()->with('message', 'We Have recieved Your message, We Will response Your As Soon As Possible.');
        }
}
