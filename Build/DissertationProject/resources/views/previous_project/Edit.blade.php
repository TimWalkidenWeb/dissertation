<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>New_project</title>
</head>
<body>
<h1>Edit - {{$project->Title}}</h1>

<h2>{{$project}}</h2>

{!! Form::model($project, ['method' => 'PATCH', 'url' => ['previous_projects',$project->id], $project->id]) !!}
<div class="form-group">
    {!! Form::Label('Title', 'Title of project') !!}
    {!! Form::text('title', $project->Title) !!}
</div>


<div class="form-group">
    {!! Form::Label('content', 'Description of the project') !!}
    {!! Form::file('content', null) !!}
</div>

<div class="form-group">
    {!! Form::Label('date', 'Date of publish') !!}
    {!! Form::date('date', $project->Date) !!}
</div>

<div class='form-group'>
    {!! Form::submit('submit changes', ['class' =>'button']) !!}
</div>




</body>
</html>