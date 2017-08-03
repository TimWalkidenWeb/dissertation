<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Projects;
use App\Staff;
Use App\Pathways;
Use App\Projects_pathways;

class Project extends Controller
{
    public function index(){
        $project = Pathways::all();
        return view('new_project', ['pathway' =>$project]);
    }

    public function create(Request $request){
        $new_project= Projects::create($request->all());

        $new_project->save();

        $list_of_pathway = Projects_pathways::create([
                'pathway_id' => $request->input('pathway_id'),
                'project_id' => $new_project->id,
            ]
        );


        $list_of_pathway->save();

        return redirect('/welcome');
    }
}
