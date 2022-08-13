<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class UploadController extends Controller
{
    public function create(){
        return view("post");
    }

    public function store(Request $request){
        $this-> validate($request,[
            'name' => 'required',
            'image' => 'required'
        ]);
        $names = $request ->name;
        $image = $request->file("image")->store('upload');

        $data = new Post;
        $data ->name = $names;
        $data ->image = $image;
        $data->save();
        return back()->with('success','File has been uploaded.');
    }
}
