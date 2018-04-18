{{--extend lauouts.master used to link the blade file to the layout file to place the content within the article--}}
@extends('layouts.master')
{{--extends content is a variable used to indicate the yeild within the layout to place the content--}}
@section('content')
    {{--banner for the top of the website--}}
    <div class="banner_inside_create">
        {{--Edit with the variable called from the controller and asking to get the title from specified row--}}
        <h1>Edit- {{$learning_mat->Title}}</h1>
    </div>
    {{--Div used to create both the mobile and desktop form dispaly--}}
    <div class="form_mobile form_desktop" >
        {{--calls in the validation file--}}
        @include('layouts.validation')
        {{--row is used to start the form--}}
        <div class="row">
            {{--form model is used to call in the vairable to gather the data from the table, method is pathch to
                show the data being changed, url to link back to the update function in the controller and passing through
                the id so the row can be found and then edited
            --}}
            {!! Form::model($learning_mat, ['method' => 'PATCH', 'url' => ['learning_materials',$learning_mat->id], $learning_mat->id]) !!}
            {{--title lable and input with the value of input set automaticly to the title found in the database--}}
            <div class="row form_text">Advice title </div>
            {!! Form::text('Title', $learning_mat->Title, array('class'=>'small-input')) !!}

            {{--Content lable and input with the value of input set automaticly to the content found in the database--}}
            <div class="row form_text">Advice content</div>
            {!! Form::textarea('content', $learning_mat->content, array('class'=>'text_area')) !!}
            <div>
                {{--Hidden field which include the data from the field that are not allowed to be changed by the user--}}
                {!! Form::hidden('staff_id',Auth()->User()->id, ['class'=> 'large-8 column']) !!}
                {!! Form::hidden('learning_section_id',$learning_mat->learning_section_id, ['class'=> 'large-8 column']) !!}
            </div>
            <div>
                {!!  Form::token()!!}
            </div>
            {{--submit button to submit the data within the form--}}
            <div class="form-group">
                <button type="submit" class="submit_btn">Submit update</button>
            </div>
            {{--end of the form--}}
            {!! Form::close() !!}
        </div>
    </div>
    {{--end of the content to be placed in the layout--}}
@endsection

