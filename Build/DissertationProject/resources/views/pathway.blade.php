@extends('layouts.master')
@section('content')
<body>
<h1>New Project</h1>

{!! Form::open(['action'=>['Project@create']]) !!}
@foreach($pathway as $pathways)
    <div class="form-group">
        {!! Form::label('pathway_id', $pathways->pathway) !!}
        {{Form::checkbox('pathway_id', $pathways->id)}}
    </div>
@endforeach

<div class='form-group'>
    {!! Form::submit('submit new project', ['class' =>'button']) !!}
</div>

{!! Form::close() !!}


@endsection
