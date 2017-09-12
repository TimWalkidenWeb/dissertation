<?php

namespace App\Http\Controllers;

use App\Pathways_Projects;
use Illuminate\Http\Request;
use App\Projects;
Use App\Pathways;
use Illuminate\Support\Facades\Input;

class new_project extends Controller
{
//    /**
//     * Display a listing of the resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
    public function index()
    {
        $project = Pathways::all();
        return view('new_project', ['pathway' =>$project]);
    }


//
//    /**
//     * Show the form for creating a new resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
    public function store(Request $request){

        $this->validate(request(),[
            'title' => 'required|max:70',
            'content' => 'required|max:200 ',
            'num_participant' => 'required|integer',
            'pathway_id'=> 'required'
        ]);

        $new_project= Projects::create($request->all());

        $pathway = Input::get('pathway_id', []);

        $new_project->save();
        $new_project->Projects()->attach($pathway);

        return redirect('/project');
    }

}
