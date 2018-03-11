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

        return redirect('/learning_material/'.$Id);
    }

}
