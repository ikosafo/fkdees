<?php
    $currentUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    include ('./config.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>FKDEES TRAVEL AND TOURS</title>
<!-- Stylesheets -->
<link href="<?php echo URLROOT ?>/assets/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo URLROOT ?>/assets/css/style.css" rel="stylesheet">


<!-- Responsive File -->
<link href="<?php echo URLROOT ?>/assets/css/responsive.css" rel="stylesheet">

<link rel="shortcut icon" href="<?php echo URLROOT ?>/assets/images/favicon.png" type="image/x-icon">
<link rel="icon" href="<?php echo URLROOT ?>/assets/images/favicon.png" type="image/x-icon">

<!-- Responsive Settings -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"><div class="icon"></div></div>

    <!-- Main Header -->
    <header class="main-header header-style-one">
        <div class="logo-desktop">
            <div class="logo"><a href="/" title="FKDEE'S TRAVEL AND TOUR SERVICES - Your Journey, Our Expertise"><img src="<?php echo URLROOT ?>/assets/images/fkdees_logo.png" alt="FKDEE'S TRAVEL AND TOUR SERVICES - Your Journey, Our Expertise"></a></div>
        </div>
        <!-- Header Top -->
        <div class="header-top header-top-one">
            <div class="outer-container">
				<div class="inner clearfix">
                    <div class="top-left clearfix">
                        <!--Info-->
                        <div class="info">
                            <ul class="clearfix">
                                <li class="phone"><a href="tel:+233248080447"><span class="icon fa fa-phone-alt"></span> +233248080447</a></li>
                                <li class="email"><a href="mailto:info@fkdeestravel.com"><span class="icon fa fa-envelope"></span> info@fkdeestravel.com</a></li>
                            </ul>
                        </div>

                        <div class="top-text"><span class="icon flaticon-surf-1"></span> Water Sports Activities, Experience The Thrill!.</div>
                    </div>
    
                    <div class="top-right clearfix">
                        <!--Top Search-->
                        <div class="top-search-form">
                            <form method="post" action="#">
                                <div class="form-group clearfix">
                                    <input type="search" name="email" value="" placeholder="Enter Keyword . . ." required="">
                                    <button type="submit" class="theme-btn s-btn"><span class="icon flaticon-magnifying-glass"></span></button>
                                </div>
                            </form>
                        </div>
                        <div class="my-account">
                            <ul class="clearfix">
                                <li><a href="#"><span class="icon flaticon-password"></span> Login</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Header Upper -->
        <div class="header-upper">
            <div class="outer-container">
                <div class="inner clearfix" style="background-color: #fff;">
                    <!--Logo-->
                    <div class="logo-box">
                        <div class="logo"><a href="/" title="FKDEE'S TRAVEL AND TOUR SERVICES - Your Journey, Our Expertise"><img src="<?php echo URLROOT ?>/assets/images/fkdees_logo.png" alt="FKDEE'S TRAVEL AND TOUR SERVICES - Your Journey, Our Expertise"></a></div>
                    </div>
                    <div class="nav-content clearfix">
                        <div class="nav-outer clearfix">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler"><span class="icon flaticon-menu-1"></span></div>

                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li class="current"><a href="/">Home</a></li>
										<li class="dropdown"><a href="#">About Us</a>
                                            <ul>
												<li><a href="#">Our Story</a></li>
                                                <li><a href="#">Our Core Values</a></li>
												<li><a href="#">Our Mission and Vision</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Blog/News</a></li>
                                        <li><a href="#">Destinatons</a></li>
                                        <li class="dropdown"><a href="#">Trips and Offers</a>
                                            <ul>
												<li><a href="#">Flight Scheduling</a></li>
                                                <li><a href="#">Lodging Arrangements</a></li>
                                                <li><a href="#">Travel Insurance</a></li>
                                                <li><a href="#">Visa Assistance</a></li>
                                            </ul>
                                        </li>
										<li><a href="#">Contact Us</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>

                        <div class="other-links clearfix">
                            <!--Book Btn-->
                            <div class="book-btn">
                                <a href="#" class="theme-btn btn-style-one"><div class="btn-title">Call Us</div></a>
                            </div>
                            <!--Social Links-->
                            <!-- <div class="social-links social-links-one">
                                <ul class="clearfix">
                                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                </ul>
                            </div> -->
                            <!--Nav Toggler-->
                            <div class="max-nav-toggler">
                                <button class="theme-btn toggle-btn"><span class="flaticon-circled"></span></button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--End Header Upper-->

        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="/" title=""><img src="<?php echo URLROOT ?>/assets/images/fkdees_logo.png" alt="" title=""></a>
                </div>
                <!--Right Col-->
                <div class="pull-right clearfix">
                    <!-- Main Menu -->
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav><!-- Main Menu End-->

                    <!--Search Btn-->
                    <div class="search-btn">
                        <button type="button" class="primary-btn search-toggler"><span class="icon flaticon-magnifying-glass"></span></button>
                    </div>

                    <!--Book Btn-->
                    <div class="booking-link">
                        <a href="#" class="theme-btn btn-style-one"><div class="btn-title">Call Now</div></a>
                    </div>
                </div>
            </div>
        </div><!-- End Sticky Menu -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-targeting-cross"></span></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="/"><img src="<?php echo URLROOT ?>/assets/images/fkdees_logo.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
				<!--Social Links-->
				<div class="social-links">
					<ul class="clearfix">
						<li><a href="#"><span class="fab fa-twitter"></span></a></li>
						<li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
						<li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
						<li><a href="#"><span class="fab fa-instagram"></span></a></li>
						<li><a href="#"><span class="fab fa-youtube"></span></a></li>
					</ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->
    </header>
    <!-- End Main Header -->

    <!--Search Popup-->
    <div id="search-popup" class="search-popup">
        <div class="close-search theme-btn"><span class="flaticon-targeting-cross"></span></div>
        <div class="popup-inner">
            <div class="overlay-layer"></div>
            <div class="search-form">
                <form method="post" action="#">
                    <div class="form-group">
                        <fieldset>
                            <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                            <input type="submit" value="Search Now!" class="theme-btn">
                        </fieldset>
                    </div>
                </form>
                
                <br>
                <h3>Recent Search Keywords</h3>
                <ul class="recent-searches">
                    <li><a href="#">Travel</a></li>
                    <li><a href="#">VISA</a></li>
                    <li><a href="#">Flight</a></li>
                    <li><a href="#">Lodging</a></li>
                    <li><a href="#">Currency</a></li>
                </ul>
            
            </div>
            
        </div>
    </div>

    <!-- Hidden Navigation Bar -->
    <section class="hidden-bar right-align">
        
        <div class="hidden-bar-closer">
            <button><span class="flaticon-letter-x"></span></button>
        </div>
        
        <!-- Hidden Bar Wrapper -->
        <div class="hidden-bar-wrapper">
            
            <div class="logo">
                <a href="/"><img src="<?php echo URLROOT ?>/assets/images/fkdees_logo.png" alt="" /></a>
            </div>
            <div class="content-box">
                <h3>Get In Touch</h3>
            </div>
            <div class="contact-info">
                <h2>Contact Info</h2>
                <ul class="list-style-two">
                    <li><span class="icon fa fa-map-marker-alt"></span>Cape coast Academy, Opposite Abrua police station, C/R, Ghana</li>
                    <li><span class="icon fa fa-phone-alt"></span><a href="tel:+233248080447">+233248080447 / +23359922818</a></li>
                    <li><span class="icon fa fa-envelope-open"></span> <a href="mailto:info@fkdeestravel.com">info@fkdeestravel.com</a></li>
                </ul>
            </div>
        </div><!-- / Hidden Bar Wrapper -->
        
    </section>
    <!-- End / Hidden Bar -->