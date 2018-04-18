@extends('layouts.master')
@section('content')
    {{--banner for the show with the tile being pulled in from the database--}}
    <div class="banner_inside_show">
        <h1>{{$project->Title}} </h1>
        {{--button used to view the previou project pdf--}}
        <button class=find"><a href="{{asset($project->content)}}">View Full project</a></button>
    </div>
    {{--coloumn one to show the content of the previous project--}}
    <div class="content_show">
        <h3>Summary of project</h3>
        <p class="show_content">{{$project->description}}</p>
        <h2 style="width: 100%">Relevant pathways:</h2>
        <div class="float">
            <ul>
                {{--foreach used to assign each pathway to a li element by pulling the data from the pivot table--}}
                @foreach($project->Projects as $pathways)
                    <li class="show_content">{{$pathways->pathway}}</li>
                @endforeach
            </ul>
        </div>
    </div>
    {{--second coloumn to include the image--}}
    <div class="image_show_container">
        {{--pulls in the image form the storage --}}
        <img src="{{ asset($project->image)}}" alt="display image for {{ asset($project->Title)}}" class="image_show">
    </div>
@endsection