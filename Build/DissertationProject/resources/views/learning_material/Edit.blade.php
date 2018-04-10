@extends('layouts.master')
@section('content')

    <div class="row">
        <h3 class="col-12 small-12 show page_title">Edit- {{$learning_section->title}}</h3>
    </div>

    <div class="form_mobile form_desktop" >
        <div class="row">
            {!! Form::model($learning_section, ['method' => 'PATCH', 'url' => ['learning_section',$learning_section->id], $learning_section->id]) !!}
            <div class="row form_text"> Title of project</div>
            {!! Form::text('title', $learning_section->title, array('class'=>'small-input')) !!}

            <div class="row form_text">Description of the project</div>
            {!! Form::textarea('content', $learning_section->content, array('class'=>'text_area')) !!}


            <div class="form_text">Pathway linked to project</div>
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
                {!!  Form::token()!!}

            </div>

            <div class='form-group large-6 col-6'>
                {!! Form::submit('Update learning section', ['class' =>'submit_btn']) !!}
                {!! Form::close()!!}
            </div>

        </div>
        <div class="row">

            <div class='form-group large-6 col-6'>
                {!! Form::open(['method' => 'DELETE' ,'route' => ['learning_section.destroy', $learning_section->id]]) !!}
                {!! Form::submit('Delete', ['class' => 'submit_btn']) !!}
                {!! Form::close()!!}
            </div>
        </div>

    </div>

    @include('layouts.validation')
@endsection

