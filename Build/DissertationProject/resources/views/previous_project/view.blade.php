@extends('layouts.master')
@section('content')
<h1> View previous Project</h1>
@if (Auth()->user())
    <table class="table">
        <thead>
        <tr>
            <td>Title</td>
            <td>Lecture</td>
            <td>Date</td>
            <td>Edit-content</td>
            <td>Shows</td>
            <td>Delete</td>
        </tr>
        </thead>
        <tbody>
        @if (Auth()->user()->permission == 1)
        @foreach($user as $users)
            @foreach($users->Previousowner as $projects)
                <h1>{{$projects}}</h1>
                <tr>
                    <td>{{$projects->Title}}</td>
                    <td>{{$users->name}}</td>
                    <td>{{$projects->Date}}</td>
                    <td><a href="previous_projects/{{$projects->id}}/edit" class="button">Update-content</a></td>
                    <td><a href="previous_projects/{{$projects->id}}" class="button">show</a></td>
                    <td>
                        {!! Form::open(['method' => 'DELETE' ,'route' => ['previous_projects.destroy', $projects->id]]) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close()!!}
                    </td>
                </tr>
            @endforeach
        @endforeach
        @else
            @foreach($user as $users)
                @foreach($users->Previousowner as $projects)
                  @if($projects->user_id == Auth()->user()->id)
                    <h1>{{$projects}}</h1>
                    <tr>
                        <td>{{$projects->Title}}</td>
                        <td>{{$users->name}}</td>
                        <td>{{$projects->Date}}</td>
                        <td><a href="previous_projects/{{$projects->id}}/edit" class="button">Update-content</a></td>
                        <td><a href="previous_projects/{{$projects->id}}" class="button">show</a></td>
                        <td>
                            {!! Form::open(['method' => 'DELETE' ,'route' => ['previous_projects.destroy', $projects->id]]) !!}
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