<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Projects;
use App\Staff;
Use App\Pathways;

class Project extends Controller
{
    public function index(){
        $project = Pathways::all();
        return view('new_project', ['pathway' =>$project]);
    }

    public function create(Request $request){
        $new_project= Projects::create($request->all());

        $new_project->save();

        return redirect('/project');
    }
}
