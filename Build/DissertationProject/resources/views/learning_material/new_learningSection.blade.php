{{--file is used to create the new learning section form--}}
{{--extend lauouts.master used to link the blade file to the layout file to place the content within the article--}}
@extends('layouts.master')
{{--extends content is a variable used to indicate the yeild within the layout to place the content--}}
@section('content')
    {{--banner for the top of the website--}}
    <div class="banner_inside_create">
        <h1>Add a new learning section</h1>
    </div>
    {{--calls in the validation file--}}
    @include('layouts.validation')
    {{--Div used to create both the mobile and desktop form dispaly--}}
    <div class="row form_mobile form_desktop" >
        {{--Form open and connect to the controller through the mehthod of post--}}
        {!! Form::open(array('route' => 'learning.upload.post','files'=>true, 'enctype' => "multipart/form-data")) !!}
            {{--title lable and input--}}
            <h2 class="row form_text">Title of learning section  </h2>
            <input type="text" name="title" class="small-input">
            {{--Content input and title --}}
            <h2 class="row form_text">Learning section content</h2>
            <textarea rows="25" cols="40" class="text_area" name="content"> </textarea>
            {{--open div to the list of courseworks--}}
            <div>
                {{--title for the list of coursewors--}}
                <h2 class="form_text">Coursework the learning section relevant to</h2>
                <ul>
                    {{--foreach used to gather the table of coursework and separate them into individual courseworks--}}
                    @foreach($cws as $cw)
                       <li class="form_list">
                           {{--lable for the coursework and the tick box for the coursework--}}
                           {!! Form::label('cw_id', $cw->title) !!}
                           {{Form::checkbox('cw_id[]', $cw->id)}}
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
                {!!  Form::token()!!}
            </div>
            {{--submit button for the form--}}
            <div class="form-group padding">
                <button type="submit" class="submit_btn">Submit Learning section</button>
            </div>
        {{--end of the form--}}
        {!! Form::close() !!}
    </div>

@endsection




