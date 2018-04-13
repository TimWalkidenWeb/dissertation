@extends('layouts.master')
@section('content')
<div class="banner_inside_view">
    <h1>What do you need help on ? </h1>
    <h3>Want to filter by coursework use links below</h3>
    <button class=find"> <a href="{{url('/project')}}">View Topics</a></button>
</div>
<div class="row">
    {{--<div class="filt col-hidden small-12">--}}
        {{--<div class="dropdown small-6">--}}
            {{--<button class="dropbtn show_content">Module--}}
                {{--<i class="arrow down"></i>--}}
            {{--</button>--}}
            {{--<div class="dropdown-content">--}}
                {{--<div id="myBtnContainer">--}}
                    {{--<li onclick="filterSelection('all')"> Show all</li>--}}
                    {{--@foreach($cws as $cw)--}}
                        {{--<li  onclick="filterSelection({{$cw->id}})"> {{$cw->title}}</li>--}}
                    {{--@endforeach--}}
                {{--</div>--}}

            {{--</div>--}}
        {{--</div>--}}
         {{--</div>--}}

    {{--<div class="row">--}}
        {{--<div class="col-3 filter small-hidden">--}}
            {{--<h3>Type of CW</h3>--}}
            {{--<div id="myBtnContainer">--}}
                {{--<button class="btn" onclick="filterSelection('all')"> Show all</button>--}}
                {{--@foreach($cws as $cw)--}}
                    {{--<button class="btn" onclick="filterSelection({{$cw->id}})"> {{$cw->title}}</button>--}}
                {{--@endforeach--}}
            {{--</div>--}}

        {{--</div>--}}

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