<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Staff;
use App\Permission;
class Staff_member extends Controller
{
    public function index(){
        $permission = Permission::all();
        return view('new_staff', ['permission' => $permission]);
    }

    public function create(Request $request){

        $new_staff= Staff::create($request->all());

        $new_staff->save();


        return redirect('/welcome');
    }


}
