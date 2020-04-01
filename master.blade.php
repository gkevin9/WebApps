<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Nascita</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="storage/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="storage/css/bootstrap.min.css">
    <link rel="stylesheet" href="storage/css/owl.carousel.min.css">
    <link rel="stylesheet" href="storage/css/magnific-popup.css">
    <link rel="stylesheet" href="storage/css/font-awesome.min.css">
    <link rel="stylesheet" href="storage/css/themify-icons.css">
    <link rel="stylesheet" href="storage/css/nice-select.css">
    <link rel="stylesheet" href="storage/css/flaticon.css">
    <link rel="stylesheet" href="storage/css/animate.css">
    <link rel="stylesheet" href="storage/css/slicknav.css">
    <link rel="stylesheet" href="storage/css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-5 col-lg-5">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        @yield('class')
                                        <!-- <li><a class="@yield('homeClass')" href="/">home</a></li>
                                        <li><a href="/menu">Menu</a></li>
                                        <li><a href="/about">About</a></li>
                                        <li><a href="#">blog <i class="ti-angle-down"></i></a> -->
                                            <!-- <ul class="submenu">
                                                <li><a href="blog.html">blog</a></li>
                                                <li><a href="single-blog.html">single-blog</a></li>
                                            </ul> -->
                                        <!-- <li><a href="#">Pages <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="elements.html">elements</a></li>
                                            </ul>
                                        </li> -->
                                        <li><a href="/contact">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="/">
                                    <img src="storage/img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 d-none d-lg-block">
                            <div class="book_room">
                                <div class="socail_links">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="book_btn d-none d-xl-block">
                                    <a class="#" href="#">+62809xxxxxxx</a>
                                </div>
                                    &nbsp;
                                    &nbsp;
                                <div class="btn btn-warning btn-circle">
                                    <a class="glyphicon glyphicon-remove" href="#">
                                        <img class="glyphicon glyphicon-remove" src="storage/img/user.png" alt="user" width="35" height="35">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->
    @yield('konten')

        <footer class="footer">
            <div class="footer_top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7 col-md-6 col-lg-4">
                            <div class="footer_widget text-center ">
                                <h3 class="footer_title pos_margin">
                                        Bandung
                                </h3>
                                <p>Jl. Dipatiukur No. xx , <br> 
                                        Bandung Jawa Barat <br>
                                        <a href="#">info@burger.com</a></p>
                                <a class="number" href="#">+62809xxxxxxx</a>
    
                            </div>
                        </div>
                        
                        <div class="col-xl-4 col-md-12 col-lg-4">
                                <div class="footer_widget">
                                        <h3 class="footer_title">
                                                Stay Connected
                                        </h3>
                                        <form action="#" class="newsletter_form">
                                            <input type="text" placeholder="Enter your mail">
                                            <button type="submit">Sign Up</button>
                                        </form>
                                        <p class="newsletter_text">Stay connect with us to get exclusive offer!</p>
                                    </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-4">
                            <div class="socail_links text-center">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="ti-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ti-twitter-alt"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ti-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copy-right_text">
                <div class="container">
                    <div class="footer_border"></div>
                    <div class="row">
                        <div class="col-xl-12">
                            <p class="copy_right text-center">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


    <!-- JS here -->
    <script src="storage/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="storage/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="storage/js/popper.min.js"></script>
    <script src="storage/js/bootstrap.min.js"></script>
    <script src="storage/js/owl.carousel.min.js"></script>
    <script src="storage/js/isotope.pkgd.min.js"></script>
    <script src="storage/js/ajax-form.js"></script>
    <script src="storage/js/waypoints.min.js"></script>
    <script src="storage/js/jquery.counterup.min.js"></script>
    <script src="storage/js/imagesloaded.pkgd.min.js"></script>
    <script src="storage/js/scrollIt.js"></script>
    <script src="storage/js/jquery.scrollUp.min.js"></script>
    <script src="storage/js/wow.min.js"></script>
    <script src="storage/js/nice-select.min.js"></script>
    <script src="storage/js/jquery.slicknav.min.js"></script>
    <script src="storage/js/jquery.magnific-popup.min.js"></script>
    <script src="storage/js/plugins.js"></script>

    <!--contact js-->
    <script src="storage/js/contact.js"></script>
    <script src="storage/js/jquery.ajaxchimp.min.js"></script>
    <script src="storage/js/jquery.form.js"></script>
    <script src="storage/js/jquery.validate.min.js"></script>
    <script src="storage/js/mail-script.js"></script>

    <script src="storage/js/main.js"></script>

</body>

</html>