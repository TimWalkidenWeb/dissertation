
<div class="navbar-fixed-top">
    <ul class="nav">
        <li><a href="/welcome">Home</a></li>
        <li><a href="/learning_material">learning material</a></li>
        <li><a href="/previous_projects">previous projects</a></li>
        <li><a href="/project">View current project</a></li>
    @if(Auth::guest())
        <a href="{{url('/login')}}">login</a>

    @else
     <li><a href="/new_previous_project">Add a previous project</a></li>

     <li><a href="/new_project">New project</a></li>
     <li><a href="{{url('/logout')}}">Logout</a></li>
     <li><a href="/new_staff">Register</a></li>

     @endif
    </ul>

</div>
