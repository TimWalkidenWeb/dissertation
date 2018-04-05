@extends('layouts.master')
@section('content')

    <div class="row">
        <h3 class="col-12 small-12 show page_title">Edit- {{$project->Title}}</h3>
    </div>

    <div class="form_mobile form_desktop" >
      <div class="row">
        {!! Form::model($project, ['method' => 'PATCH', 'url' => 'projects/'.$project->id]) !!}

        <div class="row form_text"> Title of project</div>
        {!! Form::text('title', $project->Title, array('class'=>'small-input')) !!}

        <div class="row form_text">Description of the project</div>
        {!! Form::textarea('content', $project->content, array('class'=>'text_area')) !!}

        <div class="row form_text">Number of participants  </div>
        {!! Form::text('num_participant', $project->num_participant, array('class'=>'small-input')) !!}

        <div class="form_text">Pathway linked to project</div>
        @foreach($pathway as $projects)

        <li class="form_list">
            {!! Form::label('pathway_id', $projects->pathway) !!}
            {!! Form::checkbox('pathway_id[]', $projects->id )!!}
        </li>

        @endforeach

             {!! Form::hidden('image',$project->image) !!}
             {!! Form::hidden('user_id',Auth()->User()->id) !!}

        <div>
            {!!  Form::token()!!}
        </div>
          <div class='form-group large-6 col-6'>
              {!! Form::submit('Update project', ['class' =>'submit_btn']) !!}
          </div>
          {!! Form::close()!!}

      </div>
       <div class="row">


           <div class='form-group large-6 col-6'>
               {!! Form::open(['method' => 'DELETE' ,'route' => ['project.destroy', $project->id]]) !!}
               {!! Form::submit('Delete', ['class' => 'submit_btn']) !!}
               {!! Form::close()!!}
           </div>
       </div>

    </div>
    @include('layouts.validation')
@endsection