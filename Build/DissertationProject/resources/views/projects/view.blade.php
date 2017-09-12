@extends('layouts.master')
@section('content')
    <h1> View Project</h1>
    @if (Auth()->user())
        <table class="table">
            <thead>
                <tr>
                    <td>Title</td>
                    <td>Lecture</td>
                    <td>Participants</td>
                    <td>Edit-content</td>
                    <td>Shows</td>
                    <td>Delete</td>
                </tr>
            </thead>
           <tbody>
           @if (Auth()->user()->permission == 1)
                @foreach($user as $users)
                   @foreach($users->Projectowner as $projects)
                    <tr>
                       <td>{{$projects->Title}}</td>
                       <td>{{$users->name}}</td>
                       <td>{{$projects->num_participant}}</td>
                       <td><a href="projects/{{$projects->id}}/edit" class="button">edit</a></td>
                       <td><a href="projects/{{$projects->id}}" class="button">show</a></td>
                       <td>
                           {!! Form::open(['method' => 'DELETE' ,'route' => ['project.destroy', $projects->id]]) !!}
                           {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                           {!! Form::close()!!}
                       </td>
                    </tr>
                   @endforeach
                @endforeach
               @else
               @foreach($user as $users)
                   @foreach($users->Projectowner as $projects)
                     @if($projects->user_id == Auth()->user()->id)
                       <tr>
                           <td>{{$projects->Title}}</td>
                           <td>{{$users->name}}</td>
                           <td>{{$projects->num_participant}}</td>
                           <td><a href="projects/{{$projects->id}}/edit" class="button">edit</a></td>
                           <td><a href="projects/{{$projects->id}}" class="button">show</a></td>
                           <td>
                               {!! Form::open(['method' => 'DELETE' ,'route' => ['project.destroy', $projects->id]]) !!}
                               {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                               {!! Form::close()!!}
                           </td>
                       </tr>
                     @endif
                   @endforeach
               @endforeach
            @endif
            </tbody>
        </table>
    @else
    <p>No Projects</p>
    @endif
@endsection