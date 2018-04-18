<?php

namespace App\Http\Controllers;

use App\Pathways_Projects;
use Illuminate\Http\Request;
use App\Projects;
Use App\Pathways;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;


/**
 *Controller used to create a new project
 */
class new_project extends Controller
{
    /**
     *The following function is used to create the view for the form to create a new project
     * First it starts by checking the type of user by first checking if it is a guest and then transferring them
     *to home page, if they are lecturer or programme leader they gain access to the form
     * Before they gain access the controller will collect the pathways table and pass the return function to create project
     * form blade file
     * else is used to make sure that any other users in are sent to the home page
     **/
    public function index()
    {
        if (Auth::guest()) {
            return view('home');
        } elseif (Auth::user()->permission(1 or 3)) {
            $project = Pathways::all();
            return view('new_project', ['pathway' => $project]);
        } else {
            return view('home');
        }

    }

    /**
     *The store function is used to store what has been created
     * the store function starts by carrying out validation
     * the pathways are then collected from the form
     * then the name of the image is created by requesting time of upload and requesting the extension
     * the image is then requested again and transferred to storage with the name created
     * a new variable is then created to create the path to the image to be placed into the database
     * final all the data is requested from the form and is connected to one of the columns in the table before it
     * is saved
     * Once the data has been saved the data  for pivot table is then saved and the return view is passed back to the user
     */

    public function store(Request $request)
    {

        $this->validate(request(), [
            'title' => 'required|max:70',
            'content' => 'required|max:1000 ',
            'num_participant' => 'required|integer',
            'pathway_id' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,JPEG,PNG,JPG',
        ]);
        $pathway = Input::get('pathway_id', []);


        $imageName = time() . '.' . request()->image->getClientOriginalExtension();
        request()->image->move(public_path('storage/images'), $imageName);
        $image = 'storage/images/' . $imageName;
        $new_project = Projects::create([
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
