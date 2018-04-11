<?php

namespace App\Http\Controllers;

use App\Pathways_Previous_Projects;
use App\User;
use Illuminate\Http\Request;
use App\Pathways;
use App\PreProject;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;


class Previouscreate extends Controller
{
    public function index(){


        if(Auth::guest()){
            return view('home');
        }
        elseif(Auth::user()->permission(1 or 3)) {
            $project = Pathways::all();
            return view('new_previous_project', ['pathway' =>$project]);
        }else{
            return view('home');
        }
    }

    public function store(Request $request)
    {
        $this->validate(request(),[
            'title' => 'required|max:70',
            'description' => 'required ',
            'date' => 'required|before:today',
            'image_content' => 'required|mimes:pdf',
            'pathway_id'=> 'required',
            'image' => 'required|mimes:jpeg,png,jpg,JPEG,PNG,JPG'
        ]);


        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('storage/images'), $imageName);
        $image = 'storage/images/'.$imageName;

        $contentName = time().'.'.request()->image_content->getClientOriginalExtension();
        request()->image_content->move(public_path('storage/documents'), $contentName);
        $content = 'storage/documents/'.$contentName;

        $pathway = Input::get('pathway_id', []);

        $new_project = PreProject::create([
            'title' => $request->input('title'),
            'content' => $content,
            'user_id' => $request->input('user_id'),
            'description' => $request->input('description'),
            'date' => $request->input('date'),
            'image' => $image,
            ]);
        $new_project->save();
        $new_project->Pathway()->attach($pathway);
        return redirect('/previous_projects');

    }

    }
