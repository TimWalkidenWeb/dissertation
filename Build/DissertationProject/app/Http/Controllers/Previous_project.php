<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Pathways;
use App\Previous_projects;
Use App\PreProject;
use Illuminate\Support\Facades\Auth;
class Previous_project extends Controller
{
    public function index(){
        $project = PreProject::all();
        $pathway = Pathways::all();
        $tutor = User::all();

        if(Auth::user()){
            return view('previous_project.view', ['project' =>$project, 'tutor' =>$tutor, 'pathway' =>$pathway]);
        }else{
            return redirect('/login');
        }


    }

    public function show($id)
    {
        $project = PreProject::findOrFail($id);

        return view('previous_project.show', ['project' => $project]);
    }

    public function edit($id)
    {
        $pathway = Pathways::all();
        $project = PreProject::findOrFail($id);
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
        $project = PreProject::findOrFail($id);
        $project->Projects;

        $project->update($request->all());
        $project->Projects()->attach($request->get('pathway_id'));

        return redirect()->back();

    }

    public function destroy($id)
    {
        $project = PreProject::find($id);
        $file_path = public_path().'/'.$project->image;
        if(file_exists($file_path)){
            unlink($file_path);
        }

        $project->delete();

        return redirect('/previous_projects');
    }

    }
