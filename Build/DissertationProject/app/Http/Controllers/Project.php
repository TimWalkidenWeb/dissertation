<?php

namespace App\Http\Controllers;

use App\Pathways_Projects;
use App\User;
use Illuminate\Http\Request;

use App\Projects;
Use App\Pathways;


class Project extends Controller
{
    public function index(){
        $project = Projects::all();
        $user = User::all();

        return view('projects.view', ['project' =>$project], ['user' =>$user]);
    }


        public function show($id)
    {
        $project = Projects::findOrFail($id);

        return view('projects.show', ['project' => Projects::findOrFail($id)]);
    }



    public function edit($id)
    {
       $pathway = Pathways::all();
        $project = Projects::findOrFail($id);
        $project->Projects;


            return view('projects.Edit', compact('project'), ['pathway' => $pathway]);
    }
    public function update(Request $request, $id)
    {

        $project = Projects::findOrFail($id);

        $project->update($request->all());

        return redirect()->back();
    }

    public function destroy($id)
    {
        $project = Projects::find($id);

        $project->delete();

        return redirect('welcome');
    }
}
