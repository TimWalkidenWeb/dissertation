@extends('layouts.master')

@section('content')
    <div class="banner_inside_create">
        <h1>Login</h1>
    </div>

     <form class="form-horizontal" method="POST" action="{{ route('login') }}">
         <div class="row form_mobile form_desktop" >
                        {{ csrf_field() }}
             <div class="row form_text">Enter Edge Hill email</div>
             <input type="text" name="email" class="small-input">

             <div class="row form_text">Enter password </div>
             <input type="password" name="password" class="small-input">

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="submit_btn">
                                    Login
                                </button>
                            </div>
                        </div>
         </div>
                    </form>

@endsection
