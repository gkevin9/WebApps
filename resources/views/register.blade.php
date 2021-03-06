<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Burger</title>
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
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <script>
            var msg = '{{Session::get('alert')}}';
            var exist = '{{Session::has('alert')}}';
            if(exist){
                alert(msg);
            }
        </script>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">           
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-5 col-lg-5">
                            <div class="main-menu  d-none d-lg-block">
                               
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
    &nbsp;
        <footer class="footer">
            <div class="footer_top">
                <div class="container">
                    <div class="row justify-content-center">
                        <form action="/register/store" method="post" class="form-vertical">
                            <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">

                            <div class="form-group">
                                <input type="text" class="form-control" id="name" placeholder="Enter name" name="nama">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="phone" placeholder="Enter phone number" name="phone">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary" value="Register">Submit</button>
                                </div>
                            </div>
                                <!-- <body>
                                <form action="/register/store" method="post">
                                    <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
                                
                                    Nama :
                                    <input type="text" name="nama"/> <br/>
                                    password :
                                    <input type="password" name="password"/> <br/>
                                    email :
                                    <input type="text" name="email"/><br/>
                                    phone number:
                                    <input type="text" name="phone"/><br/>
                                    
                                    <input type="submit" value="Register"/>
                                </form>
                            </body> -->

                        </form>
                    </div>
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
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