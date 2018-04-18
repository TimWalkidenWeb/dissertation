<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Learning_material;

class Learning_materials extends Controller
{
    /**
     *The store function is used to store the learning material within the learning section
     * the function starts by carrying out validation checks
     * then the id of the learning section is requested to be used when return function created
     * then all the other data is requested and assigned to one of the coloumns
     * before the record is saved
     * final a redirect is created using the requested learning section to take the user back to the learning section page
     */
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

        return redirect('/learning_section/' . $Id);
    }

    /**
     * The following function is used to create the edit form
     * first function the function finds the id within the learning material table
     * all the data collected is then compacted into a variable name to be used within the view and the correct view file
     * is assigned to the return function
     */
    public function edit($id)
    {


        $learning_mat = Learning_material::findOrFail($id);

        return view('learning_material.advice_edit')->with(compact('learning_mat'));

    }

    /**
     * Update is used to upload the changes to the edited learning material
     * the first section of the function is the validation
     * then the learning material is found within the table
     * learning material is then updated by requesting the date within the form and saving it to the database
     * final a return is created to take the user back to the learning section
     */

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


        return redirect('/learning_section/' . $Id_learningsect);

    }


    /**
     * the destroy function is used to delete a record within the table
     * first the record is found within the table
     * the learning section is then deleted and the user is redirected to the learning section page
     */

    public function destroy($id)
    {

        $learningMaterial = Learning_material::find($id);

        $learningMaterial->delete();
        return back();


    }

}
