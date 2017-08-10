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
        $project = Projects::all();
        return view('project', ['project' =>$project]);
    }

        public function show($id)
    {
        $project = Projects::findOrFail($id);

        return view('projects.show', ['project' => Projects::findOrFail($id)]);
    }

    public function edit($id)
    {
        $project = Projects::findOrFail($id);
            return view('projects.edit.blade.blade.php', compact('project'));
    }
    public function destroy($id)
    {
        $project = Projects::find($id);

        $project->delete();

        return redirect('project');
    }
}
