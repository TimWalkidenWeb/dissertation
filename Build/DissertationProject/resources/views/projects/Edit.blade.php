{{--extend lauouts.master used to link the blade file to the layout file to place the content within the article--}}
@extends('layouts.master')
{{--extends content is a variable used to indicate the yeild within the layout to place the content--}}
@section('content')
    {{--banner for the top of the website--}}
    <div class="banner_inside_create">
        {{--Edit with the variable called from the controller and asking to get the title from specified row--}}
    </div>

    {{--Div used to create both the mobile and desktop form dispaly--}}
    <div class="form_mobile form_desktop">
        {{--calls in the validation file--}}
        @include('layouts.validation')
        {{--row is used to start the form--}}
        <div class="row">
            {{--form model is used to call in the vairable to gather the data from the table, method is pathch to
                show the data being changed, url to link back to the update function in the controller and passing through
                the id so the row can be found and then edited
            --}}
            {!! Form::model($project, ['method' => 'PATCH', 'url' => 'projects/'.$project->id]) !!}
            {{--title lable and input feild--}}
            <h2 class="row form_text"> Title of project</h2>
            {!! Form::text('title', $project->Title, array('class'=>'small-input')) !!}
            {{--content input field and lable--}}
            <h2 class="row form_text">Description of the project</h2>
            {!! Form::textarea('content', $project->content, array('class'=>'text_area')) !!}
            {{--num_participant input field and lable--}}
            <h2 class="row form_text">Number of participants </h2>
            {!! Form::text('num_participant', $project->num_participant, array('class'=>'small-input')) !!}

            <h2 class="form_text">Pathway linked to project</h2>
            {{--pathway lable and checkboxes--}}
            <ul>
                {{--foreach to pull in each pathway and assign to li element with a checkboxs--}}
            @foreach($pathway as $projects)

                    <li class="form_list">
                        {!! Form::label('pathway_id', $projects->pathway) !!}
                        {!! Form::checkbox('pathway_id[]', $projects->id )!!}
                    </li>

                @endforeach
            </ul>
            {{--hidden feilds not to be edited by user--}}
            {!! Form::hidden('image',$project->image) !!}
            {!! Form::hidden('user_id',Auth()->User()->id) !!}

            <div>
                {!!  Form::token()!!}
            </div>
            {{--submit button--}}
            <div class='form-group large-6 col-6'>
                <button type="submit" class="submit_btn ">Submit update</button>
            </div>
            {!! Form::close()!!}

        </div>
        <div class="row">

            {{--delete form linking the view to the destory function in  the previous project controller--}}
            <div class='form-group large-6 col-6'>
                {!! Form::open(['method' => 'DELETE' ,'route' => ['project.destroy', $project->id]]) !!}
                {{--delete submit button--}}
                <button type="submit" class="submit_btn ">Delete project</button>
                {!! Form::close()!!}
            </div>
        </div>
    </div>
@endsection