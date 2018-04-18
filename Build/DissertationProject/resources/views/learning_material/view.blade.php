{{--extend lauouts.master used to link the blade file to the layout file to place the content within the article--}}
@extends('layouts.master')
{{--extends content is a variable used to indicate the yeild within the layout to place the content--}}
@section('content')
    {{--view banner styling--}}
    <div class="banner_inside_view">
        <h1>What do you need help on ? </h1>
        <h3>Want to filter by coursework use links below</h3>
        {{--drop down filiter for mobile devices--}}
        <div class="dropdown small-12 col-hidden">
            {{--drop down button--}}
            <button class="dropbtn ">Filter by pathway	&#9660;</button>
            <i class="arrow down"></i>
            {{--dropdown content hidden until button clicked on--}}
            <div class="dropdown-content module_filt">
                {{--dropdown content within the container--}}
                <div id="myBtnContainer">
                    {{--first li used to add a show all button--}}
                    <li class="fil_list" style="margin-top: 3%" onclick="filterSelection_pathway('all')"> Show all</li>
                    {{--for each to pull in each of the coursework and give it a li--}}
                    @foreach($cws as $cw)
                        <li class="fil_list" onclick="filterSelection_pathway({{$cw->id}})"> {{$cw->title}}</li>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row">
            {{--desktop filiter display--}}
            <div class="col-12 filter small-hidden">
                <div id="myBtnContainer">
                    {{--display all button--}}
                    <div class="extra_link_style " style="width: 100%; font-size: 22px" onclick="filterSelection('all')"> Show all</div>
                    {{--foreach to pull in each of the courswork and assign them the same width and styling--}}
                    @foreach($cws as $cw)
                        <div class="extra_link_style col-3" onclick="filterSelection({{$cw->id}})"> {{$cw->title}}</div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    {{--div row to create the view of each of the images and the content--}}
    <div class="row">
        <div class="col-8 small-12">
            <div class="row">
                {{--foreach to pull in each of the learning section one at a time--}}
                @foreach($learning_sections as $learning_section)
                             <div class="col-4 small-10 ">
                                 {{--start of the containner by adding in a image which is displayed when the uses is not hovering over the page--}}
                                <div class="container border-radius">
                                    {{--image of the learning section collected from storage--}}
                                    <img src="{{ asset($learning_section->image)}}" alt="{{$learning_section->title}}" class="image_view">
                                    {{--overlay is used to set which part of the content is hidden--}}
                                    <div class="overlay border-radius">
                                        {{--text is the div which is the syling for the layout of the content--}}
                                        <div class="text">
                                            {{--styling for the title of the learning section--}}
                                            <div class="link">{{$learning_section->title}}</div>
                                            {{--if statment to make sure student can only view the learning section--}}
                                            @if(Auth::guest() or Auth()->user()->permission == '2')
                                                <a href="learning_section/{{$learning_section->id}}" class="col-12 small-12 link">View</a>
                                            {{--else if used to display edit and view for lecturers and programme leaders--}}
                                            @elseif ( Auth()->user()->permission == '1' or '3')
                                                <a href="/learning_section/{{$learning_section->id}}/edit" class="col-6 small-6 link">Edit</a>
                                                <a href="/learning_section/{{$learning_section->id}}" class="col-6 small-6 link">View</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection