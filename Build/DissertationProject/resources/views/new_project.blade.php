@extends('layouts.master')
@section('content')
    <div class="banner_inside_create">
        <h1>Add a new topic </h1>
    </div>


    <div class="row form_mobile form_desktop">
        {!! Form::open(array('route' => 'image.upload.post','files'=>true, 'enctype' => "multipart/form-data")) !!}
        <h2 class="row form_text">Title of project</h2>
        <input type="text" name="title" class="small-input">


        <h2 class="row form_text">Description of the project</h2>
        <textarea rows="25" cols="40" class="text_area" name="content"> </textarea>


        <h2 class="row form_text">Number of participants </h2>
        <input type="text" name="num_participant" class="small-input">
        <div>
            <h2 class="form_text">Pathway linked to project</h2>
            <ul>
                @foreach($pathway as $pathways)

                    <li class="form_list">
                        {!! Form::label('pathway_id', $pathways->pathway) !!}
                        {{Form::checkbox('pathway_id[]', $pathways->id)}}
                    </li>
                @endforeach
            </ul>

        </div>

        <div>
            <h2 class="form_text">Add a display image</h2>
            {!! Form::file('image', array('class' => 'submit_btn')) !!}
        </div>

        <div>

            {!! Form::hidden('user_id',Auth()->User()->id, ['class'=> 'large-8 column']) !!}
        </div>
        <div>
            {!!  Form::token()!!}
        </div>
        <div class="form-group padding">
            <button type="submit" class="submit_btn ">Submit project</button>
        </div>
        {!! Form::close() !!}
    </div>


    @include('layouts.validation')

@endsection




