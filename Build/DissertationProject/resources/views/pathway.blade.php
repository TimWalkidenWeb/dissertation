<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>New_project</title>
</head>
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


</body>
</html>
