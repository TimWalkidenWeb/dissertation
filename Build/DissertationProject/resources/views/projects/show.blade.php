{{--extend lauouts.master used to link the blade file to the layout file to place the content within the article--}}
@extends('layouts.master')
{{--extends content is a variable used to indicate the yeild within the layout to place the content--}}
@section('content')
    {{--banner for the show with the tile being pulled in from the database--}}
    <div class="banner_inside_show">
        <h1>{{$project->Title}} </h1>
    </div>
    {{--coloumn one to show the content of the project--}}
    <div class="content_show">
        <h3>Summary of project</h3>
        <p class="show_content">{{$project->content}}</p>
        <h2>Number of place on the project available: {{$project->num_participant}}</h2>

        <h2 style="width: 100%">Relevant pathways:</h2>
        <div class="float">
            <ul>
                {{--foreach used to assign each pathway to a li element by pulling the data from the pivot table--}}
            @foreach($project->projects as $pathways)
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