<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>New previous project</title>
</head>
<body>
<h1>New previous Project</h1>

{!! Form::open(['action'=>['Previous_project@create']]) !!}
<div class="form-group">
    {!! Form::Label('title', 'Title of project') !!}
    {!! Form::text('title', null) !!}
</div>
<div class="form-group">
    {!! Form::hidden('staff_id',Auth()->user()->id, ['class'=> 'large-8 column']) !!}
</div>
<div class="form-group">
    {!! Form::Label('content', 'Description of the project') !!}
    {!! Form::file('content', null) !!}
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
</body>
</html>