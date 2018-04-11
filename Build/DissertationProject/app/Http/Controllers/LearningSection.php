<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\learningSect;
use App\Cws;
use App\Learning_material;
use App\User;
use Illuminate\Support\Facades\Auth;

class LearningSection extends Controller
{

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

        if(Auth::guest()){
            return view('home');
        }
        elseif(Auth::user()->permission(1 or 3)) {
            $learning_section = Cws::all();
            return view('learning_material.new_learningSection', ['cws' =>$learning_section]);
        }else{
          return view('home');
        }

    }




    public function store(Request $request){

        $this->validate(request(),[
            'title' => 'required|max:70',
            'content' => 'required',
            'cw_id'=> 'required',
            'image' => 'required|mimes:jpeg,png,jpg,JPEG,PNG,JPG'

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

        return redirect('/learning_section');


    }


    public function edit($id)
    {
        $cw = Cws::all();


        $learning_section = learningSect::findOrFail($id);
        $learning_section->learning;
        return view('learning_material.Edit')->with(compact('learning_section'))->with(['cw' => $cw]);

    }
    public function update(Request $request, $id)
    {
        $this->validate(request(),[
            'title' => 'required|max:70',
            'content' => 'required|max:1000 ',
            'cw_id'=> 'required',
//            'image' => 'required',
        ]);
        $learning_section = learningSect::findOrFail($id);
        $learning_section->learning;

        $learning_section->update($request->all());


        $learning_section->learning()->attach($request->get('cw_id'));

        return redirect('/learning_section');

    }

    public function destroy($id)
    {

        $learning_section = learningSect::find($id);
        $file_path = public_path().'/'.$learning_section->image;
        if(file_exists($file_path)){
            unlink($file_path);
        }


        $learning_section->learning()->detach();

        $learning_section->delete();
        return redirect('/learning_section');



    }



}
