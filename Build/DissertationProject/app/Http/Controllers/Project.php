<?php

namespace App\Http\Controllers;

use App\Pathways_Projects;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Projects;
Use App\Pathways;
use App\Mail\ProjectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;


/**
 * Controller used for the project section which includes view, show,edit, update, delete
 */
class Project extends Controller
{
    /**
     *Public function index is used to create the view for the list of project, this done by
     * first collecting all the records in the projects table
     * then collecting all the records in the pathway table
     * then collecting all the records in the user table
     * the next step is to create the return function to return the projects view page and data set each of the tables
     * to a variable to be called within the view this is only available to authorised users
     * if the user not authorised they are asked to login
     */
    public function index(){

        $project = Projects::all();
        $pathway = Pathways::all();
        $tutor = User::all();
        if(Auth::user()){
            return view('projects.view', ['project' =>$project, 'tutor' =>$tutor, 'pathway' =>$pathway]);
        }else{
            return redirect('/login');
        }

    }

    /**
     * Show function is used to show the individual page for one of the projects
     * the first line is used to take the id for the project the user is looking for and find the record within the
     * project table
     * all the data is then returned with the correct blade file.
     */
        public function show($id)
    {
        $project = Projects::findOrFail($id);
        $project->Projects;

        return view('projects.show')->with(compact('project'));
    }

    /**
     * The following function is used to create the edit form
     * first function calls the pathway table
     * the second is the id id the find or fail within the project table
     * the data collected from the project then creates a link  the pivot table data
     * all the data collected is  then compacted into a variable name to be used within the view and the correct view file
     * is assigned to the return function
     */

    public function edit($id)
    {

       $pathway = Pathways::all();


        $project = Projects::findOrFail($id);
        $project->Projects;
         return view('projects.Edit')->with(compact('project'))->with(['pathway' => $pathway]);
    }
    /**
     * Update is used to upload the changes to the edited project
     * the first section of the function is the validation
     * then the project is found within the table and creates a link to the pivot table
     * project is then updates by requesting the date within the form and saving it to the database
     * the pathway is then detached and new ones attached
     * final a return is created to take the user back to the project list
     */

    public function update(Request $request, $id)
    {


        $this->validate(request(),[
            'title' => 'required|max:70',
            'content' => 'required|max:1000 ',
            'num_participant' => 'required|integer',
            'pathway_id'=> 'required',
//            'image' => 'required',
        ]);
        $project = Projects::findOrFail($id);
        $project->Projects;

        $project->update($request->all());

        $project->Projects()->detach();
        $project->Projects()->attach($request->get('pathway_id'));

        return redirect('/project');

    }

    /**
     * the destroy function is used to delete a record within the table
     * first the record is found within the project table
     * then the image is unlinked by section through the pathway
     * project is then connected to the pivot table before the pivot table is detached
     * the project is then deleted and the user is redirected to the project list page
     */

    public function destroy($id)
    {
        $project = Projects::find($id);
        $file_path = public_path().'/'.$project->image;
        if(file_exists($file_path)){
            unlink($file_path);
        }



        $project->Projects()->detach();

        $project->delete();
        return redirect('/project');




    }



    }
