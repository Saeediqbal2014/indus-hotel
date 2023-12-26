<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <!-- Stylesheets -->
    <link href="{{ asset('front_assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front_assets/css/flatpickr.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front_assets/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('front_assets/css/slick-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front_assets/css/slick.css') }}">

    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('front_assets/images/logo.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('front_assets/css/lightbox.min.css') }}" crossorigin="anonymous"
        referrerpolicy="no-referrer" />
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">


    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>

    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
    <div class="page-wrapper">

        <!-- page preloader  -->

        <!-- Main Header-->
        <header class="main-header header-style-two">
            <div class="auto-containers">
                <div class="header-top d-none d-lg-block border-bottom">
                    <div class="inner-box px-5">
                        <!-- top-left -->
                        <div class="top-left">
                            <a href="tel:+92 22 2782514-15"><span class="me-3"><i
                                        class="icon fa-sharp fa-solid fa-phone"></i>+92 22 2782514-15</span></a>
                            <a href="mailto:reservation@indushotel.com"><span><i
                                        class="icon fa-regular fa-envelope"></i>reservation@indushotel.com</span></a>

                        </div>

                        <div class="logo-box">
                            <div class="logo"><a href="index.php"><img
                                        src="{{ asset('front_assets/images/logo.png') }}" alt=""
                                        title="Tronis"></a>
                            </div>
                        </div>
                        <!-- Top-right -->
                        <div class="top-right">
                            <div class="lang_select" id="google_translate_element">
                            </div>
                            <script type="text/javascript">
                                function googleTranslateElementInit() {
                                    new google.translate.TranslateElement({
                                        pageLanguage: 'en'
                                    }, 'google_translate_element');
                                }
                            </script>
                            <a href="accommodation.php" class="theme-btn btn-style-one"><i
                                    class="fas fa-concierge-bell"></i> <span class="btn-title">Reserve Now</span></a>
                        </div>
                    </div>
                </div>

                <!-- Main box -->
                <div class="main-box px-5">
                    <div class="logo-box">
                        <div class="logo indus_mobile_logo"><a href="index.php">
                                <img src="{{ asset('front_assets/images/logo.png') }}" alt=""
                                    title="Tronis"></a>
                        </div>
                        <!--Nav Box-->
                        <div class="nav-outer">
                            <nav class="nav main-menu">
                                <ul class="navigation">
                                    <li><a href="{{ route('home') }}">Home</a>
                                    </li>
                                    <li><a href="{{ route('about') }}">About</a>
                                    </li>
                                    <li><a href="{{ route('accommodation') }}">Accommodation</a>
                                        <ul>
                                            <li><a href="{{ route('delux') }}">Deluxe Rooms</a></li>
                                            <li><a href="executive_rooms.php">Executive Rooms</a></li>
                                            <li><a href="executive_gold_rooms.php">Executive Gold Rooms</a></li>
                                            <li><a href="room-presidential-suite.php">Presidential Suite</a></li>
                                            <li><a href="room-diplomatic-suite.php">Diplomatic Suite</a></li>
                                            <li><a href="room-vip-suite.php">Vip Suite</a></li>
                                            <li><a href="room-khaleej-suite.php">Khaleej Suite</a></li>
                                            <li><a href="room-noori-suite.php">Noori Suite</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('meet') }}">Meeting & Event</a>
                                    </li>
                                    <li><a href="{{ route('dinein') }}">Dine In</a>
                                    </li>
                                    <li><a href="{{ route('beauty') }}">Beauty & Wellness</a></li>
                                    <li><a href="{{ route('hyderabad_attractions') }}">Hyderabad Attractions</a></li>
                                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                </ul>
                            </nav>
                            <!-- Main Menu End-->
                        </div>
                        <div class="outer-box d-lg-none">
                            <div class="mobile-nav-toggler"><i class="icon fa fa-bars"></i></div>
                            <!-- Mobile Nav toggler -->
                        </div>
                    </div>
                    <!-- Mobile Menu  -->
                    <div class="mobile-menu">
                        <div class="menu-backdrop"></div>
                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                        <nav class="menu-box">
                            <div class="upper-box">
                                <div class="nav-logo">
                                    <a href="index.php"><img src="images/logo.png" alt="" title=""></a>
                                </div>
                                <div class="close-btn"><i class="icon fa fa-times"></i></div>
                            </div>
                            <ul class="navigation clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </ul>
                            <ul class="contact-list-one">
                                <li>
                                    <!-- Contact Info Box -->
                                    <div class="contact-info-box">
                                        <i class="icon lnr-icon-phone-handset"></i>
                                        <span class="title">Call Now</span>
                                        <a href="tel:+92 22 2782514-15">+92 22 2782514-15</a>
                                    </div>
                                </li>
                                <li>
                                    <!-- Contact Info Box -->
                                    <div class="contact-info-box">
                                        <span class="icon lnr-icon-envelope1"></span>
                                        <span class="title">Send Email</span>
                                        <a href="mailto:help@company.com"> reservation@indushotel.com</a>
                                    </div>
                                </li>
                                <li>
                                    <!-- Contact Info Box -->
                                    <div class="contact-info-box">
                                        <span class="icon lnr-icon-clock"></span>
                                        <span class="title">Send Email</span>
                                        Mon - Sat 8:00 - 6:30, Sunday - CLOSED
                                    </div>
                                </li>
                            </ul>
                            <ul class="social-links">
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </nav>
                    </div><!-- End Mobile Menu -->

                    <!-- Header Search -->
                    <div class="search-popup">
                        <span class="search-back-drop"></span>
                        <button class="close-search"><span class="fa fa-times"></span></button>
                        <div class="search-inner">
                            <form method="post" action="">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Search..."
                                        required="">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- End Header Search -->

                    <!-- Sticky Header  -->
                    <div class="sticky-header">
                        <div class="auto-container">
                            <div class="inner-container">
                                <!--Logo-->
                                <div class="logo indus_mobile_logo">
                                    <a href="index.php" title=""><img src="images/logo.png" alt=""
                                            title=""></a>
                                </div>
                                <!--Right Col-->
                                <div class="nav-outer">
                                    <!-- Main Menu -->
                                    <nav class="main-menu">
                                        <div class="navbar-collapse show collapse clearfix">
                                            <ul class="navigation clearfix">
                                                <!--Keep This Empty / Menu will come through Javascript-->
                                            </ul>
                                        </div>
                                    </nav><!-- Main Menu End-->
                                    <!--Mobile Navigation Toggler-->
                                    <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Sticky Menu -->
                </div>
        </header>
        <a href="https://api.whatsapp.com/send?phone=+923135443304&text=Hello, Welcome to Indus Hotel. How can I help you?"
            class="float" target="_blank">
            <i class="fa-brands fa-whatsapp my-float"></i>
        </a>
        <!--End Main Header -->
