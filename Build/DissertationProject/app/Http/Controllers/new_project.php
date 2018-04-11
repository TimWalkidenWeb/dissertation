<?php

namespace App\Http\Controllers;

use App\Pathways_Projects;
use Illuminate\Http\Request;
use App\Projects;
Use App\Pathways;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class new_project extends Controller
{
//    /**
//     * Display a listing of the resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
    public function index()
    {
        if(Auth::guest()){
            return view('home');
        }
        elseif(Auth::user()->permission(1 or 3)) {
            $project = Pathways::all();
            return view('new_project', ['pathway' =>$project]);
        }else{
            return view('home');
        }

    }

    public function store(Request $request){

        $this->validate(request(),[
            'title' => 'required|max:70',
            'content' => 'required|max:1000 ',
            'num_participant' => 'required|integer',
            'pathway_id'=> 'required',
            'image' => 'required|mimes:jpeg,png,jpg,JPEG,PNG,JPG',
        ]);
        $pathway = Input::get('pathway_id', []);


        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('storage/images'), $imageName);
        $image = 'storage/images/'.$imageName;
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

        return redirect('/project');


    }

}
