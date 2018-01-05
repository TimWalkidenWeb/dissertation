<html><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        html{
            width: 100%;

        }
        .filter{
            padding-left: 1%;
            margin-right: 2%;
            /*border-style: groove;*/
            margin-left: 1%;
            /*border-color: #F0F0BD;*/
            /*background-color: white;*/
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
            border-color: #F0F0BD;
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
            background-color: 	#F0F0DC;
            width: auto;

        }
        .projects{
            background-color: white;
            border-style: groove;
            border-color: #F0F0BD;
            padding-bottom: 5pt;
        }
        .project{
            border-top-style: groove;
            border-top-color: #F0F0BD;
            margin-left: 1%;
            margin-right: 1%;
        }
        .sort{
            margin-left: 1%;
            margin-right: 1%;
        }
        nav {
            padding-left: -2em;
            background-color: white;
            border-bottom-style: groove;
            border-bottom-color: #F0F0BD;
        }
        .header {
            border: 1px solid red;
            padding: 0;
        }
        .row::after {
            content: "";
            clear: both;
            display: table;
        }
        [class*="col-"] {
            float: left;

        }
        @media only screen and (min-width: 768px){
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
            .col-hidden{
                display:none;
            }

            h1{
                margin-left: 14%;
                font-size: 25px;
            }
            h3{
                font-size: 18px;
                padding-bottom: 7px;
                border-bottom-width: 2px;
                border-bottom-style: groove;
                border-color: #F0F0BD;
            }

        }
        @media only screen and (max-width: 767px) {
            .small-hidden{
                display:none;
            }
            .small-1 {width: 8.33%;}
            .small-2 {width: 16.66%;}
            .small-3 {width: 25%;}
            .small-4 {width: 33.33%;}
            .small-5 {width: 41.66%;}
            .small-6 {width: 50%;}
            .small-7 {width: 58.33%;}
            .small-8 {width: 66.66%;}
            .small-9 {width: 75%;}
            .small-10 {width: 83.33%;}
            .small-11 {width: 91.66%;}
            .small-12 {width: 100%;}

            i {
                border: solid black;
                border-width: 0 3px 3px 0;
                display: inline-block;
                padding: 3px;
                margin-left: 5pt;
            }

            .down {
                transform: rotate(45deg);
                -webkit-transform: rotate(45deg);
            }

            h1{
                /*margin-left: 14%;*/
                font-size: 18px;
                text-align: center;
            }
            h3{
                font-size: 18px;
                padding-bottom: 7px;
                border-bottom-width: 2px;
                border-bottom-style: groove;
                border-color: #F0F0BD;
            }
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

        .option {
            font-size: 13px;
            padding-left: 3%;
            padding-top: 5%;
        }
        .container {
            background-color: white;
            position: relative;
            width: 75%;
            padding: 5%;
            margin-left: 25%;
            margin-bottom: 10%;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .image {
            display: block;
            width: 100%;
            height: 25%;

        }
        button{
            margin-top: 6%;
        }
        .overlay {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            height: 100%;
            width: 100%;
            opacity: 0;
            transition: .5s ease;
            background-color:lightgray ;
        }

        .container:hover .overlay {
            opacity: 1;
        }

        .text {
            color: black;
            font-size: 18px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
        }
        /* Navbar container */
        .navbar {
            overflow: hidden;
            font-size: 15px;
            padding-bottom: 7px;
            border-bottom-width: 2px;
            border-bottom-style: groove;
            border-color: #F0F0BD;

        }

        /* Links inside the navbar */
        .navbar a {
            float: right;
            font-size: 16px;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .filt {
            overflow: hidden;
            font-size: 15px;
            /*padding-bottom: 7px;*/
            border-bottom-width: 2px;
            border-bottom-style: groove;
            border-color: #F0F0BD;


        }

        .filt a {
            float: right;
            font-size: 16px;
            color: black;
            text-align: center;
            padding-bottom: 25%;
            /*padding: 14px 16px;*/
            text-decoration: none;

        }

        /* The dropdown container */
        .dropdown {
            float: left;
            overflow: hidden;
        }

        /* Dropdown button */
        .dropdown .dropbtn {
            text-align: center;
            font-size: 16px;
            border: none;
            outline: none;
            color: black;
            padding-top: 20%;
            background-color: inherit;
            padding-bottom: 3%;
        }


        /* Add a red background color to navbar links on hover */
        .navbar a:hover, .dropdown:hover .dropbtn {
            background-color: lightgray;
        }

        /* Dropdown content (hidden by default) */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            margin-left: -28%;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            padding-right: 2%;
        }

        /* Links inside the dropdown */
        .dropdown-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        /* Add a grey background color to dropdown links on hover */
        .dropdown-content a:hover {
            background-color: #ddd;
        }

        /* Show the dropdown menu on hover */
        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>
<body>
<nav>
    <div class="row">
        <div class="col-3 small-hidden">
            <img src="{{ asset('storage/logo.jpeg') }}" alt="image1" style=" height: 100pt;">
        </div>
        <div class="col-9 small-12">
            <div class="row">
                <h1 class="col-8 small-12">Edge Hill University Final Year Projects</h1>
                <div class="col-1 small-hidden login">SignUp</div>
                <div class="col-1 small-hidden login">Login</div>
            </div>
            <div class="row nav small-hidden">
                <div class="col-4">Project support</div>
                <div class="col-4">Project Example's</div>
                <div class="col-4">Current Project's</div>
            </div>
        </div>
    </div>
</nav>
<article>
    <div class="row">
        <h3 class="col-12 small-9" style="padding-left: 3%; text-align: center;">Current Projects</h3>
        <div class="navbar col-hidden small-3">
            <div class="dropdown">
                <button class="dropbtn">Menu
                    <i class="arrow down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="#">Support</a>
                    <a href="#">Current Project's</a>
                    <a href="#">Project Example</a>
                    <a href="#">login</a>
                    <a href="#">SignUp</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <h3 class=" col-hidden small-5" style="padding-left: 3%;">Filiter:</h3>
        <div class="filt col-hidden small-7">
        <div class="dropdown small-6">
            <button class="dropbtn">Module
                <i class="arrow down"></i>
            </button>
            <div class="dropdown-content">
                <ul>
                    <li> Computer Science </li>
                    <li> Computer Science and Mathematics</li>
                    <li> Computing</li>
                    <li> Games Programming</li>
                    <li> Networking, Security and Forensics</li>
                    <li> Data Science</li>
                    <li>Software Engineering</li>
                    <li> Web Design and Development</li>
                </ul>
            </div>
        </div>
            <div class="dropdown small-6">
                <button class="dropbtn">Tutor
                    <i class="arrow down"></i>
                </button>
                <div class="dropdown-content">
                    <ul>
                        <li>Chitra Balakrishna</li>
                        <li>D.Walsh</li>
                        <li>Ardhendu Behera</li>
                        <li>Peter Matthew</li>
                        <li>Mark Liptrott</li>
                        <li>Ella Pereira</li>
                    </ul>
                </div>
            </div>
        </div>












    <div class="row">
        <div class="col-3 filter small-hidden">
            <h3>Pathways</h3>
            <ul>
                <li> Computer Science </li>
                <li> Computer Science and Mathematics</li>
                <li> Computing</li>
                <li> Games Programming</li>
                <li> Networking, Security and Forensics</li>
                <li> Data Science</li>
                <li>Software Engineering</li>
                <li> Web Design and Development</li>
            </ul>

            <h3>Tutor</h3>
            <ul>
                <li>Chitra Balakrishna</li>
                <li>D.Walsh</li>
                <li>Ardhendu Behera</li>
                <li>Peter Matthew</li>
                <li>Mark Liptrott</li>
                <li>Ella Pereira</li>
            </ul>
        </div>
        <div class="col-8 small-12">
        <div class="row">
            <div class="col-4 small-10">
                <div class="container">
                    <img src="{{ asset('storage/mummy.jpg') }}" alt="Avatar" class="image">
                    <div class="overlay">
                        <div class="text">Educational Museum game
                            <button>Details -></button>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-4 small-10">
                <div class="container">
                    <img src="{{ asset('storage/129054.jpg') }}" alt="Avatar" class="image">
                    <div class="overlay">
                        <div class="text">Ethics management software</div>
                    </div>
                </div>
            </div>

            <div class="col-4 small-10">
                <div class="container">
                    <img src="{{ asset('storage/tech_hub.jpeg') }}" alt="Avatar" class="image">
                    <div class="overlay">
                        <div class="text">Augmented Reality: the Tech Hub
                            <button>Details -></button></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">

        <div class="col-4 small-10">
            <div class="container">
                <img src="{{ asset('storage/virtual.jpeg') }}" alt="Avatar" class="image">
                <div class="overlay">
                    <div class="text">Can a crime scene be replicated within Virtual Reality?

                    <button>Details -></button></div>
                </div>
            </div>
        </div>

            <div class="col-4 small-10">
                <div class="container">
                    <img src="{{ asset('storage/129054.jpg') }}" alt="Avatar" class="image">
                    <div class="overlay">
                        <div class="text">Ethics management software
                            <button>Details -></button></div>
                    </div>
                </div>
            </div>

            <div class="col-4 small-10">
                <div class="container">
                    <img src="{{ asset('storage/mummy.jpg') }}" alt="Avatar" class="image">
                    <div class="overlay">
                        <div class="text">Educational Museum game
                            <button>Details -></button>
                        </div>
                    </div>

                </div>
        </div>
    </div>


</article>
<footer>Created by Timothy Walkiden</footer>

</body></html>