@extends('layouts.master')
@section('content')

    {{--@if (Auth()->user())--}}
        {{--<table class="table">--}}
            {{--<thead>--}}
                {{--<tr>--}}
                    {{--<td>Title</td>--}}
                    {{--<td>Lecture</td>--}}
                    {{--<td>Participants</td>--}}
                    {{--<td>Edit-content</td>--}}
                    {{--<td>Shows</td>--}}
                    {{--<td>Delete</td>--}}
                {{--</tr>--}}
            {{--</thead>--}}
           {{--<tbody>--}}
           {{--@if (Auth()->user()->permission == 1)--}}
                {{--@foreach($user as $users)--}}
                   {{--@foreach($users->Projectowner as $projects)--}}
                    {{--<tr>--}}
                       {{--<td>{{$projects->Title}}</td>--}}
                       {{--<td>{{$users->name}}</td>--}}
                       {{--<td>{{$projects->num_participant}}</td>--}}
                       {{--<td><a href="projects/{{$projects->id}}/edit" class="button">edit</a></td>--}}
                       {{--<td><a href="projects/{{$projects->id}}" class="button">show</a></td>--}}
                       {{--<td>--}}
                           {{--{!! Form::open(['method' => 'DELETE' ,'route' => ['project.destroy', $projects->id]]) !!}--}}
                           {{--{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}--}}
                           {{--{!! Form::close()!!}--}}
                       {{--</td>--}}
                    {{--</tr>--}}
                   {{--@endforeach--}}
                {{--@endforeach--}}
               {{--@else--}}
               {{--@foreach($user as $users)--}}
                   {{--@foreach($users->Projectowner as $projects)--}}
                     {{--@if($projects->user_id == Auth()->user()->id)--}}
                       {{--<tr>--}}
                           {{--<td>{{$projects->Title}}</td>--}}
                           {{--<td>{{$users->name}}</td>--}}
                           {{--<td>{{$projects->num_participant}}</td>--}}
                           {{--<td><a href="projects/{{$projects->id}}/edit" class="button">edit</a></td>--}}
                           {{--<td><a href="projects/{{$projects->id}}" class="button">show</a></td>--}}
                           {{--<td>--}}
                               {{--{!! Form::open(['method' => 'DELETE' ,'route' => ['project.destroy', $projects->id]]) !!}--}}
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
        <h3 class="col-12 small-12" style="padding-left: 3%; text-align: center;">Current Projects</h3>

    </div>
    <div class="row">
        <h3 class=" col-hidden small-5" style="padding-left: 3%;">Filiter:</h3>
        <div class="filt col-hidden small-7">
            <div class="dropdown small-6">
                <button class="dropbtn">Module
                    <i class="arrow down"></i>
                </button>
                <div class="dropdown-content">
                    @foreach($pathway as $pathways)
                        <ul>
                            <li>{{$pathways->pathway}}</li>
                        </ul>
                    @endforeach

                </div>
            </div>
            <div class="dropdown small-6">
                <button class="dropbtn">Tutor
                    <i class="arrow down"></i>
                </button>
                <div class="dropdown-content">
                    @foreach($tutor as $tutors)
                        <ul>
                            <li>{{$tutors->name}}</li>
                        </ul>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-3 filter small-hidden">
                <h3>Pathways</h3>
                @foreach($pathway as $pathways)
                    <ul>
                        <li>{{$pathways->pathway}}</li>
                    </ul>
                @endforeach

                <h3>Tutor</h3>
                    @foreach($tutor as $tutors)
                        <ul>
                            <li>{{$tutors->name}}</li>
                        </ul>
                    @endforeach
            </div>
            <div class="col-8 small-12">
                <div class="row">
                       @foreach($tutor as $tutors)
                            @foreach($tutors->Projectowner as $projects)
                                <div class="col-4 small-10">
                                    <div class="container">
                                        <img src="{{ asset($projects->image_name)}}" alt="Avatar" class="image">
                                        <div class="overlay">
                                            <div class="text">{{$projects->Title}}
                                                <button><a href="projects/{{$projects->id}}" class="button">show</a></button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            @endforeach
                        @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection