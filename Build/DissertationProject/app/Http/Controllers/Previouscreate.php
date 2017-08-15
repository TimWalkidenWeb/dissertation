<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Pathways;
use App\Previous_projects;
Use App\Previous_projects_pathways;
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

        $list_of_pathway = Previous_projects_pathways::create([
                'pathway_id' => $request->input('pathway_id'),
                'previous_id' => $new_project->id,
            ]
        );

        $list_of_pathway->save();
        return redirect('/welcome');

    }

    }
