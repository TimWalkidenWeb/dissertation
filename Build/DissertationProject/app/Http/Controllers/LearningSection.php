<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\learningSect;
use App\Cws;
use App\Learning_material;
use App\User;

class LearningSection extends Controller
{
    //
    public function index(){
        $cw = Cws::all();
        $learning_section = learningSect::all();
       return view('learning_material.view', ['learning_sections' =>$learning_section, 'cws' =>$cw]);



    }

    public function show($id)
    {
        $learningsection = learningSect::findOrFail($id);

        $staff = User::all();
        $learningmaterial = Learning_material::all();

        return view('learning_material.show')->with(['learningsection' => $learningsection, 'learningMat'=> $learningmaterial, 'user' => $staff]);

    }

    public function create(){
        $learning_section = Cws::all();
        return view('learning_material.new_learningSection', ['cws' =>$learning_section]);
    }




    public function store(Request $request){

        $this->validate(request(),[
            'title' => 'required|max:70',
            'content' => 'required|max:1000 ',
            'cw_id'=> 'required',
            'image' => 'required',
        ]);
        $cws = Input::get('cw_id', []);



        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('storage'), $imageName);
        $image = 'storage/'.$imageName;
        $new_learningSec= learningSect::create([
                'title' => $request->input('title'),
                'content' => $request->input('content'),
                'image' => $image
            ]

        );


        $new_learningSec->save();
        $new_learningSec->learning()->attach($cws);
        $new_learningSec->save();

        return redirect('/learning_material');


    }


    public function edit($id)
    {

    }
    public function update(Request $request, $id)
    {


    }
    public function send(Request $request){

    }


    public function destroy($id)
    {


//        Storage::delete(Projects::find($id)->pluck('image'));

//        return $file;
//



    }



}
