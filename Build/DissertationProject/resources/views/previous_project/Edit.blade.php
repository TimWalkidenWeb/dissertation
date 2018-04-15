@extends('layouts.master')
@section('content')

    <div class="banner_inside_create">
        <h1>Edit- {{$project->Title}}</h1>
    </div>

    <div class="form_mobile form_desktop" >
        <div class="row">
            {!! Form::model($project, ['method' => 'PATCH', 'url' => ['previous_projects',$project->id], $project->id]) !!}
            <h2 class="row form_text"> Title of project</h2>
            {!! Form::text('title', $project->Title, array('class'=>'small-input')) !!}

            <h2 class="row form_text">Description of the project</h2>
            {!! Form::textarea('description', $project->description, array('class'=>'text_area')) !!}

            <h2 class="row form_text">Date  </h2>
            {!! Form::date('date', $project->Date) !!}

            <h2 class="form_text">Pathway linked to project</h2>
            <ul>
            @foreach($pathway as $projects)

                <li class="form_list">
                    {!! Form::label('pathway_id', $projects->pathway) !!}
                    {!! Form::checkbox('pathway_id[]', $projects->id )!!}
                </li>

            @endforeach
            </ul>
            {!! Form::hidden('image',$project->image) !!}
            {!! Form::hidden('user_id',Auth()->User()->id) !!}

            <div>
                {!!  Form::token()!!}
            </div>
            <div class='form-group large-6 col-6'>
                <button type="submit" class="submit_btn ">Submit updates</button>
                {!! Form::close()!!}
            </div>

        </div>
        <div class="row">

            <div class='form-group large-6 col-6'>
                {!! Form::open(['method' => 'DELETE' ,'route' => ['previous_projects.destroy', $project->id]]) !!}
                <button type="submit" class="submit_btn ">Delete project</button>
                {!! Form::close()!!}
            </div>
        </div>

    </div>
    @include('layouts.validation')
@endsection

