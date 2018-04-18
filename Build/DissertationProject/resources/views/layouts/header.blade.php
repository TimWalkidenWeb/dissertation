<nav>
    {{--Insert the logo into the nav bar at the top of the page--}}
    <img src="{{ asset('storage/images/logo_2.png') }}" alt="image1" class="logo">
    {{--Nav bar for the desktop version of the website--}}
    <div class="inner_nav small-hidden">
    {{--the following navigation links available to guest of the website--}}
        @if(Auth::guest())
            <div class="link"><a href="{{url('/login')}}">Login</a></div>
            <div class="link"> <a href="/new_student">Register</a></div>
            <div class="link"> <a href="{{'/learning_section'}}">Support</a></div>
            <div class="link"> <a href="{{url('/previous_projects')}}">Examples</a></div>
            <div class="link"> <a href="{{url('/project')}}">Topics</a></div>
         {{--the following navigational link are available to programme leaders--}}
        @elseif(Auth::user()->permission == 1)
            <div class="link"> <a href="{{url('/log_out')}}">Logout</a></div>
            <div class="link"> <a href="/new_staff">Register staff</a></div>
            <div class="link"> <a href="{{'/learning_section'}}">Support</a></div>
            <div class="link"> <a href="learning_section/create">Add Support</a></div>
            <div class="link"> <a href="{{url('/project')}}">Topics</a></div>
            <div class="link"> <a href="/new_project">Add Topic</a></div>
            <div class="link"> <a href="{{url('/previous_projects')}}">Examples</a></div>
            <div class="link"> <a href="/new_previous_project">Add Examples</a></div>
        {{--the following navigational link are available to lecturers--}}
        @elseif(Auth::user()->permission ==  3)
            <div class="link"> <a href="{{url('/log_out')}}">Logout</a></div>
            <div class="link"> <a href="{{'/learning_section'}}">Support</a></div>
            <div class="link"> <a href="learning_section/create">Add Support</a></div>
            <div class="link"> <a href="{{url('/project')}}">Topics</a></div>
            <div class="link"> <a href="/new_project">Add Topic</a></div>
            <div class="link"> <a href="{{url('/previous_projects')}}">Examples</a></div>
            <div class="link"> <a href="/new_previous_project">Add Examples</a></div>
        {{--the following navigational link are available to students--}}
        @elseif(Auth::user()->permission == 2)
            <div class="link"> <a href="{{url('/log_out')}}">Logout</a></div>
            <div class="link"> <a href="/new_student">Register</a></div>
            <div class="link"> <a href="{{'/learning_section'}}">Support</a></div>
            <div class="link"> <a href="{{url('/previous_projects')}}">Examples</a></div>
            <div class="link"> <a href="{{url('/project')}}">Topics</a></div>
        @endif
   </div>
   {{--Nav bar for mobile devices--}}
   <div class="dropdown col-hidden">
       <button class="dropbtn ">Menu 	&#9660;</button>
       <div class="dropdown-content menu">
       {{--the following navigational link are available to guests--}}
           @if(Auth::guest())
               <a href="{{url('/login')}}">login</a>
               <a href="/new_student">Register</a>
               <a href="{{'/learning_section'}}">Support</a>
               <a href="{{url('/previous_projects')}}">Examples</a>
               <a href="{{url('/project')}}">Topics</a>
       {{--the following navigational link are available to programme leaders--}}
           @elseif(Auth::user()->permission == 1)
               <a href="{{url('/log_out')}}">Logout</a>
               <a href="/new_staff">Register staff</a>
               <a href="{{'/learning_section'}}">Project support</a>
               <a href="learning_section/create">Create learning section</a>
               <a href="{{url('/project')}}">Current Projects</a>
               <a href="/new_project">New project</a>
               <a href="{{url('/previous_projects')}}">Project Examples</a>
               <a href="/new_previous_project">Add a previous project</a>
      {{--the following navigational link are available to students--}}
           @elseif(Auth::user()->permission == 2)
               <a href="{{'/learning_section'}}">Project support</a>
               <a href="{{url('/previous_projects')}}">Project Examples</a>
               <a href="{{url('/project')}}">Current Projects</a>
               <a href="{{url('/log_out')}}">Logout</a>
       {{--the following navigational link are available to lecturers--}}
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

