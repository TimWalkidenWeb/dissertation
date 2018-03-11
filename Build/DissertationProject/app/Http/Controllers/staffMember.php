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

    public function view(){
        return view('student.create');
    }

    public function store(Request $request){

            $this->validate(request(),[
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required|min:5',
//                'permission'=> 'required'
            ]);

        if($request['permission'] == null) {
            $new_staff = User::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => bcrypt($request['password']),
                'permission' => 3,

            ]);
        }elseif($request['permission'] == '1' or '2'){
            $new_staff = User::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => bcrypt($request['password']),
                'permission' => $request['permission']
            ]);
        }
            $new_staff->save();
            return redirect('/home');
        }



}
