<?php

namespace App\Http\Controllers;

use App\Pathways_Previous_Projects;
use App\User;
use Illuminate\Http\Request;
use App\Pathways;
use App\Previous_projects;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;

class Previouscreate extends Controller
{
    public function index(){
        $project = Pathways::all();
        return view('new_previous_project', ['pathway' =>$project]);
    }

    public function store(Request $request)
    {
//        $this->validate(request(),[
//            'title' => 'required|max:70',
////            'description' => 'required|max:200 ',
//            'date' => 'required|before:today',
////            'image_content' => 'required',
//            'pathway_id'=> 'required',
////            'image' => 'required'
//        ]);
        $pathway = Input::get('pathway_id', []);

//        $imageName = time().'.'.request()->image->getClientOriginalExtension();
//        request()->image->move(public_path('storage'), $imageName);
//        $image = 'storage/'.$imageName;

//        $contentName = time().'.'.request()->image_content->getClientOriginalExtension();
//        request()->image_content->move(public_path('storage'), $contentName);
//        $content = 'storage/'.$contentName;


        $urls = 'http://localhost:8000/storage/text_2.pdf['. 0 . ']';
        $imagick = new \Imagick($urls);
        $imagick->setResolution(300, 300);
        $imagick->setImageFormat('png');
        $imagick->writeImage('text_2.png');
        return $imagick;
        Storage::local('local')->put($imagick, 'hello');
      //  $imagick->move(public_path('storage'));
       // $imagick->move(public_path('storage'));

        $new_project = Previous_projects::create([
            'title' => $request->input('title'),
            'content' => $content,
            'user_id' => $request->input('user_id'),
            'description' => $request->input('description'),
            'date' => $request->input('date'),
            'image' => $imagick,
            ]);
        $new_project->save();
        $new_project->Pathway()->attach($pathway);
        return redirect('/welcome');

    }

    }
