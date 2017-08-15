<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Project</title>
</head>
<body>
<h1> View Project</h1>
@if (isset($project))
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
        </tbody>
    </table>
@else
    <p>No Projects</p>
@endif

</body>
</html>