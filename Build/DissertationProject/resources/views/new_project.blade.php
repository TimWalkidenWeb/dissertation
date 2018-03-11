@extends('layouts.master')
@section('content')
    <div class="row">
        <h3 class="col-12 small-12 show page_title">Add a new project</h3>
    </div>


    <div class="row form_mobile form_desktop" >
{!! Form::open(array('route' => 'image.upload.post','files'=>true, 'enctype' => "multipart/form-data")) !!}
    <div class="row form_text">

            Title of project    </div>
        <input type="text" name="title" class="small-input">


        <div class="row form_text">Description of the project


        </div>
        <textarea rows="25" cols="40" class="text_area" name="content"> </textarea>


        <div class="row form_text">Number of participants  </div>
        <input type="text" name="num_participant" class="small-input">
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




