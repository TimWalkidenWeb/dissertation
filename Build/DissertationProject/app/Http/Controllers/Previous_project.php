<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Pathways;
use App\Previous_projects;
Use App\Previous_projects_pathways;
class Previous_project extends Controller
{
    public function index(){
        $project = Previous_projects::all();
        $pathway = Pathways::all();
        $tutor = User::all();

        return view('previous_project.view', ['project' =>$project, 'tutor' =>$tutor, 'pathway' =>$pathway]);
    }

    public function show($id)
    {
        $project = Previous_projects::findOrFail($id);

        return view('previous_project.show', ['project' => $project]);
    }

    public function edit($id)
    {
        $pathway = Pathways::all();
        $project = Previous_projects::findOrFail($id);
        $project->Projects;


        return view('previous_project.Edit', compact('project'), ['pathway' => $pathway]);
    }



    public function update(Request $request, $id)
    {

        $project = Previous_projects::findOrFail($id);

        $project->update($request->all());

        return redirect()->back();

    }

    public function destroy($id)
    {
        $project = Previous_projects::find($id);

        $project->delete();

        return redirect()->back();
    }

    }
