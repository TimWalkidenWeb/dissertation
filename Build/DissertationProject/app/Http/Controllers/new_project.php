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

//        $this->validate(request(),[
//            'title' => 'required|max:70',
//            'content' => 'required|max:200 ',
//            'num_participant' => 'required|integer',
//            'pathway_id'=> 'required',
//            'image_name' => 'required'
//        ]);
//
//        $new_project= Projects::create($request->all());
//
//        $pathway = Input::get('pathway_id', []);

//        $storage = Storage::put('storage', Input::get('image_name'));
//        $request->logo->store('storage');
//        return $request->file('image_name');
//        request()->image_name->move(public_path('storage'));
//        $new_project->save();
//        $new_project->Projects()->attach($pathway);

//        print('hello');
        request()->validate([

            'image' => 'required',

        ]);



        $imageName = time().'.'.request()->image->getClientOriginalExtension();

        request()->image->move(public_path('storage'), $imageName);



        return back()

            ->with('success','You have successfully upload image.')

            ->with('image',$imageName);

    }

}
