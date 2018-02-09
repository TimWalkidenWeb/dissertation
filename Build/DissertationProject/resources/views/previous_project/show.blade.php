@extends('layouts.master')
@section('content')
    <div class="row">
        <h3 class="col-12 small-12 show page_title">{{$project->Title}}</h3>

    </div>


    <div class="row">
        <div class="col-10 small-10" style="margin-left: 10%">
            <h4 class="show_content">Summary of project</h4>
            <p class="show_content">{{$project->description}}</p>

            <h4 class="show_content">Relevant pathways:</h4>
            <ul>
                @foreach($project->Pathway as $pathways)
                    <li class="show_content">{{$pathways->pathway}}</li>
                @endforeach
            </ul>
    </div>
    </div>

    <div class="row">

        <div class="col-10 small-hidden" style="margin-left: 3%">
            <img  src="{{ asset($project->image)}}" alt="Avatar" class="image_show small-hidden image_shadow border-radius">
        </div>


    </div>




    <?php
    if (!extension_loaded('imagick'))
        echo 'image not load';
    ?>


    {{--<embed src= "{{ asset($project->content) }}" width= "500" height= "375">--}}

    <a href="{{ asset('/storage/text_2.pdf') }}">Open the pdf!</a>
    <a href="{{ asset('/storage/text_2.pdf') }}">Open the pdf!</a>
    <embed src="{{ asset('/storage/text_2.pdf') }}" width="500" height="375" type='application/pdf'>

    <button onclick="goBack()">Return to projects</button>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>

@endsection