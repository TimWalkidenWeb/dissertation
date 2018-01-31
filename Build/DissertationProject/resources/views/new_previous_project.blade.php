@extends('layouts.master')
@section('content')
<h1>New previous project</h1>

<div class="row form_mobile form_desktop" >
    {!! Form::open(array('route' => 'previous.upload.post','files'=>true, 'enctype' => "multipart/form-data")) !!}
    <div class="row form_text">

        Title of project    </div>
    <input type="text" name="title" class="small-input">


    <div class="row form_text">Description of the project


    </div>
    <textarea class="text_area" name="description" > </textarea>


    <div class="row form_text">Date </div>
    <input type="date" name="date" class="small-input">
    <div>
        <div class="form_text">Pathway linked to project</div>
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
        <div class="form_text">Add a display image</div>
        {!! Form::file('image', array('class' => 'form-control')) !!}
    </div>

    <div>
        <div class="form_text">Add a display content</div>
        {!! Form::file('image_content', array('class' => 'form-control')) !!}
    </div>

    <div>

        {!! Form::hidden('user_id',Auth()->User()->id, ['class'=> 'large-8 column']) !!}
    </div>
    <div>
        {!!  Form::token()!!}
    </div>
    <div class="form-group">

        <button type="submit" class="submit_btn">Submit project</button>
    </div>
    {!! Form::close() !!}
</div>


    @include('layouts.validation')
@endsection