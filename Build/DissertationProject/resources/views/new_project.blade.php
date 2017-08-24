@extends('layouts.master')
@section('content')
    <h1>New Project</h1>

{!! Form::open(['action'=>['new_project@create']]) !!}
    <div class="form-group">
        {!! Form::Label('title', 'Title of project') !!}
        {!! Form::text('title', null) !!}
    </div>
    <div class="form-group">
        {!! Form::hidden('user_id',Auth()->User()->id, ['class'=> 'large-8 column']) !!}
    </div>
    <div class="form-group">
        {!!  Form::token()!!}
    </div>

    <div class="form-group">
        {!! Form::Label('content', 'Description of the project') !!}
        {!! Form::text('content', null) !!}
    </div>

    <div class="form-group">
        {!! Form::Label('num_participant', 'Number of participants') !!}
        {!! Form::text('num_participant', null) !!}
    </div>
    <div class="form-group">
    @foreach($pathway as $pathways)

            {!! Form::label('pathway_id', $pathways->pathway) !!}
            {{Form::checkbox('pathway_id[]', $pathways->id)}}

    @endforeach
    </div>
    <div class='form-group'>
        {!! Form::submit('submit new project', ['class' =>'button']) !!}
    </div>

    {{--<div class="form-group">--}}
        {{--{!! Form::checkbox($pathway->Pathway, $pathway->id) !!}--}}
    {{--</div>--}}
{!! Form::close() !!}

@endsection


