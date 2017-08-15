<?php

namespace App\Http\Controllers;

use App\Pathways_Previous_Projects;
use App\User;
use Illuminate\Http\Request;
use App\Pathways;
use App\Previous_projects;
class Previouscreate extends Controller
{
    public function index(){
        $project = Pathways::all();
        return view('new_previous_project', ['pathway' =>$project]);
    }

    public function create(Request $request)
    {
        $new_project = Previous_projects::create($request->all());

        $new_project->save();

        $list_of_pathway = Pathways_Previous_Projects::create([
                'pathways_id' => $request->input('pathway_id'),
                'previous_project_id' => $new_project->id,
            ]
        );

        $list_of_pathway->save();
        return redirect('/welcome');

    }

    }
