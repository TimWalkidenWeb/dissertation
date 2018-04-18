<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\learningSect;
use App\Cws;
use App\Learning_material;
use App\User;
use Illuminate\Support\Facades\Auth;


/**
 * Controller used for the learning section which includes view, show, create, store, edit, update, delete
 */
class LearningSection extends Controller
{
    /**
     *Public function index is used to create the view for the list of learning section, this done by
     * first collecting all the records in the cw table
     * then collecting all the records in the learning section table
     * the next step is to create the return function to return the learning material view page and set each of the tables
     * to a variable to be called within the view
     */
    public function index()
    {
        $cw = Cws::all();
        $learning_section = learningSect::all();
        return view('learning_material.view', ['learning_sections' => $learning_section, 'cws' => $cw]);
    }

    /**
     * Show function is used to show the individual page for one of the learning sections
     * the first line is used to take the id for the learning section the user looking for and find the record within the
     * learning section table, the the user and learning material table are collected
     * before all the records are returned with the correct blade file.
     */

    public function show($id)
    {
        $learningsection = learningSect::findOrFail($id);

        $staff = User::all();
        $learningmaterial = Learning_material::all();

        return view('learning_material.show')->with(['learningsection' => $learningsection, 'learningMat' => $learningmaterial, 'user' => $staff]);

    }

    /**
     *The following function is used to create the view for the form to create a new learning section
     * First it starts by checking the type of user by first checking if it is a guest and then transferring them
     *to home page, if they are lecturer or programme leader they gain access to the form
     * Before they gain access the controller will collect the cw table and pass the return function to create learning section
     * form blade file
     * else is used to make sure that any other users are sent to the home page
     */

    public function create()
    {

        if (Auth::guest()) {
            return view('home');
        } elseif (Auth::user()->permission(1 or 3)) {
            $learning_section = Cws::all();
            return view('learning_material.new_learningSection', ['cws' => $learning_section]);
        } else {
            return view('home');
        }

    }


    /**
     *The store function is used to store what has been created
     * the store function starts by carrying out validation
     * the cws are then collected from the form
     * then the name of the image is created by requesting time of upload and requesting the extension
     * the image is then requested again and transferred to storage with the name created
     *a new variable is then created to create the path to the image to be placed into the database
     * final all the data is requested from the form and is connected to one of the columns in the table before it
     * is saved
     * Once save the data for pivot table is save and the return view is passed back to the user
     */

    public function store(Request $request)
    {

        $this->validate(request(), [
            'title' => 'required|max:70',
            'content' => 'required',
            'cw_id' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,JPEG,PNG,JPG'

        ]);
        $cws = Input::get('cw_id', []);


        $imageName = time() . '.' . request()->image->getClientOriginalExtension();
        request()->image->move(public_path('storage'), $imageName);
        $image = 'storage/' . $imageName;
        $new_learningSec = learningSect::create([
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


    /**
     * The following function is used to create the edit form
     * first function calls the cw table
     * the second is the id id the find or fail within the learning section table
     * the data collected from the learning section then creates a link to learning to collect the pivot table data
     * all the data collected is  then compacted into a variable name to be used within the view and the correct view file
     * is assigned to the return function
     */
    public function edit($id)
    {
        $cw = Cws::all();


        $learning_section = learningSect::findOrFail($id);
        $learning_section->learning;
        return view('learning_material.Edit')->with(compact('learning_section'))->with(['cw' => $cw]);

    }

    /**
     * Update is used to upload the changes to the edited learning section
     * the first section of the function is the validation
     * then the learning section is found within the table and creates a link to the pivot table
     * learning section is then updates by requesting the date within the form and saving it to the database
     * the new cws are attached to the table through the pivot table
     * final a return is created to take the user back to the learning section
     */
    public function update(Request $request, $id)
    {
        $this->validate(request(), [
            'title' => 'required|max:70',
            'content' => 'required|max:1000 ',
            'cw_id' => 'required',
//            'image' => 'required',
        ]);
        $learning_section = learningSect::findOrFail($id);
        $learning_section->learning;

        $learning_section->update($request->all());

        $learning_section->learning()->detach();
        $learning_section->learning()->attach($request->get('cw_id'));

        return redirect('/learning_section');

    }

    /**
     * the destroy function is used to delete a record within the table
     * first the record is found within the table
     * then the image is unlinked by section through the pathway
     * learning section is then connected to the pivot table before the pivot table is detached
     * the learning section is then deleted and the user is redirected to the learning section page
     */

    public function destroy($id)
    {

        $learning_section = learningSect::find($id);
        $file_path = public_path() . '/' . $learning_section->image;
        if (file_exists($file_path)) {
            unlink($file_path);
        }


        $learning_section->learning()->detach();

        $learning_section->delete();
        return redirect('/learning_section');


    }


}
