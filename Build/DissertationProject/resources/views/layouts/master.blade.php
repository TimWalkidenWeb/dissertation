<!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="{{ asset('storage/images/favicon.ico') }}" type="image/x-icon">
        <link rel="icon" href="{{ asset('storage/images/favicon.ico') }}" type="image/x-icon">
        {{--Title of the website in the browser--}}
        <title>Project Bazaar</title>
        {{--Link to the styling sheet--}}
        <link href="{{ asset('css/layout_2.css') }}" media="all" rel="stylesheet" type="text/css" />
        <script src="{{ asset('js/filter_tutor.js') }}"></script>
    </head>
    <body onload="myFunction()">
    {{--Header to represent where the navigation bar goes when pulled in from another blade file--}}
        <header>
            {{--Link to the header--}}
            @include('layouts.header')
        </header>
            {{--Article used to indicate to the layout where to inlcude the content--}}
        <article class="layout">
            {{--yield is used to call in the content from other blade files--}}
            @yield('content')
        </article>
    </body>
</html>