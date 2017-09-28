@extends('layouts.master')
@section('content')
<body>
<h1>View show</h1>


<h1>{{$project->Title}}</h1>
<h1>{{$project}}</h1>

<button onclick="goBack()">Return to projects</button>
<script>
    function goBack() {
        window.history.back();
    }
</script>

@endsection