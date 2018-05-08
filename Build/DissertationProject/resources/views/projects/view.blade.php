{{--extend lauouts.master used to link the blade file to the layout file to place the content within the article--}}
@extends('layouts.master')
{{--extends content is a variable used to indicate the yeild within the layout to place the content--}}
@section('content')
    {{--view banner styling--}}
    <div class="banner_inside_view">
        <h1>Available topics being offered </h1>
        <h3 class="small-hidden">Want to filter by lecturer use links below</h3>
        {{--drop down filiter for mobile devices--}}
        <div class="dropdown small-12 col-hidden">
            {{--drop down button--}}
            <button class="dropbtn ">Filter by lecturer &#9660;</button>
            <i class="arrow down"></i>
            {{--dropdown content hidden until button clicked on--}}
            <div class="dropdown-content module_filt">
                {{--dropdown content within the container--}}
                <div id="myBtnContainer">
                    {{--first li used to add a show all button--}}
                    <li class="fil_list" style="margin-top: 3%" onclick="filterTutor('all')"> Show all</li>
                    {{--for each to pull in each of the pathway and give it a li--}}
                    @foreach($tutors as $tutor)
                        @if($tutor->permission == '1' || $tutor->permission == '3')
                        <a class="fil_list"
                            onclick="filterTutor({{$tutor->id}})"> {{$tutor->name}}</a>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>

        <div class="row">
            {{--desktop filiter display--}}
            <div class="col-12 filter small-hidden">
                <div id="myBtnContainer">
                    {{--display all button--}}
                    <div class="extra_link_style col-3"
                         onclick="filterTutor('all')"> Show all
                    </div>
                    {{--foreach to pull in each of the pathway and assign them the same width and styling--}}
                    @foreach($tutors as $tutor)
                        @if($tutor->permission == '1' || $tutor->permission == '3')
                        <a class="extra_link_style col-3" style="width:20%; font-size: 22px"
                             onclick="filterTutor({{$tutor->id}})"> {{$tutor->name}}</a>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    {{--div row to create the view of each of the images and the content--}}
    <div class="col-12 small-12">
        <div class="row">
            @foreach($project as $projects)
                {{--foreach to pull in each of the project one at a time--}}
                <div class="col-4 small-12 ">
                    {{--start of the containner by adding in a image which is displayed when the uses is not hovering over the page--}}
                    <div class="container {{$projects->user_id}} border-radius " >
                        {{--image of the learning section collected from storage--}}
                        <img src="{{ asset($projects->image)}}" alt="display image for {{ asset($projects->Title)}} "
                             class="image_view">
                        {{--overlay is used to set which part of the content is hidden--}}
                        <div class="overlay border-radius">
                            {{--text is the div which is the syling for the layout of the content--}}
                            <div class="text">
                                <div class="row">
                                    {{--styling for the title of the project--}}
                                    <div class="col-12 small-12 image_heading">{{$projects->Title}}</div>
                                </div>
                                <div class="row">
                                    {{--if statment to make sure student can only view the  project--}}
                                @if(Auth::guest() or Auth()->user()->permission == '2')
                                        <a href="project/{{$projects->id}}"
                                           class="col-12 small-12 image_heading">View</a>

                                        {{--else if used to display edit and view on all projects for programme leaders --}}
                                    @elseif ( Auth()->user()->permission == '1')
                                        <a href="projects/{{$projects->id}}/edit" class="col-6 small-6 image_heading">Edit</a>
                                        <a href="project/{{$projects->id}}" class="col-6 small-6 image_heading">View</a>
                                        {{--else if used to display edit and view for only the lecturers projects --}}

                                    @elseif( Auth()->user()->id == $projects->user_id)
                                        <a href="projects/{{$projects->id}}/edit"
                                           class="link col-6 small-6 image_heading">Edit</a>
                                        <a href="project/{{$projects->id}}" class="col-6 small-6 image_heading">View</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>


    </div>






@endsection
