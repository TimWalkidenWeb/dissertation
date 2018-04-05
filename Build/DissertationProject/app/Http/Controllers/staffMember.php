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
        elseif(Auth::user()->permission(1 or 3)) {
            $permission = Permission::all();
            return view('staff.create', ['permission' => $permission]);
        }else{
            return view('home');
        }
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
                'permission' => 2,

            ]);
        }elseif($request['permission'] == '1' or '3'){
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
