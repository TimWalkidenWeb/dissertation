<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Permission;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class staffMember extends Controller
{
    public function index(){



        if(Auth::guest()){
            return view('home');
        }
        elseif(Auth::user()->permission(1)) {
            $permission = Permission::all();
            return view('staff.staff_create', ['permission' => $permission]);
        }else{
            return view('home');
        }
    }

    public function view(){
        return view('student.create_student');
    }

    public function store(Request $request){

            $this->validate(request(),[
                'name' => 'required',
                'email' => 'required|string|email|regex:/(.*)@edgehill\.ac\.uk/|max:255|unique:users',
                'password' => 'required|min:5',
            ]);

        if($request['permission'] == null) {
            $new_student = User::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => bcrypt($request['password']),
                'permission' => 2,

            ]);
            $new_student->save();
        }elseif($request['permission'] == '1' or '3' or '2'){
            $new_staff = User::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => bcrypt($request['password']),
                'permission' => $request['permission']
            ]);
            $new_staff->save();
        }

            return redirect('/home');
        }



}
