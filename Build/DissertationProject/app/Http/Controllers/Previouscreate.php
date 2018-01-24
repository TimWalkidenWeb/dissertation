<?php

namespace App\Http\Controllers;

use App\Pathways_Previous_Projects;
use App\User;
use Illuminate\Http\Request;
use App\Pathways;
use App\Previous_projects;
use Illuminate\Support\Facades\Input;

class Previouscreate extends Controller
{
    public function index(){
        $project = Pathways::all();
        return view('new_previous_project', ['pathway' =>$project]);
    }

    public function create(Request $request)
    {
        $this->validate(request(),[
            'title' => 'required|max:70',
            'description' => 'required|max:200 ',
            'date' => 'required|before:today',
            'content' => 'required',
            'pathway_id'=> 'required'
        ]);

        $new_project = Previous_projects::create(


            $request->all());
        $pathway = Input::get('pathway_id', []);

        $new_project->save();

        $list_of_pathway = Pathways_Previous_Projects::create([
                'pathways_id' => $request->input('pathway_id'),
                'previous_project_id' => $new_project->id,
            ]
        );


        $new_project->Projects()->attach($pathway);
        return redirect('/welcome');

    }

    }
