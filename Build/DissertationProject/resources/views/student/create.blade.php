@extends('layouts.master')

@section('content')

    <div class="row">
        <h3 class="col-12 small-12 show page_title">New student</h3>
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

        {{--<div class="form-group">--}}
        {{--@foreach($permission as $permissions)--}}

        {{--{!! Form::label('permission', $permissions->permission) !!}--}}
        {{--{{Form::radio('permission', $permissions->id)}}--}}

        {{--@endforeach--}}
        {{--</div>--}}
        <div>


        <div>
            <div class="form_text">Add a display image</div>
            {!! Form::file('image', array('class' => 'form-control')) !!}
        </div>


        <div>
            {!!  Form::token()!!}
        </div>
        <div class="form-group">

            <button type="submit" class="submit_btn">Submit project</button>
        </div>
        {!! Form::close() !!}
    </div>


   @include('layouts.validation')
@endsection