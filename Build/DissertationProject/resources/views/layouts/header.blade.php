<nav>
    <div class="row">
        <div class="col-2 small-hidden">
            <img src="{{ asset('storage/logo2.jpeg') }}" alt="image1" class="logo">
        </div>
        <div class="col-10 small-12">
            <div class="row">
                <h1 class="col-8 small-9">Edge Hill University Final Year Projects</h1>
                @if(Auth::guest())
                    <div class="col-1 small-hidden login"><a href="{{url('/login')}}">login</a></div>
                @elseif(Auth::user()->permission == 2)
                    <div class="col-2 small-hidden login"><a href="{{url('/log_out')}}">Logout</a></div>
                    <div class="col-2 small-hidden login"><a href="/new_staff">Add new staff</a></div>
                @elseif(Auth::user()->permission == 1)
                    <div class="col-1 small-hidden login"><a href="{{url('/log_out')}}">Logout</a></div>
                @endif

                <div class="navbar col-hidden small-3">
                    <div class="dropdown">
                        <button class="dropbtn">Menu 	&#9660;
                        </button>
                        <div class="dropdown-content menu">
                            @if(Auth::guest())
                                <a href="{{url('/login')}}">login</a>
                                <a href="{{'/learning_material'}}">Project support</a>
                                <a href="{{url('/previous_projects')}}">Project Example's</a>
                                <a href="{{url('/project')}}">Current Project</a>
                            @elseif(Auth::user()->permission == 2)
                                <a href="{{url('/log_out')}}">Logout</a>
                                <a href="/new_staff">Add new staff</a>
                                <a href="{{'/learning_material'}}">Project support</a>                                   <a href="{{url('/previous_projects')}}">Project Example's</a>
                                <a href="{{url('/project')}}">Current Project</a>
                                <a href="/new_previous_project">Add a previous project</a>
                                <a href="/new_project">New project</a>
                            @elseif(Auth::user()->permission == 1)
                                <a href="{{url('/log_out')}}">Logout</a>
                                <a href="{{'/learning_material'}}">Project support</a>                                   <a href="{{url('/previous_projects')}}">Project Example's</a>
                                <a href="{{url('/project')}}">Current Project</a>
                                <a href="/new_previous_project">Add a previous project</a>
                                <a href="/new_project">New project</a>
                             @endif
                        </div>
                    </div>
                </div>
            </div>

                @if(Auth::guest())
                    <div class="row nav small-hidden">
                        <div class="col-4"><a href="{{'/learning_material'}}">Project support</a></div>
                        <div class="col-4"><a href="{{url('/previous_projects')}}">Project Example's</a></div>
                        <div class="col-4"><a href="{{url('/project')}}">Current Project</a></div>
                    </div>
                    {{--@if(Auth::guest())--}}
                @elseif(Auth::user()->permission == 1 or 2)
                    <div class="row nav small-hidden">
                        <div class="col-2"><a href="{{'/learning_material'}}">Project support</a></div>
                        <div class="col-2"><a href="{{url('/previous_projects')}}">Project Example's</a></div>
                        <div class="col-2"><a href="{{url('/project')}}">Current Project</a></div>
                        <div class="col-2"><a href="/new_previous_project">Add a previous project</a></div>
                        <div class="col-2"><a href="/new_project">New project</a></div>
                        @endif
            </div>


        </div>
        </div>

</nav>

