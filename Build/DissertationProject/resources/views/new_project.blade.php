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

{!! Form::open(['action'=>['new_project@create']]) !!}
    <div class="form-group">
        {!! Form::Label('title', 'Title of project') !!}
        {!! Form::text('title', null) !!}
    </div>
    <div class="form-group">
        {!! Form::hidden('staff_id',Auth()->User()->id, ['class'=> 'large-8 column']) !!}
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
            {{Form::radio('pathway_id', $pathways->id)}}

    @endforeach
    </div>
    <div class='form-group'>
        {!! Form::submit('submit new project', ['class' =>'button']) !!}
    </div>

    {{--<div class="form-group">--}}
        {{--{!! Form::checkbox($pathway->Pathway, $pathway->id) !!}--}}
    {{--</div>--}}
{!! Form::close() !!}


</body>
</html>


