@extends('layouts.master')
@section('content')
    <div class="row">
        <h3 class="col-12 small-12 show page_title">{{$project->Title}}</h3>

    </div>

    <div class="row form_mobile form_desktop" >
        <div class="row">
            <div class="col-6 small-12">
                <h4 class="show_content">Summary of project</h4>
                <p class="show_content">{{$project->description}}</p>
            </div>
            <div class="col-6 small-hidden">
                <img  src="{{ asset($project->image)}}" alt="Avatar" class="small-hidden image_shadow border-radius" style="width: 100%"></div>
        </div>
        <div class="row col-12 small-12">
            <h4 class="show_content">Relevant pathways:</h4>
            <ul>
                @foreach($project->Pathway as $pathways)
                <li class="show_content">{{$pathways->pathway}}</li>
                @endforeach
            </ul>
        </div>
        <div class="row col-12 small-12">
            <h4 class="show_content"><a href="{{asset($project->content)}}" style = "color: black" target="_blank">View previous project</a></h4>
        </div>

    </div>
@endsection