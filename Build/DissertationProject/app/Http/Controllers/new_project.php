<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Projects;
use App\Staff;
Use App\Pathways;
use App\Projects_pathways;
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
    public function create(Request $request){
        $new_project= Projects::create($request->all());

        $new_project->save();

        $list_of_pathway = Projects_pathways::create([
                'pathway_id' => $request->input('pathway_id'),
                'project_id' => $new_project->id,
            ]
        );


        $list_of_pathway->save();

        return redirect('/projects');
    }
//
//    /**
//     * Store a newly created resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @return \Illuminate\Http\Response
//     */
    public function store(Request $request)
    {
        //
    }
//
//    /**
//     * Display the specified resource.
//     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function show($id)
//    {
//        $project = Projects::findOrFail($id);
//
//        return view('projects.show', ['project' => Projects::findOrFail($id)]);
//    }
////
////    /**
////     * Show the form for editing the specified resource.
////     *
////     * @param  int  $id
////     * @return \Illuminate\Http\Response
////     */
//    public function edit($id)
//    {
//        $project = Projects::findOrFail($id);
//            return view('projects.edit.blade.blade.php', compact('project'));
//    }
////
////    /**
////     * Update the specified resource in storage.
////     *
////     * @param  \Illuminate\Http\Request  $request
////     * @param  int  $id
////     * @return \Illuminate\Http\Response
////     */
////    public function update(Request $request, $id)
////    {
////        $project = Projects::findOrFail($id);
////        $project->update($request->all());
////
////        return redirect('project');
////    }
////
////    /**
////     * Remove the specified resource from storage.
////     *
////     * @param  int  $id
////     * @return \Illuminate\Http\Response
////     */
//
}
