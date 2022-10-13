<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class newslinepost extends Controller
{
    public function newslinepost_function(){
        $allpost=post::all();
        return view('website/newsline',['posts'=>$allpost]);
    }
}
