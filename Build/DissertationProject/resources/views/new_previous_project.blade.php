@extends('layouts.master')
@section('content')
<h1>New previous Project</h1>

{!! Form::open(['action'=>['Previouscreate@create']]) !!}
<div class="form-group">
    {!! Form::Label('title', 'Title of project') !!}
    {!! Form::text('title', null) !!}
</div>
{{--<div class="form-group">--}}
    {{--{!! Form::hidden('user_id',Auth()->user()->id, ['class'=> 'large-8 column']) !!}--}}
{{--</div>--}}
<div class="form-group">
    {!! Form::Label('content', 'Description of the project') !!}
    {!! Form::file('content', null) !!}
</div>

<div class="form-group">
    {!! Form::Label('description', 'Description of project') !!}
    {!! Form::text('description', null) !!}
</div>

<div class="form-group">
    {!! Form::Label('date', 'Date of publish') !!}
    {!! Form::date('date', null) !!}
</div>
<div class="form-group">
    @foreach($pathway as $pathways)

        {!! Form::label('pathway_id', $pathways->pathway) !!}
        {{Form::radio('pathway_id', $pathways->id)}}

    @endforeach
</div>
<div class='form-group'>
    {!! Form::submit('submit previous project', ['class' =>'button']) !!}
</div>
{!! Form::close() !!}

    @include('layouts.validation')
@endsection