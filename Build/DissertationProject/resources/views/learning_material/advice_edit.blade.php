@extends('layouts.master')
@section('content')

    <div class="row">
        <h3 class="col-12 small-12 show page_title">Edit- {{$learning_mat->Title}}</h3>
    </div>

    <div class="form_mobile form_desktop" >
        <div class="row">
            {!! Form::model($learning_mat, ['method' => 'PATCH', 'url' => ['learning_materials',$learning_mat->id], $learning_mat->id]) !!}
            <div class="row form_text">Advice title </div>
            {!! Form::text('Title', $learning_mat->Title, array('class'=>'small-input')) !!}

            <div class="row form_text">Advice content</div>
            {!! Form::textarea('content', $learning_mat->content, array('class'=>'text_area')) !!}


            <div>
                {!! Form::hidden('staff_id',Auth()->User()->id, ['class'=> 'large-8 column']) !!}
                {!! Form::hidden('learning_section_id',$learning_mat->learning_section_id, ['class'=> 'large-8 column']) !!}
            </div>
            <div>
                {!!  Form::token()!!}
            </div>
            <div class="form-group">

                <button type="submit" class="submit_btn">Submit update</button>
            </div>
            {!! Form::close() !!}
        </div>

    </div>

    @include('layouts.validation')
@endsection

