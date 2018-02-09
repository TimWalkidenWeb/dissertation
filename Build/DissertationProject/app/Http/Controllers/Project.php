<?php

namespace App\Http\Controllers;

use App\Pathways_Projects;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Projects;
Use App\Pathways;
use App\Mail\ProjectResponse;


class Project extends Controller
{
    public function index(){
        $project = Projects::all();
        $pathway = Pathways::all();
        $tutor = User::all();

        return view('projects.view', ['project' =>$project, 'tutor' =>$tutor, 'pathway' =>$pathway]);
    }


        public function show($id)
    {
        $project = Projects::findOrFail($id);
        $project->Projects;

        return view('projects.show')->with(compact('project'));
    }



    public function edit($id)
    {
       $pathway = Pathways::all();


        $project = Projects::findOrFail($id);
        $project->Projects;
         return view('projects.Edit')->with(compact('project'))->with(['pathway' => $pathway]);
    }
    public function update(Request $request, $id)
    {


        $project = Projects::findOrFail($id);
//        $project->Projects()->detach();
        $project->Projects;

        $project->update($request->all());


        $project->Projects()->attach($request->get('pathway_id'));

        return redirect()->back();

    }
    public function send(Request $request){
        $lecture = request()->input('lecture');
        $email = User::where('id' ,$lecture)->pluck('email');

        $order = Projects::findOrFail(request()->input('project'));



        Mail::to($email)->send(new ProjectResponse($order));
        return view ('home');
    }


    public function destroy($id)
    {
        $project = Projects::find($id);

        $project->delete();

        return redirect('home');
    }



    }
