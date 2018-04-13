<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edge Hill university third year projects</title>
    <link href="{{ asset('css/layout_2.css') }}" media="all" rel="stylesheet" type="text/css" />
    {{--<script type="text/javascript" src="{{ asset('js/filter.js') }}"></script>--}}
    {{--<script type="text/javascript" src="{{ asset('js/filter_tutor.js') }}"></script>--}}
</head>
<body onload="myFunction()">
{{--<div style="height: 90%">--}}
    <header>
        @include('layouts.header')
    </header>
    <article class="layout">
        @yield('content')
    </article>
{{--</div>--}}
{{--/<footer class="col-12">Created by Timothy Walkiden</footer>--}}
</body>
</html>