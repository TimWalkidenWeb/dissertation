<?php

namespace App\Http\Controllers;

use App\Pathways_Previous_Projects;
use App\User;
use Illuminate\Http\Request;
use App\Pathways;
use App\PreProject;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;


/**
 *Controller used to create a new project
 */
class Previouscreate extends Controller
{
    /**
     *The following function is used to create the view for the form to create a new previous project
     * First it starts by checking the type of user by first checking if it is a guest and then transferring them
     *to home page, if they are lecturer or programme leader they gain access to the form
     * Before they gain access the controller will collect the pathway table and pass the return function to create previous project page
     * form blade file
     * else is used to make sure that any other users are sent to the home page
     */
    public function index()
    {


        if (Auth::guest()) {
            return view('home');
        } elseif (Auth::user()->permission(1 or 3)) {
            $project = Pathways::all();
            return view('new_previous_project', ['pathway' => $project]);
        } else {
            return view('home');
        }
    }

    /**
     *The store function is used to store what has been created
     * the store function starts by carrying out validation
     * the pathway are then collected from the form
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
            'description' => 'required ',
            'date' => 'required|before:today',
            'image_content' => 'required|mimes:pdf',
            'pathway_id' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,JPEG,PNG,JPG'
        ]);


        $imageName = time() . '.' . request()->image->getClientOriginalExtension();
        request()->image->move(public_path('storage/images'), $imageName);
        $image = 'storage/images/' . $imageName;

        $contentName = time() . '.' . request()->image_content->getClientOriginalExtension();
        request()->image_content->move(public_path('storage/documents'), $contentName);
        $content = 'storage/documents/' . $contentName;

        $pathway = Input::get('pathway_id', []);

        $new_project = PreProject::create([
            'title' => $request->input('title'),
            'content' => $content,
            'user_id' => $request->input('user_id'),
            'description' => $request->input('description'),
            'date' => $request->input('date'),
            'image' => $image,
        ]);
        $new_project->save();
        $new_project->Projects()->attach($pathway);
        return redirect('/previous_projects');

    }

}
