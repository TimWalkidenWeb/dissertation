@extends('layouts.master')
@section('content')
    <div class="row">
        <h3 class="col-12 small-12 show page_title">Add a new learning section</h3>
    </div>


    <div class="row form_mobile form_desktop" >
{!! Form::open(array('route' => 'learning.upload.post','files'=>true, 'enctype' => "multipart/form-data")) !!}
    <div class="row form_text">

            Title of learning section  </div>
        <input type="text" name="title" class="small-input">


        <div class="row form_text">Learning section content


        </div>
        <textarea rows="25" cols="40" class="text_area" name="content"> </textarea>

       <div>
        <div class="form_text">Coursework the learning section relevant to</div>
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
            <div class="form_text">Add a display image</div>
                   {!! Form::file('image', array('class' => 'form-control')) !!}
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




