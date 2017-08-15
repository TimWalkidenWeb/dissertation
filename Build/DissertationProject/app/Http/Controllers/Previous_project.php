<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Pathways;
use App\Previous_projects;
Use App\Previous_projects_pathways;
class Previous_project extends Controller
{
    public function index(){
        $project = Previous_projects::all();
        $user = User::all();

        return view('previous_project.view', ['project' =>$project], ['user' =>$user]);
    }



    }
