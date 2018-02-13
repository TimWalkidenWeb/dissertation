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
        $this->validate(request(),[
            'title' => 'required|max:70',
            'description' => 'required|max:200 ',
            'date' => 'required|before:today',
            'image_content' => 'required',
            'pathway_id'=> 'required',
            'image' => 'required'
        ]);
        $project = Previous_projects::findOrFail($id);
        $project->Projects;

        $project->update($request->all());
        $project->Projects()->attach($request->get('pathway_id'));

        return redirect()->back();

    }

    public function destroy($id)
    {
        $project = Previous_projects::find($id);
        $file_path = public_path().'/'.$project->image;
        if(file_exists($file_path)){
            unlink($file_path);
        }

        $project->delete();

        return view('previous_projects');
    }

    }
