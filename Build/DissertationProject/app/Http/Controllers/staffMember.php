<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Permission;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rule;

class staffMember extends Controller
{
    public function index(){
        $permission = Permission::all();
        return view('staff.create', ['permission' => $permission]);
    }

    public function store(Request $request){

            $this->validate(request(),[
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required|min:5',
                'permission'=> 'required'
            ]);

            $new_staff=  User::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => bcrypt($request['password']),
                'permission'=>$request['permission']
            ]);

            $new_staff->save();
            return redirect('/home');
        }



}
