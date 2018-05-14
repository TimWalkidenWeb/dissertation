{{--file used to show a indvidual learning section--}}
{{--extend lauouts.master used to link the blade file to the layout file to place the content within the article--}}
@extends('layouts.master')
{{--extends content is a variable used to indicate the yeild within the layout to place the content--}}
@section('content')
    {{--banner for the top of the show page--}}
    <div class="banner_inside_show">
        <h1>{{$learningsection->title}}</h1>
    </div>
    {{--mobile and desktop view for the layout of the website--}}
    <div class="row form_mobile form_desktop" >
        {{--start of the content for the show page--}}
        <div class="row">
            <h3 class="show_content">Support content</h3>
            {{--first column of the main support content--}}
            <div class="col-6 small-12">
                {{--inserting the content from the database--}}
                <p class="show_content">{{$learningsection->content}}</p>
            </div>
            {{--coloumn two for the image--}}
            <div class="col-6 small-hidden">
                {{--inserting the coloumn for the image--}}
                <img  src="{{ asset($learningsection->image)}}" alt="Display image for {{$learningsection->title}}" class="small-hidden image_shadow border-radius" style="width: 100%">
            </div>
        </div>
        {{--row created under the two coloumn to show the pathways related--}}
        <div class="row col-12 small-12">
            <h4 class="show_content">Relevant coursework:</h4>
            <ul>
                {{--foreach to link the record to the pivot table to list all of the courseworks--}}
                @foreach($learningsection->learning as $cws)
                     <li class="show_content">{{$cws->title}}</li>
                @endforeach
            </ul>
        </div>
        {{--div created to separate content with lecturers advice--}}
        <div class="row col-12 small-12">
            <h3 class="show_content" style="text-align: center; margin-bottom: 5%">Lecturers Advice</h3>
            {{--foreach used to spearated each of the adivce from the database--}}
            @foreach($learningMat as $advice )
               {{--checking if the adivce is linked to the learning section--}}
               @if($advice->learning_section_id == $learningsection->id)
                    {{--making sure only quest and user are able to see the content--}}
                    @if(Auth::guest() or Auth()->user()->permission == '2')
                        <h4 class="show_content">{{$advice->Title}} by {{\App\User::findOrFail($advice->staff_id)->name}}</h4>
                        <p class="show_content">{{$advice->content}}</p>
                        {{--making sure only lectuers and programme leaders can see content and edit and delete content--}}
                    @elseif (Auth()->user()->permission == '1' or '3')
                        <h4 class="show_content">{{$advice->Title}} by {{\App\User::findOrFail($advice->staff_id)->name}}</h4>
                        <p class="show_content">{{$advice->content}}</p>
                        <div class='form-group' >
                          {{--delete button--}}
                          {!! Form::open(['method' => 'DELETE' ,'route' => ['learning_materials.destroy', $advice->id]]) !!}
                               <a type="submit" class="submit_btn">Delete</a>

                          {!! Form::close()!!}
                          {{--link to edit form for the adive section--}}
                          <a href="/learning_materials/{{$advice->id}}/edit" class="submit_btn">Edit</a>
                        </div>
                    @endif
               @endif
            @endforeach
        </div>
    </div>
    {{--if statement used to make sure only lecturer and programm leaders are able to see the form to upload adivce--}}
    @if(Auth::guest() or Auth()->user()->permission == '2')
    @elseif (Auth()->user()->permission !== '1' or '3')
        {{--mobile and desktop layout added to div--}}
        <div class="row form_mobile form_desktop" >
            {{--title of the form--}}
            <div class="row col-12 small-12 ">
                    <h3 class="show_content">Add your own advice</h3>
            </div>
            {{--includes validation--}}
            @include('layouts.validation')
            {{--open the form to upload adivce--}}
            {!! Form::open(array('route' => 'learningMat.upload.post','files'=>true, 'enctype' => "multipart/form-data")) !!}
                {{--title input and lable--}}
                <div class="row form_text">Advice title </div>
                <input type="text" name="Title" class="small-input">
                {{--content lable and input--}}
                <div class="row form_text">Advice content</div>
                <textarea rows="10" cols="40" class="text_area" name="content"> </textarea>
                {{--hidden field which users are not able to edit--}}
                <div>
                      {!! Form::hidden('staff_id',Auth()->User()->id, ['class'=> 'large-8 column']) !!}
                      {!! Form::hidden('learning_section_id',$learningsection->id, ['class'=> 'large-8 column']) !!}
                </div>
                <div>
                     {!!  Form::token()!!}
                </div>
                {{--submit button--}}
                <div class="form-group">
                         <button type="submit" class="submit_btn">Submit advice</button>
                </div>
            {{--end of form--}}
            {!! Form::close() !!}
        </div>
    @endif
@endsection
