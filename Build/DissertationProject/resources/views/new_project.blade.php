{{--@extends('layouts.master')--}}
{{--@section('content')--}}
    {{--<h1>Lets create a new project</h1>--}}

{{--{!! Form::open(['action'=>['new_project@store']] ) !!}--}}
    {{--<div class="form-group">--}}
        {{--{!! Form::Label('title', 'Title of project') !!}--}}
        {{--{!! Form::text('title', null) !!}--}}
    {{--</div>--}}
    {{--<div class="form-group">--}}
        {{--{!! Form::hidden('user_id',Auth()->User()->id, ['class'=> 'large-8 column']) !!}--}}
    {{--</div>--}}
    {{--<div class="form-group">--}}
        {{--{!!  Form::token()!!}--}}
    {{--</div>--}}

    {{--<div class="form-group">--}}
        {{--{!! Form::Label('content', 'Description of the project') !!}--}}
        {{--{!! Form::text('content', null) !!}--}}
    {{--</div>--}}

    {{--<div class="form-group">--}}
        {{--{!! Form::Label('num_participant', 'Number of participants') !!}--}}
        {{--{!! Form::text('num_participant', null) !!}--}}
    {{--</div>--}}
    {{--<div class="form-group">--}}
    {{--@foreach($pathway as $pathways)--}}

            {{--{!! Form::label('pathway_id', $pathways->pathway) !!}--}}
            {{--{{Form::checkbox('pathway_id[]', $pathways->id)}}--}}

    {{--@endforeach--}}
    {{--</div>--}}

    {{--<div class="form-group">--}}
        {{--{!! Form::Label('image_name', 'Description of the project') !!}--}}
        {{--<input type="file" id="image" name = "image">--}}
    {{--</div>--}}
    {{--<div class='form-group'>--}}
        {{--{!! Form::submit('submit new project', ['class' =>'button']) !!}--}}
    {{--</div>--}}

    {{--<div class="form-group">--}}
        {{--{!! Form::checkbox($pathway->Pathway, $pathway->id) !!}--}}
    {{--</div>--}}



    {{--<form action="{{URL::to('upload')}}" method="post" enctype="multipart/form-data">--}}
        {{--<input type="file" name="file">--}}
        {{--<input type="submit" value="upload" name="submit">--}}
    {{--</form>--}}
    {{--{!! Form::close() !!}--}}
    {{--@include('layouts.validation')--}}

{{--@endsection--}}


        <!DOCTYPE html>

<html>

            {!! Form::open(array('route' => 'image.upload.post','files'=>true, 'enctype' => "multipart/form-data")) !!}

            <div class="row">

                <div class="col-md-6">

                    {!! Form::file('image', array('class' => 'form-control')) !!}

                </div>

                <div class="col-md-6">

                    <button type="submit" class="btn btn-success">Upload</button>

                </div>

            </div>

            {!! Form::close() !!}

        </div>


</body>

</html>