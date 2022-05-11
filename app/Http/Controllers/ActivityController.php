<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Console\Scheduling\Event;

class ActivityController extends Controller
{
    function showActivity(){
        $data = Post::all();
        return view('list-activity-post', ['posts'=>$data]);
    }

    function delete($id){
        $data=Post::find($id);
        $data->delete();
            return redirect()-> back();
    }

    function update($id){
        $data = Post::find($id);

        return view('posts.update', ['event' => $data]);
    }
}
