<style>
    html{
        width: 100%;

    }
    a{
        color: black;
        cursor: auto;
        text-decoration: none;
    }

    .filter{
        padding-left: 1%;
        margin-right: 2%;
        border-style: groove;
        margin-left: 1%;
        border-color: black;
        background-color: white;
    }
    * {
        box-sizing: border-box;

    }
    footer{
        padding-left: 2%;
        bottom: 0;
        background-color: black;
        width: 100%;
        padding-top: 5pt;
        color: white;
        margin-top: 1%;
    }
    h3{
        font-size: 18px;
        padding-bottom: 7px;
        border-bottom-width: 2px;
        border-bottom-style: groove;
        border-color: black;
    }
    li {
        font-size: 16px;
    }
    body {
        background-color: white;
        font-family: sans-serif;
        width: 100%;
        margin: 0;
    }
    article{
        background-color: 	#F0F0F0;

    }
    .projects{
        background-color: white;
        border-style: groove;
        border-color: black;
        padding-bottom: 5pt;
    }
    .project{
        border-top-style: groove;
        border-top-color: black;
        margin-left: 1%;
        margin-right: 1%;
    }
    .sort {
        margin-left: 1%;
        margin-right: 1%;
    }
    nav {
        padding-left: -2em;
        background-color: white;
        border-bottom-style: groove;
        border-bottom-color: black;
    }
    .header {
        border: 1px solid red;
        padding: 0px;
    }
    .row::after {
        content: "";
        clear: both;
        display: table;
    }
    [class*="col-"] {
        float: left;

    }
    .col-1 {width: 8.33%;}
    .col-2 {width: 16.66%;}
    .col-3 {width: 25%;}
    .col-4 {width: 33.33%;}
    .col-5 {width: 41.66%;}
    .col-6 {width: 50%;}
    .col-7 {width: 58.33%;}
    .col-8 {width: 66.66%;}
    .col-9 {width: 75%;}
    .col-10 {width: 83.33%;}
    .col-11 {width: 91.66%;}
    .col-12 {width: 100%;}

    h1{
        margin-left: 14%;
        font-size: 25px;
    }

    .login{
        float: right;
        margin-left: 0;
        font-size: 16px;
        margin-top:1.5%;
    }
    .nav{
        font-size: 17px;
        padding-top: 20px;
    }
    h4{
        font-size: 16px;
        padding-left: 1%;
    }
    .advert_text{
        font-size: 14px;
        padding-left: 1%;
        padding-right: 1%;
    }
    h6{
        font-size: 13px;
        padding-left: 1%;
    }
</style>
<nav>
    <div class="row">
        <div class="col-3">
            <img src="{{ asset('storage/logo.jpeg') }}" alt="image1" style=" height: 100pt;">
        </div>
        <div class="col-9">
            <div class="row">
                <h1 class="col-7">Edge Hill University Final Year Projects</h1>

                @if(Auth::guest())
                    <div class="col-1 login"><a href="{{url('/login')}}">login</a></div>
                @elseif(Auth::user()->permission == 2)
                    <div class="col-1 login"><a href="{{url('/logout')}}">Logout</a></div>
                    <div class="col-2 login"><a href="/new_staff">Add new staff</a></div>
                @elseif(Auth::user()->permission == 1)
                    <div class="col-1 login"><a href="{{url('/logout')}}">Logout</a></div>
                @endif
            </div>
            <div class="row nav">
                <div class="col-2"><a href="{{'/learning_material'}}">Project support</a></div>
                <div class="col-2"><a href="{{url('/previous_projects')}}">Project Example's</a></div>
                <div class="col-2"><a href="{{url('/project')}}">Current Project</a></div>

                {{--@if(Auth::guest())--}}
                @if(Auth::user()->permission == 1 or 2)
                    <div class="col-2"><a href="/new_previous_project">Add a previous project</a></div>
                    <div class="col-2"><a href="/new_project">New project</a></div>
                @endif
            </div>

        </div>
    </div>
</nav>