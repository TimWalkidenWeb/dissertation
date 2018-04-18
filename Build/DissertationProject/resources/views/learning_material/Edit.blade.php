{{--extend lauouts.master used to link the blade file to the layout file to place the content within the article--}}
@extends('layouts.master')
{{--extends content is a variable used to indicate the yeild within the layout to place the content--}}
@section('content')
    {{--banner for the top of the website--}}
    <div class="banner_inside_create">
        {{--Edit with the variable called from the controller and asking to get the title from specified row--}}
        <h1>Edit- {{$learning_section->title}}</h1>
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
            {!! Form::model($learning_section, ['method' => 'PATCH', 'url' => ['learning_section',$learning_section->id], $learning_section->id]) !!}
                {{--title lable and input with inserted data--}}
                <h2 class="row form_text"> Title of project</h2>
                {!! Form::text('title', $learning_section->title, array('class'=>'small-input')) !!}
                {{--content lable and input with inserted data--}}
                <h2 class="row form_text">Description of the project</h2>
                {!! Form::textarea('content', $learning_section->content, array('class'=>'text_area')) !!}
                {{--coursework lable and input with inserted data--}}
                <h2 class="form_text">CW linked to learning section</h2>
                <ul>
                    {{--foreach to bring in each coursework one by one--}}
                    @foreach($cw as $cws)
                       <li class="form_list">
                           {{--giving each coursework a tile and check box--}}
                            {!! Form::label('cw_id', $cws->title) !!}
                            {!! Form::checkbox('cw_id[]', $cws->id )!!}
                       </li>
                    @endforeach
                </ul>
                {{--image input field--}}
                {!! Form::hidden('image',$learning_section->image) !!}
                {{--submit button--}}
                <div class='form-group large-6 col-6'>
                    <button type="submit" class="submit_btn ">Submit update</button>
                </div>
            {{--form closed--}}
            {!! Form::close()!!}
        </div>
        <div class="row">
            {{--delete form linked to destory in the learning section controller--}}
            <div class='form-group large-6 col-6'>
                {!! Form::open(['method' => 'DELETE' ,'route' => ['learning_section.destroy', $learning_section->id]]) !!}
                    {{--delete button--}}
                    <button type="submit" class="submit_btn ">Delete learning section</button>
                {!! Form::close()!!}
            </div>
        </div>
    </div>
@endsection

