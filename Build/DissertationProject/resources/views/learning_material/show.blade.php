@extends('layouts.master')
@section('content')
    <div class="row">
        <h3 class="col-12 small-12 show page_title">{{$learningsection->title}}</h3>

    </div>

    <div class="row form_mobile form_desktop" >
        <div class="row">
            <h3 class="show_content">Support content</h3>
            <div class="col-6 small-12">

                <p class="show_content">{{$learningsection->content}}</p>
            </div>
            <div class="col-6 small-hidden">
                <img  src="{{ asset($learningsection->image)}}" alt="Avatar" class="small-hidden image_shadow border-radius" style="width: 100%"></div>
        </div>
        <div class="row col-12 small-12">
            <h4 class="show_content">Relevant pathways:</h4>
            <ul>
                @foreach($learningsection->learning as $cws)
                <li class="show_content">{{$cws->title}}</li>
                @endforeach
            </ul>
        </div>
        <div class="row col-12 small-12">
        <h3 class="show_content" style="text-align: center">Lecturers Advice</h3>
            @foreach($learningMat as $advice )
                @if($advice->learning_section_id == $learningsection->id)
                <h4 class="show_content">{{$advice->Title}} by {{\App\User::findOrFail($advice->staff_id)->name}}</h4>
                <p class="show_content">{{$advice->content}}</p>
              @endif
            @endforeach

            {{--@foreach($user->material as $advice )--}}
                {{--@if($advice->learning_sections_id == $learningsection->id)--}}
                    {{--<h4 class="show_content">{{$advice->Title}} by {{$advice->name}}</h4>--}}
                    {{--<p class="show_content">{{$advice->content}}</p>--}}
                {{--@endif--}}
            {{--@endforeach--}}

        </div>

       </div>

    <div class="row form_mobile form_desktop" >
        <div class="row col-12 small-12 ">
            <h3 class="show_content">Add your own advice</h3>
        </div>
        {!! Form::open(array('route' => 'learningMat.upload.post','files'=>true, 'enctype' => "multipart/form-data")) !!}
        <div class="row form_text">Advice title </div>
        <input type="text" name="Title" class="small-input">

        <div class="row form_text">Advice content</div>
        <textarea rows="10" cols="40" class="text_area" name="content"> </textarea>

        <div>
            {!! Form::hidden('staff_id',Auth()->User()->id, ['class'=> 'large-8 column']) !!}
            {!! Form::hidden('learning_section_id',$learningsection->id, ['class'=> 'large-8 column']) !!}
        </div>
        <div>
            {!!  Form::token()!!}
        </div>
        <div class="form-group">

            <button type="submit" class="submit_btn">Submit advice</button>
        </div>
        {!! Form::close() !!}
    </div>


    @include('layouts.validation')

@endsection