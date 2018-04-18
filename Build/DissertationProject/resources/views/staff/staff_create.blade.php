@extends('layouts.master')

@section('content')

    <div class="banner_inside_create">
        <h1>New staff member</h1>
    </div>

    <div class="row form_mobile form_desktop">
        {!! Form::open(['action'=>['staffMember@store']]) !!}
        <div class="row form_text">Enter Full name</div>
        <input type="text" name="name" class="small-input">


        <div class="row form_text">Enter staff member Edge Hill email</div>
        <input type="text" name="email" class="small-input">

        <div class="row form_text">Enter password</div>
        <input type="password" name="password" class="small-input">
        <div>
            <div class="form_text">Add permissions</div>
            <ul>

                @foreach($permission as $permissions)


                    <li>
                        {!! Form::label('permission', $permissions->permission) !!}
                        {{Form::checkbox('permission', $permissions->id)}}
                    </li>

                @endforeach

            </ul>

        </div>


        <div>
            {!!  Form::token()!!}
        </div>
        <div class="form-group">

            <button type="submit" class="submit_btn">Submit new staff member</button>
        </div>
        {!! Form::close() !!}
    </div>


    @include('layouts.validation')
@endsection