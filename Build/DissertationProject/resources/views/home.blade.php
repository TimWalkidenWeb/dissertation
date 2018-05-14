{{--file is used to create the new learning section form--}}
{{--extend lauouts.master used to link the blade file to the layout file to place the content within the article--}}
@extends('layouts.master')
{{--extends content is a variable used to indicate the yeild within the layout to place the content--}}
@section('content')
    {{--banner for the top of the website--}}
    <div class="banner">
        {{--Heading of the home page--}}
        <h1> What is a final year project?</h1>
        {{--sub heading for the page--}}
        <h3>Explore to find a project and discover more about what they are</h3>
        {{--link to possible topics--}}
        <button class=find"><a href="{{url('/project')}}">View Topics</a></button>
    </div>
    <div class="sections">
        {{--Just under the page fold--}}
        <h3>Why use this website ?</h3>
        <div class="inner_section">
            {{--column 1 for the support section--}}
            <div class="section">
                {{--image for support section--}}
                <img src="{{ asset('storage/images/support.png') }}" alt="image1" class="display">
                {{--heading for the support section--}}
                <h3 class="display_heading"><a href="{{'/learning_section'}}">Support on your project</a></h3>
            </div>
            {{--column 2 for the topic suggestions--}}
            <div class="section">
                {{--image for the topic suggestions--}}
                <img src="{{ asset('storage/images/idea.png') }}" alt="image1" class="display">
                {{--heading for the topic suggestions--}}
                <h3 class="display_heading"><a href="{{url('/project')}}">Topic suggestions</a></h3>

            </div>
            {{--column 3 for previous work--}}
            <div class="section end">
                {{--previouse work image --}}
                <img src="{{ asset('storage/images/examples.png') }}" alt="image1" class="display">
                {{--previous work title--}}
                <h3 class="display_heading"><a href="{{url('/previous_projects')}}">View examples of previous work</a>
                </h3>
            </div>
        </div>


    </div>

@endsection
