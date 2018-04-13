@extends('layouts.master')

@section('content')
    <div class="banner">
        <h1> Need a Project Topic ?</h1>
        <h3>We will find you one</h3>
        <button class=find"> <a href="{{url('/project')}}">View Topics</a></button>
    </div>
    <div class="sections">
        <h3>Why use this website ?</h3>
        <div class="inner_section">
            <div class="section">
                <img src="{{ asset('storage/images/support.png') }}" alt="image1" class="display">
                <h3 class="display_heading"><a href="{{'/learning_material'}}">Support on your project</a></h3>
            </div>
            <div class="section">
                <img src="{{ asset('storage/images/idea.png') }}" alt="image1" class="display">
                <h3 class="display_heading"><a href="{{url('/project')}}">Topic suggestions</a></h3>
                <p></p>
            </div>

            <div class="section end">
                <img src="{{ asset('storage/images/examples.png') }}" alt="image1" class="display">
                <h3 class="display_heading"><a href="{{url('/previous_projects')}}">View examples of previous work</a></h3>
            </div>
        </div>


    </div>

@endsection
