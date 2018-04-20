{{--file is used to create the new learning section form--}}
{{--extend lauouts.master used to link the blade file to the layout file to place the content within the article--}}
@extends('layouts.master')
{{--extends content is a variable used to indicate the yeild within the layout to place the content--}}
@section('content')
    {{--banner for the top of the website--}}
    <div class="banner_inside_create">
        <h1>New previous project</h1>
    </div>
    @include('layouts.validation')
    {{--Div used to create both the mobile and desktop form dispaly--}}
    <div class="row form_mobile form_desktop" >
        {{--Form open and connect to the controller through the mehthod of post--}}
        {!! Form::open(array('route' => 'previous.upload.post','files'=>true, 'enctype' => "multipart/form-data")) !!}

        {{--title lable and input--}}
        <h2 class="row form_text">Title of project </h2>
        <input type="text" name="title" class="small-input">

        {{--Description input and title --}}
        <h2 class="row form_text">Description of the project</h2>
        <textarea class="text_area" name="description"> </textarea>

        {{--date input and title --}}
        <h2 class="row form_text">Date </h2>
        <input type="date" name="date" class="small-input">
        <div>
            {{--title for the list of pathway--}}
            <h2 class="form_text">Pathway linked to project</h2>
            <ul>
                {{--foreach used to gather the table of pathway and separate them into individual pathway--}}
                @foreach($pathway as $pathways)

                    <li class="form_list">
                        {!! Form::label('pathway_id', $pathways->pathway) !!}
                        {{Form::checkbox('pathway_id[]', $pathways->id)}}
                    </li>
                @endforeach
            </ul>

        </div>

        <div>
            {{--title for image uploader--}}
            <h2 class="form_text">Add a display image</h2>
            {{--input statement for file upload--}}
            {!! Form::file('image', array('class' => 'form-control')) !!}
        </div>

        <div>
            {{--title for document uploader--}}
            <h2 class="form_text">Add a project content</h2>
            {{--input statement for file upload--}}
            {!! Form::file('image_content', array('class' => 'form-control')) !!}
        </div>

        <div>
            {{--Hidden elements user can not edit--}}
            {!! Form::hidden('user_id',Auth()->User()->id, ['class'=> 'large-8 column']) !!}
        </div>
        <div>
            {!!  Form::token()!!}
        </div>
        {{--submit button for the form--}}
        <div class="form-group padding">

            <button type="submit" class="submit_btn" style="margin-top: 5%">Submit previous project</button>
        </div>
        {{--end of the form--}}

        {!! Form::close() !!}
    </div>
@endsection