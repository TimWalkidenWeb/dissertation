@extends('layouts.master')
@section('content')
<div class="row">
    <h3 class="col-12 small-12 show page_title">Project examples</h3>

</div>
<div class="row">
    <div class="filt col-hidden small-12">
        <div class="dropdown small-6">
            <button class="dropbtn show_content">Module
                <i class="arrow down"></i>
            </button>
            <div class="dropdown-content">
                <div id="myBtnContainer">
                    <li onclick="filterSelection('all')"> Show all</li>
                    @foreach($pathway as $pathways)
                        <li  onclick="filterSelection({{$pathways->id}})"> {{$pathways->pathway}}</li>
                    @endforeach
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-3 filter small-hidden">
            <h3>Pathways</h3>
            <div id="myBtnContainer">
                <button class="btn" onclick="filterSelection('all')"> Show all</button>
                @foreach($pathway as $pathways)
                    <button class="btn" onclick="filterSelection({{$pathways->id}})"> {{$pathways->pathway}}</button>
                @endforeach
            </div>
        </div>

        <div class="col-8 small-12">
            <div class="row">
                    @foreach($project as $projects)
                             <div class="col-4 small-10 ">
                                <div class="container border-radius">
                                    <img src="{{ asset($projects->image)}}" alt="image1" class="image">
                                    <div class="overlay border-radius">
                                        <div class="text">
                                            <div>{{$projects->Title}}</div>
                                            {{--<a href="previous_projects/{{$projects->id}}" class="link">View</a>--}}
                                            @if(Auth()->user()->permission == '2')
                                                <a href="previous_projects/{{$projects->id}}" class="col-4 small-4 link">View</a>

                                            @elseif ( Auth()->user()->permission == '1')
                                                <a href="previous_projects/{{$projects->id}}/edit" class="col-12 small-12 link">Edit</a>
                                                <a href="previous_projects/{{$projects->id}}" class="col-4 small-4 link">View</a>

                                            @elseif( Auth()->user()->id == $projects->user_id)
                                                <a href="previous_projects/{{$projects->id}}/edit" class="link col-12 small-12 link">edit</a>
                                                <a href="previous_projects/{{$projects->id}}" class="col-4 small-4 link">View</a>

                                            @endif
                                        </div>
                                    </div>

                                </div>
                            </div>
                        @endforeach
                </div>
        </div>
    </div>
</div>

@endsection