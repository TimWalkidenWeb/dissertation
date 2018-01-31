@extends('layouts.master')
@section('title', 'Current Project')
@section('content')
<body>
<div class="row">
    <h3 class="col-12 small-12 show page_title">{{$project->Title}}</h3>

</div>


<div class="row">
    <div class="col-6 small-10" style="margin-left: 10%">
        <h4 class="show_content">Summary of project</h4>
        <p class="show_content">{{$project->content}}</p>


        <h4 class="show_content">Number of place on the project available: {{$project->num_participant}}</h4>

        <h4 class="show_content">Relevant pathways:</h4>
        <ul>
            @foreach($project->projects as $pathways)
                <li class="show_content">{{$pathways->pathway}}</li>
            @endforeach
        </ul>

    </div>
    <div class="col-4 small-hidden" style="margin-left: 3%">
        <img  src="{{ asset($project->image_name)}}" alt="Avatar" class="image_show small-hidden image_shadow border-radius"></div>
</div>



{!! Form::open(array('route' => 'project.response','files'=>true, 'enctype' => "multipart/form-data")) !!}

<div class="form-group">
    {!! Form::hidden('lecture',$project->user_id, ['class'=> 'large-8 column']) !!}
    {!! Form::hidden('project',$project->Title, ['class'=> 'large-8 column']) !!}
    <button type="submit" class="submit_btn">Submit project</button>
</div>
{!! Form::close() !!}




<button onclick="goBack()">Return to projects</button>
<script>
function goBack() {
window.history.back();
}
</script>

@endsection