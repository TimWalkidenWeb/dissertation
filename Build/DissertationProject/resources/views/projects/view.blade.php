@extends('layouts.master')
@section('content')

    <div class="banner_inside_view">
        <h1>Available topics being offered </h1>
        <h3 class="small-hidden">Want to filter by pathway use links below</h3>
        <div class="dropdown small-12 col-hidden">
            <button class="dropbtn ">Filter by pathway	&#9660;</button>
            <i class="arrow down"></i>
            <div class="dropdown-content module_filt">
                <div id="myBtnContainer">
                    <li class="fil_list" style="margin-top: 3%" onclick="filterSelection_pathway('all')"> Show all</li>
                    @foreach($pathway as $pathways)
                        <li class="fil_list" onclick="filterSelection_pathway({{$pathways->id}})"> {{$pathways->pathway}}</li>
                    @endforeach
                 </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 filter small-hidden">
                <div id="myBtnContainer">
                    <div class="extra_link_style  " style="width: 100%; font-size: 22px" onclick="filterSelection('all')"> Show all</div>
                    @foreach($pathway as $pathways)
                        <div class="extra_link_style margin col-2" onclick="filterSelection({{$pathways->id}})"> {{$pathways->pathway}}</div>
                    @endforeach
                </div>
            </div>
         </div>

    </div>
        {{--<div class="filt col-hidden small-12">--}}
            {{--<div class="dropdown small-6">--}}
                {{--<button class="dropbtn show_content ">Module--}}
                    {{--<i class="arrow down"></i>--}}
                {{--</button>--}}
                {{--<div class="dropdown-content module_filt">--}}
                    {{--<div id="myBtnContainer">--}}
                        {{--<li onclick="filterSelection_pathway('all')"> Show all</li>--}}
                        {{--@foreach($pathway as $pathways)--}}
                            {{--<li  onclick="filterSelection_pathway({{$pathways->id}})"> {{$pathways->pathway}}</li>--}}
                        {{--@endforeach--}}
                    {{--</div>--}}

                {{--</div>--}}
            {{--</div>--}}
          {{--</div>--}}


            <div class="col-12 small-12">
                <div class="row">
                            @foreach($project as $projects)

                                <div class="col-3 small-12 " id="{{asset($projects->user_id)}}">
                                    <div class="container border-radius">
                                        <img src="{{ asset($projects->image)}}" alt="display image for {{ asset($projects->Title)}} " class="image_view">
                                        <div class="overlay border-radius">
                                            <div class="text">
                                               <div class="row">
                                                   <div class="col-12 small-12 image_heading">{{$projects->Title}}</div>
                                               </div>
                                               <div class="row">
                                                   @if(Auth::guest() or Auth()->user()->permission == '2')
                                                       <a href="project/{{$projects->id}}" class="col-12 small-12 image_heading">View</a>

                                                   @elseif ( Auth()->user()->permission == '1')
                                                       <a href="projects/{{$projects->id}}/edit" class="col-6 small-6 image_heading">Edit</a>
                                                        <a href="project/{{$projects->id}}" class="col-6 small-6 image_heading">View</a>

                                                @elseif( Auth()->user()->id == $projects->user_id)
                                                    <a href="projects/{{$projects->id}}/edit" class="link col-6 small-6 image_heading">Edit</a>
                                                       <a href="project/{{$projects->id}}" class="col-6 small-6 image_heading">View</a>
                                                @endif
                                               </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                @endforeach
                        </div>


            </div>






@endsection