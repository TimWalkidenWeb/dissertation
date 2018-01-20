<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edge Hill university third year projects</title>
    <link href="{{ asset('css/layout.css') }}" media="all" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="{{ asset('js/filter.js') }}"></script>
</head>
<body onload="myFunction()">
<div>
    <header>
        @include('layouts.header')
    </header>
    <article class="layout">
        @yield('content')
    </article>
</div>
<footer>Created by Timothy Walkiden</footer>
</body>
</html>