<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>New_project</title>
</head>
<body>
<h1>Edit - {{$project->title}}</h1>

<h2>{{$project}}</h2>

{!! Form::model($project, ['method' => 'PATCH', 'url' => ['projects',$project->id], $project->id]) !!}
<div class="form-group">
    {!! Form::Label('Title', 'Title of project') !!}
    {!! Form::text('Title', $project->id) !!}
</div>


<div class="form-group">
    {!! Form::Label('content', 'Description of the project') !!}
    {!! Form::textarea('content', null) !!}
</div>

<div class="form-group">
    {!! Form::Label('num_participant', 'Number of participants') !!}
    {!! Form::text('num_participant', null) !!}
</div>
<div class="form-group">
    @foreach($project->projects as $projects)

        {!! Form::label('pathway_id', $projects->pathway) !!}
        {!! Form::checkbox('pathway_id', $projects->id, true) !!}
    @endforeach

    <h1>break</h1>
    @foreach($test as $pathways)
        {!! Form::label('pathway_id', $pathways->pathway) !!}
        {!! Form::checkbox('pathway_id', $pathways->id) !!}
    @endforeach
    <div class='form-group'>
        {!! Form::submit('submit updated content', ['class' =>'button']) !!}
    </div>
<div class='form-group'>
    {!! Form::submit('submit updated content', ['class' =>'button']) !!}
</div>

{!! Form::close() !!}

</div>
</body>
</html>