<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>New Staff</title>
</head>
<body>
<h1>New Staff</h1>

{!! Form::open(['action'=> ['Staff_member@create']])  !!}
    <div class="form-group">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', null) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Email', 'Email') !!}
        {!! Form::text('email') !!}
    </div>

    <div class="form-group">
        {!! Form::label('password', 'Password') !!}
        {!! Form::password('password') !!}
    </div>

<div class="form-group">
        {!! Form::label('Permission', 'Permission') !!}
        {!! Form::select('permission', ['1'=> 'Lecturer', '2'=> 'Programme Leader'], null, ['placeholder' => 'Select their authority'] ) !!}
    </div>
    <div class='form-group'>
        {!! Form::submit('submit new staff member', ['class' =>'button']) !!}
    </div>
{!! Form::close() !!}

</body>
</html>