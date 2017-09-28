@extends('layouts.master')
@section('content')
<body>
<h1>View show</h1>


<h1>{{$project->Title}}</h1>
<h1>{{$project->num_participant}}</h1>
<p>{{$project->content}}</p>

<button onclick="goBack()">Return to projects</button>
<script>
    function goBack() {
        window.history.back();
    }
</script>

@endsection