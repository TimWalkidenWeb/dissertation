<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Permission;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

/**
 * Controller used for the staff section which includes index, view, store
 */
class staffMember extends Controller
{
    /**
     * public function index is used to to view the create staff form
     * the first if statments used to make sure guest are sent to the home page and not the form
     * the user with permission 1 are able to see the form
     * by first requestion the permission table and then sending the data and the correct view to the user
     * the final else is to make sure any other users are sent to the home page
     */
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

    /**
     * the view function is used to load the register form
     */

    public function view(){
        return view('student.create_student');
    }

    /**
     * The store function is used to store the new registered member
     * the function starts by carrying out validation on the data
     * the if statements used to work out the permission,
     * if the permission is null it means a student is registering and the data is saved to the database
     * with the default permission as 2.
     * else if the permission is 1,2,3 then all the data is requested icluding the permissions and then saved to the datbase
     * leading on to the user being sent to the home page
     */

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
