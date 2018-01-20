@extends('layouts.master')
@section('content')
{{--<h1> View previous Project</h1>--}}
{{--@if (Auth()->user())--}}
    {{--<table class="table">--}}
        {{--<thead>--}}
        {{--<tr>--}}
            {{--<td>Title</td>--}}
            {{--<td>Lecture</td>--}}
            {{--<td>Date</td>--}}
            {{--<td>Edit-content</td>--}}
            {{--<td>Shows</td>--}}
            {{--<td>Delete</td>--}}
        {{--</tr>--}}
        {{--</thead>--}}
        {{--<tbody>--}}
        {{--@if (Auth()->user()->permission == 1)--}}
        {{--@foreach($user as $users)--}}
            {{--@foreach($users->Previousowner as $projects)--}}
                {{--<h1>{{$projects}}</h1>--}}
                {{--<tr>--}}
                    {{--<td>{{$projects->Title}}</td>--}}
                    {{--<td>{{$users->name}}</td>--}}
                    {{--<td>{{$projects->Date}}</td>--}}
                    {{--<td><a href="previous_projects/{{$projects->id}}/edit" class="button">Update-content</a></td>--}}
                    {{--<td><a href="show/{{$projects->id}}" class="button">show</a></td>--}}
                    {{--<td>--}}
                        {{--{!! Form::open(['method' => 'DELETE' ,'route' => ['previous_projects.destroy', $projects->id]]) !!}--}}
                        {{--{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}--}}
                        {{--{!! Form::close()!!}--}}
                    {{--</td>--}}
                {{--</tr>--}}
            {{--@endforeach--}}
        {{--@endforeach--}}
        {{--@else--}}
            {{--@foreach($user as $users)--}}
                {{--@foreach($users->Previousowner as $projects)--}}
                  {{--@if($projects->user_id == Auth()->user()->id)--}}
                    {{--<h1>{{$projects}}</h1>--}}
                    {{--<tr>--}}
                        {{--<td>{{$projects->Title}}</td>--}}
                        {{--<td>{{$users->name}}</td>--}}
                        {{--<td>{{$projects->Date}}</td>--}}
                        {{--<td><a href="previous_projects/{{$projects->id}}/edit" class="button">Update-content</a></td>--}}
                        {{--<td><a href="show/{{$projects->id}}" class="button">show</a></td>--}}
                        {{--<td>--}}
                            {{--{!! Form::open(['method' => 'DELETE' ,'route' => ['previous_projects.destroy', $projects->id]]) !!}--}}
                            {{--{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}--}}
                            {{--{!! Form::close()!!}--}}
                        {{--</td>--}}
                    {{--</tr>--}}
                  {{--@endif--}}
                {{--@endforeach--}}
            {{--@endforeach--}}
        {{--@endif--}}
        {{--</tbody>--}}
    {{--</table>--}}
{{--@else--}}
    {{--<p>No Projects</p>--}}
{{--@endif--}}


<div class="row">
    <h3 class="col-12 small-12" style="padding-left: 3%; text-align: center;">Project examples</h3>

</div>
<div class="row">
    <h3 class=" col-hidden small-5" style="padding-left: 3%;">Filiter:</h3>
    <div class="filt col-hidden small-7">
        <div class="dropdown small-6">
            <button class="dropbtn">Module
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
        <div class="dropdown small-6">
            <button class="dropbtn">Tutor
                <i class="arrow down"></i>
            </button>
            <div class="dropdown-content">
                <div id="myBtnContainer">
                    <li  onclick="filterSelection('all')"> Show all</li>
                    @foreach($tutor as $tutors)
                        <li  onclick="filterSelection({{$tutors->id}})"> {{$tutors->name}}</li>
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
            <h3>Tutor</h3>
            <div id="myBtnContainer">
                <button class="btn" onclick="filterSelection('all')"> Show all</button>
                @foreach($tutor as $tutors)
                    <button class="btn" onclick="filterSelection({{$tutors->id}})"> {{$tutors->name}}</button>
                @endforeach
            </div>
        </div>

        <div class="col-8 small-12">
            <div class="row">
                @foreach($tutor as $tutors)
                    @foreach($tutors->Previousowner as $projects)
                        @foreach($projects->Pathway as $pathway)
                            <div class="col-4 small-10 ">
                                <div class="container">
                                    <img src="{{ asset('storage/logo.jpeg') }}" alt="image1" style=" height: 100pt;">
                                    <div class="overlay">
                                        <div class="text">{{$projects->Title}}
                                            <button><a href="projects/{{$projects->id}}" class="button">show</a></button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        @endforeach
                    @endforeach
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection