<html><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        html{
            width: 100%;

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
</head>
<body>
<nav>
    <div class="row">
        <div class="col-3">
            <img src="{{ asset('storage/logo.jpeg') }}" alt="image1" style=" height: 100pt;">
        </div>
        <div class="col-9">
            <div class="row">
                <h1 class="col-8">Edge Hill University Final Year Projects</h1>
                <div class="col-1 login">SignUp</div>
                <div class="col-1 login">Login</div>
            </div>
            <div class="row nav">
                <div class="col-4">Project support</div>
                <div class="col-4">Project Example's</div>
                <div class="col-4">Current Project's</div>
            </div>

        </div>
    </div>
</nav>
<article>
    <div class="row">
        <h2 class="col-12 " style="padding-left: 1% ">Web Design &amp; Development Projects</h2>
    </div>
    <div class="row ">
        <div class="col-4 filter">
            <h3>Pathways</h3>
            <ul>
                <li> BSc (Hons) Computer Science </li>
                <li> BSc (Hons) Computer Science and Mathematics</li>
                <li> BSc (Hons) Computing</li>
                <li>BSc (Hons) Computing (Games Programming)</li>
                <li> BSc (Hons) Computing (Networking, Security and Forensics)</li>
                <li>BSc (Hons) Data Science</li>
                <li>BSc (Hons) Information Technology Management for Business</li>
                <li>BSc (Hons) Software Engineering</li>
                <li>BSc (Hons) Web Design and Development</li>
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
        <div class="col-7 projects">
            <div class="row sort">
                <h4>Sort by:

                    <input style="margin-left: 1%" type="dropdown" id="fname" name="sort" placeholder="sort" >
                </h4>
            </div>
            <div class="row project">
                <h4>Ethics Management Software</h4>
                <p class="advert_text">
                    Experiments that involve human or animal participants require ethics checking and clearance. This is
                    currently achieved using word documents emailed to various people in the ethics approval process. The
                    goal of this project is to develop a web-based system that manages the whole [more...]
                    </p>
                <h6 class="col-6">Lecturer: D.Walsh</h6>
                <h6 class="col-6"> Pathways:BSc (Hons) Web Design and Development</h6>
            </div>
            <div class="row project">
                <h4>Accessibility Simulator</h4>
                <p class="advert_text"> Accessibility of website is becoming more and more important, not only because
                    it is a legal requirements. However, currently accessibility testing tools focus on reporting errors,
                    rather than simulating the disabled user experience. As a result  it is really difficult for the
                    developers ... [more]</p>
                <h6 class="col-6">Lecturer: D.Walsh</h6>
                <h6 class="col-6"> Pathways:BSc (Hons) Web Design and Development</h6>
            </div>
        </div>
    </div>
    <footer>Created by Timothy Walkiden</footer>
</article>


</body></html>