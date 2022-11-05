<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\activity;
use App\Models\Projects;
use Illuminate\Console\Scheduling\Event;
use Illuminate\Support\Facades\Route;


class ActivityController extends Controller
{
    public function index()
    {
        return view('add-activity-post');
    }

    public function viewAc($id)
    {
        $post = Post::findOrFail($id);
        return view('view-ac', ['post' => $post]);
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


    function showActivity()
    {
        $data = Post::all();
        return view('list-activity-post', ['posts' => $data]);
    }

    function delete($id)
    {
        $data = Post::find($id);
        $data->delete();
        return redirect()->back();
    }


    function edit($id)
    {
        $data = Post::find($id);
        return view('edit', ['post' => $data]);
    }

    function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'date' => 'required',
        ]);

        $data = Post::find($id);
        // Getting values from the blade template form
        $data->title =  $request->get('title');
        $data->description = $request->get('description');
        $data->date = $request->get('date');
        $data->save();

        return redirect('list')->with('success', 'Stock updated.');
    }

    public function  activityId($id)
    {
        $post = Post::select("*")->where('id', '=', $id)->get()->first();
        return view('student-activity', ['post' => $post]);
    }

    public function sendAcToTeacher(Request $request)
    { {
            // dd( Route::current()->parameters['id']);
            $sendActivity = new Activity;
            $sendActivity->activityLink = $request->activityLink;
            $sendActivity->activityDescription = $request->activityDescription;
            $sendActivity->post_id = $request->post_id;
            $sendActivity->project_id = 1; // Mudar para id do projeto do aluno logado!!!!
            $sendActivity->save();
            return redirect()->back();
        }
    }
}
//$data=Post::find($request->id);
//        $data->title = $request->title;
//        $data->description = $request->description;
//        $data->date = $request->date;
//        $data->archive = $request->archive;
//       $data->save();
//        return redirect('list')->with('msg', 'Evento editado com sucesso');
