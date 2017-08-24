@extends('layouts.master')
@section('content')

<h1>Edit - {{$project->Title}}</h1>

<h2>{{$project->projects}}</h2>

{!! Form::model($project, ['method' => 'PATCH', 'url' => ['projects',$project->id], $project->id]) !!}
<div class="form-group">
    {!! Form::Label('Title', 'Title of project') !!}
    {!! Form::text('Title', $project->Title) !!}
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

<h1>Add a new pathway</h1>
    @foreach($pathway as $projects)

        {!! Form::label('pathway_id', $projects->pathway) !!}
        {!! Form::checkbox('pathway_id[]', $projects->id )!!}
    @endforeach


    <div class='form-group'>
        {!! Form::submit('submit updated content', ['class' =>'button']) !!}
    </div>


{!! Form::close() !!}

</div>
@endsection