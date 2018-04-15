@extends('layouts.master')
@section('content')

    <div class="banner_inside_create">
        <h1>Add a new learning section</h1>
    </div>


    <div class="row form_mobile form_desktop" >
{!! Form::open(array('route' => 'learning.upload.post','files'=>true, 'enctype' => "multipart/form-data")) !!}
    <h2 class="row form_text">

            Title of learning section  </h2>
        <input type="text" name="title" class="small-input">


        <h2 class="row form_text">Learning section content


        </h2>
        <textarea rows="25" cols="40" class="text_area" name="content"> </textarea>

       <div>
        <h2 class="form_text">Coursework the learning section relevant to</h2>
        <ul>
            @foreach($cws as $cw)

               <li class="form_list">
                   {!! Form::label('cw_id', $cw->title) !!}
                   {{Form::checkbox('cw_id[]', $cw->id)}}
               </li>
            @endforeach
        </ul>

    </div>

        <div>
            <h2 class="form_text">Add a display image</h2>
                   {!! Form::file('image', array('class' => 'form-control')) !!}
            </div>


        <div>
            {!!  Form::token()!!}
        </div>
        <div class="form-group padding">

            <button type="submit" class="submit_btn">Submit Learning section</button>
        </div>
        {!! Form::close() !!}
</div>


    @include('layouts.validation')

@endsection




