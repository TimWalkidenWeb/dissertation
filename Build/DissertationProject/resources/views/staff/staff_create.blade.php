@extends('layouts.master')

@section('content')

    <div class="row">
        <h3 class="col-12 small-12 show page_title">New staff member</h3>
    </div>


    <div class="row form_mobile form_desktop" >
        {!! Form::open(['action'=>['staffMember@store']]) !!}
        <div class="row form_text">

            Enter Full name </div>
        <input type="text" name="name" class="small-input">


        <div class="row form_text">Enter staff member Edge Hill email</div>
        <input type="text" name="email" class="small-input">

        <div class="row form_text">Enter password </div>
        <input type="password" name="password" class="small-input">
        <div>
            <div class="form_text">Add permissions</div>
            <ul>

                @foreach($permission as $permissions)


                        {!! Form::label('permission', $permissions->permission) !!}
                        {{Form::checkbox('permission', $permissions->id)}}

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