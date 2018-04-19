{{--file is used to create the new learning section form--}}
{{--extend lauouts.master used to link the blade file to the layout file to place the content within the article--}}
@extends('layouts.master')
{{--extends content is a variable used to indicate the yeild within the layout to place the content--}}
@section('content')
    {{--banner for the top of the website--}}
    <div class="banner_inside_create">
        <h1>New staff member</h1>
    </div>
    {{--calls in the validation file--}}
    @include('layouts.validation')
    {{--Div used to create both the mobile and desktop form dispaly--}}
    <div class="row form_mobile form_desktop" >
        {{--Form open and connect to the controller through the mehthod of post--}}

        {!! Form::open(['action'=>['staffMember@store']]) !!}
        {{--Name lable and input--}}
        <div class="row form_text">Enter Full name</div>
        <input type="text" name="name" class="small-input">

        {{--Email lable and input--}}
        <div class="row form_text">Enter staff member Edge Hill email</div>
        <input type="text" name="email" class="small-input">

        {{--Password lable and input--}}
        <div class="row form_text">Enter password</div>
        <input type="password" name="password" class="small-input">
        <div>
            {{--title for the list of permission--}}
            <div class="form_text">Add permissions</div>
            <ul>
                {{--foreach used to gather the table of permission and separate them into individual permission--}}
                @foreach($permission as $permissions)
                    {{--lable for the permission and the tick box for the permission--}}
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
            {{--submit button for the form--}}
            <button type="submit" class="submit_btn">Submit new staff member</button>
        </div>
        {{--end of the form--}}
        {!! Form::close() !!}
    </div>

@endsection