<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Learning_material;

class Learning_materials extends Controller
{
    public function store(Request $request)
    {

        $this->validate(request(), [
            'Title' => 'required|max:70',
            'content' => 'required|max:1000 ',
            'staff_id' => 'required',
            'learning_section_id' => 'required'
        ]);

        $Id = $request->input('learning_section_id');

        $new_learningMat = Learning_material::create([
                'Title' => $request->input('Title'),
                'content' => $request->input('content'),
                'staff_id' => $request->input('staff_id'),
                'learning_section_id' => $request->input('learning_section_id'),
            ]

        );

        $new_learningMat->save();

        return redirect('/learning_section/'.$Id);
    }

    public function edit($id)
    {



        $learning_mat = Learning_material::findOrFail($id);

        return view('learning_material.advice_edit')->with(compact('learning_mat'));

    }

    public function update(Request $request, $id)
    {
        $this->validate(request(), [
            'Title' => 'required|max:70',
            'content' => 'required|max:1000 ',
            'staff_id' => 'required',
            'learning_section_id' => 'required'
        ]);
        $edit_learningMat = Learning_material::find($id);

        $Id_learningsect = $request->input('learning_section_id');
        $edit_learningMat->update([
                'Title' => $request->input('Title'),
                'content' => $request->input('content'),
                'staff_id' => $request->input('staff_id'),
                'learning_section_id' => $request->input('learning_section_id')
                ]
        );



        return redirect('/learning_section/'.$Id_learningsect);

    }

    public function destroy($id)
    {

        $learningMaterial = Learning_material::find($id);

        $learningMaterial->delete();
        return back();



    }

}
