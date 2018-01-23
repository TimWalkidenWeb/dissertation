@extends('layouts.master')
@section('content')
    <div class="row">
        <h3 class="col-12 small-12 show page_title">{{$project->Title}}</h3>

    </div>


    <div class="row">
        <div class="col-6 small-10" style="margin-left: 10%">
            <h4 class="show_content">Summary of project</h4>
            <p class="show_content">{{$project->content}}</p>

            <h4 class="show_content">Relevant pathways:</h4>
            <ul>
                @foreach($project->Pathway as $pathways)
                    <li class="show_content">{{$pathways->pathway}}</li>
                @endforeach
            </ul>

        </div>
        <div class="col-4 small-hidden" style="margin-left: 3%">
            <img  src="{{ asset($project->image)}}" alt="Avatar" class="image_show small-hidden image_shadow border-radius"></div>
        <a href="{{ asset($project->image) }}">Open the pdf!</a>
    </div>

    <embed src= "{{ asset($project->image) }}" width= "500" height= "375">



    <button onclick="goBack()">Return to projects</button>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>

@endsection