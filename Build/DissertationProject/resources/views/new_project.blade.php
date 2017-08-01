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
    <div class="form-group">
        {!! Form::Label('title', 'Title of project') !!}
        {!! Form::text('title', null) !!}
    </div>

    <div class="form-group">
        {!! Form::Label('content', 'Description of the project') !!}
        {!! Form::text('content', null) !!}
    </div>

    <div class="form-group">
        {!! Form::Label('num participants', 'Number of participants') !!}
        {!! Form::text('num participants', null) !!}
    </div>

    <div class='form-group'>
        {!! Form::submit('submit new project', ['class' =>'button']) !!}
    </div>
{!! Form::close() !!}
</body>
</html>


