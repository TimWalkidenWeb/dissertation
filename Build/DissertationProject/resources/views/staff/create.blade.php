@extends('layouts.master')

@section('content')
    <h1>New staff member</h1>


    {!! Form::open(['action'=>['staffMember@store']]) !!}
    <div class="form-group">
        {!! Form::Label('name', 'Enter Full name') !!}
        {!! Form::text('name', null, array('maxlength' => 70)) !!}
    </div>

    <div class="form-group">
        {!! Form::Label('email', 'Enter staff member Edge Hill email') !!}
        {!! Form::text('email', null) !!}
    </div>

    <div class="form-group">
        {!! Form::Label('password', 'Enter password') !!}
        {!! Form::password('password', null) !!}
    </div>

    <div class="form-group">
        @foreach($permission as $permissions)

            {!! Form::label('permission', $permissions->permission) !!}
            {{Form::radio('permission', $permissions->id)}}

        @endforeach
    </div>

    <div class='form-group'>
        {!! Form::submit('submit new project', ['class' =>'button']) !!}
    </div>

    {{--<div class="form-group">--}}
    {{--{!! Form::checkbox($pathway->Pathway, $pathway->id) !!}--}}
    {{--</div>--}}
    {!! Form::close() !!}

   @include('layouts.validation')
@endsection