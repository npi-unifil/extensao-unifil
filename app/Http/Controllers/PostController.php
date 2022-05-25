<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use \Illuminate\Auth\Access\Response;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('add-activity-post');
    }

    public function  store(Request $request)
    {
        $post = new Post;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->date = $request->date;
        $post->grade = $request->grade;
        //$post->file = $request->file;
        $post->save();
        return redirect('list')->with('status', 'Activity Post has been inserted');
    }
}

//public function download(Request $request)
    //
    //    $file = public_path(). "/images/test.jpg";
    //$headers = ['Content-Type: image/jpeg'];

    //  return \Response::download($file, 'plugin.jpg', $headers);
    //
