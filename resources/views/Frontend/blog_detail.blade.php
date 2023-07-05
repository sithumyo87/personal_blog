<!DOCTYPE html>
<html lang="en" class="no-js">

<!-- Mirrored from lmpixels.com/demo/breezycv/dark/2/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Nov 2021 17:30:11 GMT -->
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BreezyCV - Resume / CV / vCard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="BreezyCV - Resume / CV / vCard Template" />
    <meta name="keywords" content="vcard, resposnive, retina, resume, jquery, css3, bootstrap, Material CV, portfolio" />
    <meta name="author" content="lmpixels" />
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="../css/reset.css" type="text/css">
    <link rel="stylesheet" href="../css/bootstrap-grid.min.css" type="text/css">
    <link rel="stylesheet" href="../css/animations.css" type="text/css">
    <link rel="stylesheet" href="../css/perfect-scrollbar.css" type="text/css">
    <link rel="stylesheet" href="../css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="../css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="../css/main.css" type="text/css">
    <!-- Font Awesome -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
        rel="stylesheet"
    />
    <!-- MDB -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.0/mdb.min.css"
        rel="stylesheet"
    />

    <script src="../js/modernizr.custom.js"></script>
</head>

<body>
<!-- Animated Background -->
<div class="lm-animated-bg" style="background-image: url(../img/main_bg.png);"></div>
<!-- /Animated Background -->

<!-- Loading animation -->
<div class="preloader">
    <div class="preloader-animation">
        <div class="preloader-spinner">
        </div>
    </div>
</div>
<!-- /Loading animation -->

<div class="page">
    <div class="page-content">

        <header id="site_header" class="header mobile-menu-hide">
            <div class="header-content">
                <div class="header-photo">
                    <img src="../img/profile.jpg" alt="Alex Smith">
                </div>
                <div class="header-titles">
                    <h2>Si Thu Myo</h2>
                    <h4>Web Developer</h4>
                </div>
            </div>

            <ul class="main-menu">
                <!-- <li class="active">
                    <a href="../#home" class="nav-anim">
                        <span class="menu-icon lnr lnr-home"></span>
                        <span class="link-text">Home</span>
                    </a>
                </li>
                <li>
                    <a href="../#about-me" class="nav-anim">
                        <span class="menu-icon lnr lnr-user"></span>
                        <span class="link-text">About Me</span>
                    </a>
                </li>
                <li>
                    <a href="../#resume" class="nav-anim">
                        <span class="menu-icon lnr lnr-graduation-hat"></span>
                        <span class="link-text">Resume</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('index')}}" class="nav-anim">
                        <span class="menu-icon lnr lnr-briefcase"></span>
                        <span class="link-text">Portfolio</span>
                    </a>
                </li>
                <li>
                    <a href="#blog-details" class="nav-anim">
                        <span class="menu-icon lnr lnr-book"></span>
                        <span class="link-text">Blog</span>
                    </a>
                </li>
                <li>
                    <a href="../#contact" class="nav-anim">
                        <span class="menu-icon lnr lnr-envelope " ></span>
                        <span class="link-text">Contact</span>
                    </a>
                </li> -->
                <li>
                    <a href="#blog-details" class="nav-anim">
                        <span class="menu-icon lnr lnr-book"></span>
                        <span class="link-text">Blog</span>
                    </a>
                </li>
            </ul>

            <div class="social-links">
                <ul>
                    <li><a href="https://www.linkedin.com/in/si-thu-myo-11b940211/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="https://www.facebook.com/profile.php?id=100010587223347" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://github.com/sithumyo87" target="_blank"><i class="fab fa-github"></i></a></li>
                </ul>
            </div>

            <div class="header-buttons">
                <a href="img/cvpdf.pdf" target="_blank" class="btn btn-primary" download>Download CV</a>
            </div>

            <div class="copyrights">Devloped By Dev Seeker</div>
        </header>

        <!-- Mobile Navigation -->
        <div class="menu-toggle">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <!-- End Mobile Navigation -->

        <!-- Arrows Nav -->
        <div class="lmpixels-arrows-nav">
            <div class="lmpixels-arrow-right"><i class="lnr lnr-chevron-right"></i></div>
            <div class="lmpixels-arrow-left"><i class="lnr lnr-chevron-left"></i></div>
        </div>
        <!-- End Arrows Nav -->

        <div class="content-area">
            <div class="animated-sections">

               <!-- blog Detail -->
                <section data-id="blog-details" class="animated-section">
                    <div class="page-title">
                        <h2>Blog</h2>
                    </div>
                    <div class="btn btn-primary" ><a href="/#blog">BACK</a></div>
                    <div class="section-content">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <div class="blog-masonry two-columns clearfix">
                                    <div>
                                        <img
                                            src="{{Storage::url($blog->image)}}"
                                            class="img-fluid hover-shadow"
                                            alt=""
                                        />
                                    </div>
                                    <p class="pt-3" style="color: #0ba376"><i class="fas fa-user-edit"></i>Name - <span style="color: #0ba376">Si Thu Myo</span> </p>
                                    <p class="" style="color: #0ba376"><i class="fas fa-book"></i>Category - <span style="color: #0ba376">{{$blog->category->title}}</span> </p>
                                    <p class="" style="color: #0ba376"><i class="fas fa-clock"></i>Category - <span style="color: #0ba376">21 Nov 2021</span> </p>
                                    <p class="text-light">{{$blog->description}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- End blog Detail -->

            
            </div>
        </div>

    </div>
</div>

<script data-cfasync="false" src="../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="../js/jquery-2.1.3.min.js"></script>
<script src="../js/modernizr.custom.js"></script>
<script src="../js/animating.js"></script>

<script src="../js/imagesloaded.pkgd.min.js"></script>
<script src='../../../../../www.google.com/recaptcha/api.js'></script>

<script src='../js/perfect-scrollbar.min.js'></script>
<script src='../js/jquery.shuffle.min.js'></script>
<script src='../js/masonry.pkgd.min.js'></script>
<script src='../js/owl.carousel.min.js'></script>
<script src="../js/jquery.magnific-popup.min.js"></script>

<script src="../js/validator.js"></script>
<script src="../js/main.js"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v64f9daad31f64f81be21cbef6184a5e31634941392597" integrity="sha512-gV/bogrUTVP2N3IzTDKzgP0Js1gg4fbwtYB6ftgLbKQu/V8yH2+lrKCfKHelh4SO3DPzKj4/glTO+tNJGDnb0A==" data-cf-beacon='{"rayId":"6b2c1fb4e8d64601","version":"2021.11.0","r":1,"token":"94b99c0576dc45bf9d669fb5e9256829","si":100}' crossorigin="anonymous"></script>
</body>
<!-- MDB -->
<script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.0/mdb.min.js"
></script>

<!-- Mirrored from lmpixels.com/demo/breezycv/dark/2/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Nov 2021 17:30:27 GMT -->
</html>
