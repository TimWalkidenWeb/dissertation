@extends('layouts.master')
@section('content')
<div class="banner_inside_view">
    <h1>What do you need help on ? </h1>
    <h3>Want to filter by coursework use links below</h3>
    <div class="dropdown small-12 col-hidden">
        <button class="dropbtn ">Filter by pathway	&#9660;</button>
        <i class="arrow down"></i>
        <div class="dropdown-content module_filt">
            <div id="myBtnContainer">
                <li class="fil_list" style="margin-top: 3%" onclick="filterSelection_pathway('all')"> Show all</li>
                @foreach($cws as $cw)
                    <li class="fil_list" onclick="filterSelection_pathway({{$cw->id}})"> {{$cw->title}}</li>
                @endforeach
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 filter small-hidden">
            <div id="myBtnContainer">
                <div class="extra_link_style " style="width: 100%; font-size: 22px" onclick="filterSelection('all')"> Show all</div>
                @foreach($cws as $cw)
                    <div class="extra_link_style col-3" onclick="filterSelection({{$cw->id}})"> {{$cw->title}}</div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="row">


        <div class="col-8 small-12">
            <div class="row">
                @foreach($learning_sections as $learning_section)
                    {{--@foreach($tutors->Previousowner as $projects)--}}
                             <div class="col-4 small-10 ">
                                <div class="container border-radius">
                                    <img src="{{ asset($learning_section->image)}}" alt="{{$learning_section->title}}" class="image_view">
                                    <div class="overlay border-radius">
                                        <div class="text">
                                            <div class="link">{{$learning_section->title}}</div>
                                            @if(Auth::guest())
                                                <a href="learning_section/{{$learning_section->id}}" class="col-12 small-12 link">View</a>
                                            @elseif ( Auth()->user()->permission == '1' or '3')
                                                <a href="/learning_section/{{$learning_section->id}}/edit" class="col-6 small-6 link">Edit</a>
                                                <a href="/learning_section/{{$learning_section->id}}" class="col-6 small-6 link">View</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        {{--@endforeach--}}
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection