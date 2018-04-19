{{--file is used to create the new learning section form--}}
{{--extend lauouts.master used to link the blade file to the layout file to place the content within the article--}}
@extends('layouts.master')
{{--extends content is a variable used to indicate the yeild within the layout to place the content--}}
@section('content')
    {{--banner for the top of the website--}}
    <div class="banner_inside_create">
        <h1>Add a new topic </h1>
    </div>

    @include('layouts.validation')
    {{--Div used to create both the mobile and desktop form dispaly--}}
    <div class="row form_mobile form_desktop" >
        {{--Form open and connect to the controller through the mehthod of post--}}
        {!! Form::open(array('route' => 'image.upload.post','files'=>true, 'enctype' => "multipart/form-data")) !!}
        {{--title lable and input--}}
        <h2 class="row form_text">Title of project</h2>
        <input type="text" name="title" class="small-input">

        {{--Description input and title --}}
        <h2 class="row form_text">Description of the project</h2>
        <textarea rows="25" cols="40" class="text_area" name="content"> </textarea>

        {{--Number of participants input and title --}}
        <h2 class="row form_text">Number of participants </h2>
        <input type="text" name="num_participant" class="small-input">
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
            {!! Form::file('image', array('class' => 'submit_btn')) !!}
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
            <button type="submit" class="submit_btn ">Submit project</button>
        </div>
        {{--end of the form--}}
        {!! Form::close() !!}
    </div>
@endsection




