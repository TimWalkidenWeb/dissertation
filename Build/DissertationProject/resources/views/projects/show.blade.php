@extends('layouts.master')
@section('title', 'Current Project')
@section('content')



<div class="banner_inside_show">
    <h1>{{$project->Title}} </h1>
</div>

<div class="content_show">
    <h3>Summary of project</h3>
    <p class="show_content">{{$project->content}}</p>
    <h2>Number of place on the project available: {{$project->num_participant}}</h2>

    <h2 style="width: 100%">Relevant pathways:</h2>
    <div class="float">
        <ul>
            @foreach($project->projects as $pathways)
                <li class="show_content">{{$pathways->pathway}}</li>
            @endforeach
        </ul>
    </div>

</div>
<div class="image_show_container">
    <img  src="{{ asset($project->image)}}" alt="display image for {{ asset($project->Title)}}" class="image_show">

</div>


{{--<div class="row form_mobile form_desktop" >--}}
    {{--<div class="row">--}}
        {{--<div class="col-6 small-12">--}}
            {{--<h4 class="show_content">Summary of project</h4>--}}
            {{--<p class="show_content">{{$project->content}}</p>--}}
        {{--</div>--}}
        {{--<div class="col-6 small-hidden">--}}
            {{--<img  src="{{ asset($project->image)}}" alt="display image for {{ asset($project->Title)}}" class="small-hidden image_shadow border-radius" style="width: 100%"></div>--}}
    {{--</div>--}}
    {{--<div class="row col-12 small-12">--}}
        {{--<h4 class="show_content">Number of place on the project available: {{$project->num_participant}}</h4>--}}

        {{--<h4 class="show_content">Relevant pathways:</h4>--}}
        {{--<ul>--}}
            {{--@foreach($project->projects as $pathways)--}}
                {{--<li class="show_content">{{$pathways->pathway}}</li>--}}
            {{--@endforeach--}}
        {{--</ul>--}}
    {{--</div>--}}

{{--</div>--}}






@endsection