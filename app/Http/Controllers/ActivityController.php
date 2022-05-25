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


    function edit($id){
        $data=Post::find($id);
        return view('edit', ['post' => $data]);
    }

    function update( Request $request, $id){
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'date'=>'required',
        ]);

        $data = Post::find($id);
        // Getting values from the blade template form
        $data->title =  $request->get('title');
        $data->description = $request->get('description');
        $data->date = $request->get('date');
        $data->save();

        return redirect('list')->with('success', 'Stock updated.');
    }

}
//$data=Post::find($request->id);
//        $data->title = $request->title;
//        $data->description = $request->description;
//        $data->date = $request->date;
//        $data->archive = $request->archive;
//       $data->save();
//        return redirect('list')->with('msg', 'Evento editado com sucesso');
