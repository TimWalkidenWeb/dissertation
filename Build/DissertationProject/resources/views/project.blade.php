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


<h1>{{$project}}</h1>
@if (isset($project))
<table class="table">
    <thead>
        <tr>
            <td>Title</td>
            <td>Lecture</td>
            <td>Participants</td>
            <td>Edit</td>
            <td>Shows</td>
            <td>Delete</td>
        </tr>
    </thead>
   <tbody>

   @foreach($project as $projects)
       <tr>
           <td>{{$projects->Title}}</td>
           <td>{{$projects->staff_id}}</td>
           <td>{{$projects->num_participant}}</td>
           <td><a href="/projects/{{$projects->id}}/edit" class="button">Update</a></td>
           <td><a href="/projects/{{$projects->id}}" class="button">show</a></td>
           <td>
               {!! Form::open(['method' => 'DELETE' ,'route' => ['project.destroy', $projects->id]]) !!}
               {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
               {!! Form::close()!!}
           </td>
       </tr>
   @endforeach
   </tbody>
</table>
@else
    <p>No Projects</p>
@endif

</body>
</html>