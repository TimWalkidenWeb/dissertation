<html><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
    <style>
        body{
            margin: 0;
            padding: 0;
        }
        .logo{
            height: 100px;
            float: left;
        }
        h2{
            float: left;
            font-size: 20px;
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            margin-left: 10px;
        }
        nav{
            height:100px;
            background-color: #d0afee;
        }
        .login{
            float: right;
            margin-top: 20px;
            margin-left: 10px;
            margin-right: 10px;
            font-size: 20px;
            font-weight: lighter;
            text-decoration: none;
        }
        a{
            text-decoration: none;
            color: black;
            font-family: 'Playfair Display', serif;
            font-weight: 700;
        }
        .banner{
            height: 340px;
            background-color: #d0afee;
            text-align: center;
            padding-top: 6%;
            padding-right: 6%;
            /* padding-bottom: 6%; */
            padding-left: 6%;
        }
        h1{
            margin-top: 0;
            text-align: center;
            color: black;
            font-size: 50px;
            font-family: 'Playfair Display', serif;
        }
        h3{
            margin-top: 0;
            text-align: center;
            color: black;
            font-size: 30px;
            font-family: 'Playfair Display', serif;
        }
        button{
            font-size: x-large;
            padding: 10px;
            background: #33ef11;
            border-color: #33ef11;
            color: white;
        }
        .sections{
            padding-top: 6%;
            height: 400px;
            margin-right: 6%;
            margin-left: 6%
        }
        .section{

            float: left;
            width: 33%;
            text-align: center;
        }
        .start{
            /*margin-left: 20%;*/
        }
        .display{
            height: 150px;
        }
        .display_heading{
            width: 100%;
            float: left;
            margin-top: 5%;
        }
        .inner_section{
            width: 100%;
        }

    </style>
</head>
    <nav>

        <h2>Project Bazaar</h2>
        <div class="col-1 small-hidden login"><a href="{{url('/login')}}">Login</a></div>
        <div class="col-1 small-hidden login"> <a href="/new_student">Register</a></div>
        <div class="col-1 small-hidden login"> <a href="{{'/learning_material'}}">Support</a></div>
        <div class="col-1 small-hidden login"> <a href="{{url('/previous_projects')}}">Examples</a></div>
        <div class="col-1 small-hidden login"> <a href="{{url('/project')}}">Topics</a></div>
    </nav>

    <div class="banner">
        <h1> Need a Project Topic ?</h1>
        <h3>We will find you one</h3>
        <button class=find"> <a href="{{url('/project')}}">View Topics</a></button>
    </div>
    <div class="sections">
            <h3>Why use this website ?</h3>
        <div class="inner_section">
            <div class="section">
                <img src="{{ asset('storage/images/support.png') }}" alt="image1" class="display">
                <h3 class="display_heading"><a href="{{'/learning_material'}}">Support on your project</a></h3>
            </div>
            <div class="section">
                <img src="{{ asset('storage/images/idea.png') }}" alt="image1" class="display">
                <h3 class="display_heading"><a href="{{url('/project')}}">Topic suggestions</a></h3>
                <p></p>
            </div>

            <div class="section end">
                <img src="{{ asset('storage/images/examples.png') }}" alt="image1" class="display">
                <h3 class="display_heading"><a href="{{url('/previous_projects')}}">View examples of previous work</a></h3>
            </div>
        </div>


    </div>

<body>

</body>

</html>