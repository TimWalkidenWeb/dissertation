@extends('layouts.master')
@section('title', 'Current Project')
@section('content')
<body>
<div class="row">
    <h3 class="col-12 small-12 show page_title">{{$project->Title}}</h3>

</div>


<div class="row form_mobile form_desktop" >
    <div class="row">
        <div class="col-6 small-12">
            <h4 class="show_content">Summary of project</h4>
            <p class="show_content">{{$project->content}}</p>
        </div>
        <div class="col-6 small-hidden">
            <img  src="{{ asset($project->image)}}" alt="display image for {{ asset($project->Title)}}" class="small-hidden image_shadow border-radius" style="width: 100%"></div>
    </div>
    <div class="row col-12 small-12">
        <h4 class="show_content">Number of place on the project available: {{$project->num_participant}}</h4>

        <h4 class="show_content">Relevant pathways:</h4>
        <ul>
            @foreach($project->projects as $pathways)
                <li class="show_content">{{$pathways->pathway}}</li>
            @endforeach
        </ul>
    </div>

</div>






@endsection