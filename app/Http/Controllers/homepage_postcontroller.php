<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class homepage_postcontroller extends Controller
{
    public function homepage_post_display(){

        $allpost=post::all();

            return view('website/index',['posts'=>$allpost]);
    }
}
