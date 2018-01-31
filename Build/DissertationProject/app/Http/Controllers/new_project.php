<?php

namespace App\Http\Controllers;

use App\Pathways_Projects;
use Illuminate\Http\Request;
use App\Projects;
Use App\Pathways;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;

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
            'pathway_id'=> 'required',
            'image' => 'required',
        ]);
//

//
        $pathway = Input::get('pathway_id', []);


        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('storage'), $imageName);
        $image = 'storage/'.$imageName;
        $new_project= Projects::create([
                'title' => $request->input('title'),
                'content' => $request->input('content'),
                'user_id' => $request->input('user_id'),
                'num_participant' => $request->input('num_participant'),
                'image' => $image
            ]

        );


        $new_project->save();
        $new_project->Projects()->attach($pathway);
        $new_project->save();

        return back()

            ->with('success','You have successfully upload image.')

            ->with('image',$imageName);

    }

}
