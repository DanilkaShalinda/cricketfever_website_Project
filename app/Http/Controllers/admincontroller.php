<?php

namespace App\Http\Controllers;

use App\Models\contact_admin;
use App\Models\post;
use App\Models\series;
use Illuminate\Http\Request;

class admincontroller extends Controller
{
    public function createpost(Request $request){
        $this->validate($request,[
            'title'=>'required|max:250|min:10',
            'description'=>'required|max:2000|min:10',
            'cover_image'=> 'required',

        ]);




            $addpost=new post();
            $addpost->title=$request->title;
            $addpost->description=$request->description;
            $addpost->cover_image= $request->file('cover_image')->store('images');
            $image1=$request->file('image_1');
            $image2=$request->file('image_2');
            $image3=$request->file('image_3');
            $image4=$request->file('image_4');
            $image5=$request->file('image_5');
            $image6=$request->file('image_6');

            if($image1==null){
                $image1="";
            }else{
                $image1=$request->file('image_1')->store('images');
            }

            if($image2==null){
                $image2="";
            }else{
                $image2=$request->file('image_2')->store('images');
            }
            if($image3==null){
                $image3="";
            }else{
                $image3=$request->file('image_3')->store('images');
            }
            if($image4==null){
                $image4="";
            }else{
                $image4=$request->file('image_4')->store('images');
            }
            if($image5==null){
                $image5="";
            }else{
                $image5=$request->file('image_5')->store('images');
            }
            if($image6==null){
                $image6="";
            }else{
                $image6=$request->file('image_6')->store('images');
            }




            $addpost->save();
            return redirect()->back()->with('message', 'Post Has Been Added Sucessfully !');

    }
// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ post++++++++++++++++++++++++++++++++++++++++++
    public function viewallpost(){
        $allpost=post::all();

            return view('admin/viewallposts',['posts'=>$allpost]);
    }

    public function deletepost($id){
        $post=post::find($id);
        $post->delete();
        return redirect()->back();
    }

    public function editpost($id)
    {
        $data= post::find($id);
        return view('admin/editpost',['data'=>$data]);
    }

    public function update_post(Request $request){
        $data=post::find($request->id);


        $data->title=$request->title;
        $data->description=$request->description;
        $data->cover_image= $request->file('cover_image')->store('images');
        $image1=$request->file('image_1');
        $image2=$request->file('image_2');
        $image3=$request->file('image_3');
        $image4=$request->file('image_4');
        $image5=$request->file('image_5');
        $image6=$request->file('image_6');

        if($image1==null){
            $image1="";
        }else{
            $image1=$request->file('image_1')->store('images');
        }

        if($image2==null){
            $image2="";
        }else{
            $image2=$request->file('image_2')->store('images');
        }
        if($image3==null){
            $image3="";
        }else{
            $image3=$request->file('image_3')->store('images');
        }
        if($image4==null){
            $image4="";
        }else{
            $image4=$request->file('image_4')->store('images');
        }
        if($image5==null){
            $image5="";
        }else{
            $image5=$request->file('image_5')->store('images');
        }
        if($image6==null){
            $image6="";
        }else{
            $image6=$request->file('image_6')->store('images');
        }

        $data->save();
        return redirect()->back()->with('message', 'Post Has Been updated Sucessfully !');

    }
// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ Series++++++++++++++++++++++++++++++++++++++++
    public function createseries(Request $request){
        $this->validate($request,[
            'cover_image'=>'required',
            'title'=>'required|max:250|min:10',
            'description'=>'required|max:2000|min:10',

        ]);


            $addseries=new series();
            $addseries->cover_image=$request->file('cover_image')->store('images');
            $addseries->title=$request->title;
            $addseries->description=$request->description;

            $image_1=$request->file('image_1');
            $image_2=$request->file('image_2');
            $image_3=$request->file('image_3');
            $image_4=$request->file('image_4');
            $image_5=$request->file('image_5');
            $image_6=$request->file('image_6');

            if($image_1==null){
            $image_1="";
            }else{
                $image_1=$request->file('image_1')->store('images');
            }

            if($image_2==null){
            $image_2="";
            }else{
                $image_2=$request->file('image_2')->store('images');
            }

            if($image_3==null){
            $image_3="";
            }else{
                $image_3=$request->file('image_3')->store('images');
            }

            if($image_4==null){
            $image_4="";
            }else{
                $image_4=$request->file('image_4')->store('images');
            }
            if($image_5==null){
            $image_5="";
            }else{
                $image_5=$request->file('image_5')->store('images');
            }

            if($image_6==null){
            $image_6="";
            }else{
                $image_6=$request->file('image_6')->store('images');
            }


            $addseries->save();
            return redirect()->back()->with('message', 'Series Has Been Added Sucessfully !');
    }


    public function viewallseries(){
        $allseries=series::all();

            return view('admin/viewallseries',['posts'=>$allseries]);
    }

    public function deleteseries($id){
        $post=series::find($id);
        $post->delete();
        return redirect()->back();
    }

    public function editseries($id){
        $data= series::find($id);
        return view('admin/editseries',['data'=>$data]);
    }

    public function update_series(Request $request){
        $data=series::find($request->id);

        $data->cover_image=$request->file('cover_image')->store('images');
        $data->title=$request->title;
        $data->description=$request->description;
        $image_1=$request->file('image_1');
        $image_2=$request->file('image_2');
        $image_3=$request->file('image_3');
        $image_4=$request->file('image_4');
        $image_5=$request->file('image_5');
        $image_6=$request->file('image_6');

        if($image_1==null){
        $image_1="";
        }else{
            $image_1=$request->file('image_1')->store('images');
        }

        if($image_2==null){
        $image_2="";
        }else{
            $image_2=$request->file('image_2')->store('images');
        }

        if($image_3==null){
        $image_3="";
        }else{
            $image_3=$request->file('image_3')->store('images');
        }

        if($image_4==null){
        $image_4="";
        }else{
            $image_4=$request->file('image_4')->store('images');
        }
        if($image_5==null){
        $image_5="";
        }else{
            $image_5=$request->file('image_5')->store('images');
        }

        if($image_6==null){
        $image_6="";
        }else{
            $image_6=$request->file('image_6')->store('images');
        }


        $data->save();
        return redirect()->back()->with('message', 'Series Has Been Updated Sucessfully !');

    }

// +++++++++++++++++++++++++ contact admin +++++++++++++++++++++++++++++++
    public function contact_admin(){
        $allmessage=contact_admin::all();

            return view('admin/contact_admin',['messages'=>$allmessage]);
    }

    public function delete_message($id){
        $messages=contact_admin::find($id);
        $messages->delete();
        return redirect()->back();
    }








}
