<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <link href="./vender/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="./vender/bootstrap/css/bootstrap-grid.min.css" rel="stylesheet">
    <link href="./vender/bootstrap/css/bootstrap-reboot.min.css" rel="stylesheet">
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <!--Start Header Section-->
    <div class="header" id="topheader">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <div class="container p-2 text-uppercase">
                <a class="navbar-brand text-white font-weight-bold" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about-section">About Me</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#education">Education</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <section class="header-section">
            <div class="center-div">
                <h1 class="font-weight-bold">I am Full Stack developer</h1>
                <p>Maiores, doloribus! Facere possimus veritatis </p>
                <div class="header-buttons">
                    <a href="#about-section">About Me</a>
                    <a href="">Contact</a>
                </div>
            </div>

        </section>
    </div>
    <!--End Header Section-->

    <!--Start About Section-->
    <section class="about-sec" id="about-section">
        <div class="container">
            <h1>ABOUT ME</h1>
            <hr>
            <div class="row">
                <div class="col-lg-6 col-sm-12 col-12 extra-div">
                    <h2>I AM PATHUM SANDEEPA.</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur orem ipsum dolor sit, amet consectetur orem ipsum dolor sit, amet consectetur adipisicing elit. Quis non suscipit natus placeat ducimus quae sed ut facere repudiandae rem adipisicing elit. Quis
                        non suscipit natus placeat ducimus quae sed ut facere repudiandae!</p>
                </div>
                <div class="col-lg-6 col-sm-12 col-12 extra-div">
                    <img src="./img/myphoto.jpg" alt="">
                    <div class="about-sec-button mt-5">
                        <a href=""><span><i class="fa fa-file mr-2" aria-hidden="true"></i></span>Downloard CV</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End About Section-->

    <!--Start Education Section-->
    <section class="education-Sec" id="education">
        <div class="container headings text-center">
            <h1>Education and Skill</h1>
            <hr class="mb-5">
        </div>
        <div class="education ">
            <div class="p-5 container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-10 offset-1 offset-lg-0 div-1">
                        <div class="name my-3">
                            <h2>HTML</h2>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped" style="width:90%">90%</div>
                            </div>
                        </div>
                        <div class="name my-3">
                            <h2>CSS</h2>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-success" style="width:80%">80%</div>
                            </div>
                        </div>
                        <div class="name my-3">
                            <h2>JAVASCRIPT</h2>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-warning" style="width:60%">60%</div>
                            </div>
                        </div>
                        <div class="name my-3">
                            <h2>BOOTSTRAP</h2>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-dark" style="width:70%">70%</div>
                            </div>
                        </div>
                        <div class="name my-3">
                            <h2>JQUERY</h2>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-danger" style="width:50%">50%</div>
                            </div>
                        </div>


                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12 div-2 mt-5">
                        <h1>Sri Lanka Institute of Information Technology </h1>
                        <hr>
                        <div>
                            <p>
                                <span class="text-danger float-left ml-3">2018 - Present</span><br> <span><i class="fas fa-asterisk"></i></span> I am currently following a degree program in Software Engineering at SLIIT - Malabe
                            </p>
                        </div>
                        <div class="lanuguage float-left ml-3">
                            <h2>Language</h2>
                            <p><span><i class="fas fa-asterisk"></i></span>Sinhala</p>
                            <p><span><i class="fas fa-asterisk"></i></span>English</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!--End Education Section-->

    <!--Start Project Section-->
    <section class="project mt-5">
        <div class="container d-flex justify-content-around align-items-center text-center">
            <div>
                <h1 class="count">1500</h1>
                <p>CMS Work</p>
            </div>
            <div>
                <h1 class="count">1500</h1>
                <p>CMS Work</p>
            </div>
            <div>
                <h1 class="count">1500</h1>
                <p>CMS Work</p>
            </div>
            <div>
                <h1 class="count">1500</h1>
                <p>CMS Work</p>
            </div>
        </div>
    </section>
    <!--End Project Section-->

    <a href="" class="scrollUp">
        <i class="fa fa-chevron-up"></i>
    </a>

    <!-- <script src="http://cdnjs.cloudflare.com/ajaxlibs/jquery/3.4.1/jquery.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./vender/jquery/jquery.min.js "></script>
    <script src="./vender/bootstrap/js/bootstrap.js "></script>
    <script src="./vender/bootstrap/js/bootstrap.bundle.min.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha512-CEiA+78TpP9KAIPzqBvxUv8hy41jyI3f2uHi7DGp/Y/Ka973qgSdybNegWFciqh6GrN2UePx2KkflnQUbUhNIA==" crossorigin="anonymous"></script>
    <script src="./vender/jquery/jquery.counterup.js"></script>
    <!--Back to top button-->
    <script src="js/index.js"></script>

</body>

</html>