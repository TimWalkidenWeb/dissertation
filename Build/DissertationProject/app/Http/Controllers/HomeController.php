<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


/**
 * Controller used to produce the view for the home page
 */
class HomeController extends Controller

{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Public function used to link the route of the home page to the view
     */
    public function index()
    {
//        return view used to send back the correct blade file to be shown
        return view('home');
    }
}
