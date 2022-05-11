<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
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
        $post->archive = $request->archive;
        $post->save();
        return redirect('list')->with('status', 'Activity Post has been inserted');
    }
}
