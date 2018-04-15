@extends('layouts.master')
@section('content')
    <div class="banner_inside_create">
        <h1>Edit- {{$learning_section->title}}</h1>
    </div>



    <div class="form_mobile form_desktop" >
        <div class="row">
            {!! Form::model($learning_section, ['method' => 'PATCH', 'url' => ['learning_section',$learning_section->id], $learning_section->id]) !!}
            <h1 class="row form_text"> Title of project</h1>
            {!! Form::text('title', $learning_section->title, array('class'=>'small-input')) !!}

            <h1 class="row form_text">Description of the project</h1>
            {!! Form::textarea('content', $learning_section->content, array('class'=>'text_area')) !!}


            <h1 class="form_text">Pathway linked to project</h1>
            <ul>
            @foreach($cw as $cws)

                <li class="form_list">
                    {!! Form::label('cw_id', $cws->title) !!}
                    {!! Form::checkbox('cw_id[]', $cws->id )!!}
                </li>

            @endforeach
            </ul>
            {!! Form::hidden('image',$learning_section->image) !!}


            <div>
                {!!  Form::token()!!}<button type="submit" class="submit_btn ">Submit update</button>

            </div>

            <div class='form-group large-6 col-6'>
                <button type="submit" class="submit_btn ">Submit update</button>
                {!! Form::close()!!}
            </div>

        </div>
        <div class="row">

            <div class='form-group large-6 col-6'>
                {!! Form::open(['method' => 'DELETE' ,'route' => ['learning_section.destroy', $learning_section->id]]) !!}
                <button type="submit" class="submit_btn ">Delete learning section</button>
                {!! Form::close()!!}
            </div>
        </div>

    </div>

    @include('layouts.validation')
@endsection

