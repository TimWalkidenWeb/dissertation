<nav>
    {{--<div class="row">--}}
        {{--<div class="col-2 small-hidden">--}}
            {{--<img src="{{ asset('storage/images/logo.png') }}" alt="image1" class="logo">--}}
        {{--</div>--}}
        {{--<div class="col-10 small-12">--}}
            {{--<div class="row">--}}
                {{--<h1 class="col-7 small-9">Project Bazzar</h1>--}}
                {{--@if(Auth::guest())--}}
                    {{--<div class="col-1 small-hidden login"><a href="{{url('/login')}}">login</a></div>--}}
                    {{--<div class="col-1 small-hidden login"><a href="/new_student">Register</a></div>--}}
                {{--@elseif(Auth::user()->permission == 1)--}}
                    {{--<div class="col-1 small-hidden login"><a href="{{url('/log_out')}}">Logout</a></div>--}}
                    {{--<div class="col-2 small-hidden login"><a href="/new_staff">Register staff</a></div>--}}
                {{--@elseif(Auth::user()->permission == 3 or 2)--}}
                    {{--<div class="col-1 small-hidden login"><a href="{{url('/log_out')}}">Logout</a></div>--}}
                {{--@endif--}}
                {{--<div class="navbar col-hidden small-3">--}}
                    {{--<div class="dropdown">--}}
                        {{--<button class="dropbtn">Menu 	&#9660;</button>--}}
                            {{--<div class="dropdown-content menu">--}}
                                {{--@if(Auth::guest())--}}
                                    {{--<a href="{{url('/login')}}">login</a>--}}
                                    {{--<a href="/new_student">Register</a>--}}
                                    {{--<a href="{{'/learning_material'}}">Support</a>--}}
                                    {{--<a href="{{url('/previous_projects')}}">Examples</a>--}}
                                    {{--<a href="{{url('/project')}}">Topics</a>--}}

                                {{--@elseif(Auth::user()->permission == 1)--}}
                                    {{--<a href="{{url('/log_out')}}">Logout</a>--}}
                                    {{--<a href="/new_staff">Add new staff</a>--}}

                                    {{--<a href="{{'/learning_section'}}">Project support</a>--}}
                                    {{--<a href="learning_section/create">Create learning section</a>--}}

                                    {{--<a href="{{url('/project')}}">Current Projects</a>--}}
                                    {{--<a href="/new_project">New project</a>--}}

                                    {{--<a href="{{url('/previous_projects')}}">Project Examples</a>--}}
                                    {{--<a href="/new_previous_project">Add a previous project</a>--}}


                                {{--@elseif(Auth::user()->permission == 2)--}}
                                    {{--<a href="{{'/learning_material'}}">Project support</a>--}}
                                    {{--<a href="{{url('/previous_projects')}}">Project Examples</a>--}}
                                    {{--<a href="{{url('/project')}}">Current Projects</a>--}}

                                {{--@elseif(Auth::user()->permission == 3)--}}
                                    {{--<a href="{{url('/log_out')}}">Logout</a>--}}

                                    {{--<a href="{{'/learning_section'}}">Project support</a>--}}
                                    {{--<a href="learning_section/create">Create learning section</a>--}}

                                    {{--<a href="{{url('/project')}}">Current Projects</a>--}}
                                    {{--<a href="/new_project">New project</a>--}}

                                    {{--<a href="{{url('/previous_projects')}}">Project Examples</a>--}}
                                    {{--<a href="/new_previous_project">Add a previous project</a>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--@if(Auth::guest() or Auth::user()->permission == 2)--}}
                {{--<div class="row nav small100px-hidden">--}}
                    {{--<div class="col-4"><a href="{{'/learning_material'}}">Support</a></div>--}}
                    {{--<div class="col-4"><a href="{{url('/previous_projects')}}">Examples</a></div>--}}
                    {{--<div class="col-4"><a href="{{url('/project')}}">Topics</a></div>--}}
                {{--</div>--}}
            {{--@elseif(Auth::user()->permission == 1 or 3)--}}
                {{--<div class="row nav small-hidden">--}}
                    {{--<div class="col-2"><a href="{{'/learning_section'}}">Support</a></div>--}}
                    {{--<div class="col-2"><a href="/learning_section/create">Create Support</a></div>--}}
                    {{--<div class="col-2"><a href="{{url('/previous_projects')}}">Examples</a></div>--}}
                    {{--<div class="col-2"><a href="{{url('/project')}}">Topics</a></div>--}}
                    {{--<div class="col-2"><a href="/new_project">New topic</a></div>--}}
                    {{--<div class="col-2"><a href="/new_previous_project">Add Examples</a></div>--}}
                {{--</div>--}}
            {{--@endif--}}
        {{--</div>--}}
    {{--</div>--}}

    <nav>
        <img src="{{ asset('storage/images/logo_2.png') }}" alt="image1" class="logo">
       <div class="inner_nav small-hidden">
           @if(Auth::guest())
               <div class="link"><a href="{{url('/login')}}">Login</a></div>
               <div class="link"> <a href="/new_student">Register</a></div>
               <div class="link"> <a href="{{'/learning_section'}}">Support</a></div>
               <div class="link"> <a href="{{url('/previous_projects')}}">Examples</a></div>
               <div class="link"> <a href="{{url('/project')}}">Topics</a></div>
           @elseif(Auth::user()->permission == 1)
               <div class="link"> <a href="{{url('/log_out')}}">Logout</a></div>
               <div class="link"> <a href="/new_staff">Register staff</a></div>
               <div class="link"> <a href="{{'/learning_section'}}">Support</a></div>
               <div class="link"> <a href="learning_section/create">Add Support</a></div>

               <div class="link"> <a href="{{url('/project')}}">Topics</a></div>
               <div class="link"> <a href="/new_project">Add Topic</a></div>

               <div class="link"> <a href="{{url('/previous_projects')}}">Examples</a></div>
               <div class="link"> <a href="/new_previous_project">Add Examples</a></div>

           @elseif(Auth::user()->permission ==  3)
               <div class="link"> <a href="{{url('/log_out')}}">Logout</a></div>

               <div class="link"> <a href="{{'/learning_section'}}">Support</a></div>
               <div class="link"> <a href="learning_section/create">Add Support</a></div>

               <div class="link"> <a href="{{url('/project')}}">Topics</a></div>
               <div class="link"> <a href="/new_project">Add Topic</a></div>

               <div class="link"> <a href="{{url('/previous_projects')}}">Examples</a></div>
               <div class="link"> <a href="/new_previous_project">Add Examples</a></div>

           @elseif(Auth::user()->permission == 2)
               <div class="link"> <a href="{{url('/log_out')}}">Logout</a></div>
               <div class="link"> <a href="/new_student">Register</a></div>
               <div class="link"> <a href="{{'/learning_section'}}">Support</a></div>
               <div class="link"> <a href="{{url('/previous_projects')}}">Examples</a></div>
               <div class="link"> <a href="{{url('/project')}}">Topics</a></div>

           @endif

       </div>
            <div class="dropdown col-hidden">
            <button class="dropbtn ">Menu 	&#9660;</button>
            <div class="dropdown-content menu">
            @if(Auth::guest())
            <a href="{{url('/login')}}">login</a>
            <a href="/new_student">Register</a>
            <a href="{{'/learning_section'}}">Support</a>
            <a href="{{url('/previous_projects')}}">Examples</a>
            <a href="{{url('/project')}}">Topics</a>

            @elseif(Auth::user()->permission == 1)
            <a href="{{url('/log_out')}}">Logout</a>
            <a href="/new_staff">Register staff</a>

            <a href="{{'/learning_section'}}">Project support</a>
            <a href="learning_section/create">Create learning section</a>

            <a href="{{url('/project')}}">Current Projects</a>
            <a href="/new_project">New project</a>

            <a href="{{url('/previous_projects')}}">Project Examples</a>
            <a href="/new_previous_project">Add a previous project</a>


            @elseif(Auth::user()->permission == 2)
            <a href="{{'/learning_section'}}">Project support</a>
            <a href="{{url('/previous_projects')}}">Project Examples</a>
            <a href="{{url('/project')}}">Current Projects</a>

            @elseif(Auth::user()->permission == 3)
            <a href="{{url('/log_out')}}">Logout</a>

            <a href="{{'/learning_section'}}">Project support</a>
            <a href="learning_section/create">Create learning section</a>

            <a href="{{url('/project')}}">Current Projects</a>
            <a href="/new_project">New project</a>

            <a href="{{url('/previous_projects')}}">Project Examples</a>
            <a href="/new_previous_project">Add a previous project</a>
            @endif
            </div>
            </div>

     </nav>
</nav>

