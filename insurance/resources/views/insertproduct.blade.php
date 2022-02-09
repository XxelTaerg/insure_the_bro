<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=/>
    <meta name="author" content="Foxy Web Themes"/>
    <title>insureTHEBRO</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="images/favicon.ico"/>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">
    <!-- Bootstrap Styles -->
    <link rel="stylesheet" type="text/css" href="{{  asset('css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{  asset('css/themify-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{  asset('css/font-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{  asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" type="text/css" href="{{  asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{  asset('css/jquery.mb.YTPlayer.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{  asset('css/styles.css') }}">
</head>

<body data-nav-offset="58">

<!-- Page Loader -->
<div class="page-loader"></div>

<!-- Mobile Menu -->
<div class="mobile-menu-wrapper d-lg-none">
    <a href="#" class="mobile-menu-toggle"><span class="toggle-lines"></span></a>
    <div class="mobile-logo-wrap mt-5 mb-4 text-center">
        <a href="#" class="mobile-logo-link"><img class="img-fluid" src="images/logos.png" alt=insurethebro"/></a>
    </div>
</div>

<!--Header-->
<header class="masterhead">

    <!-- Topbar for Desktop | Top Sliding Bar for Tablet/Mobile -->
    <div class="set-mobile-top-sliding">
        <a href="#" class="mobile-top-sliding d-lg-none"><span class="ti-arrow-down"></span></a>
        <div class="header-topbar dark-style-bar pt-2 pb-2 p-lg-0">
            <div class="container">
                <div class="header-parts-wrap">
                    <div class="header-parts-nav d-lg-flex">
                        <div class="header-left d-lg-flex">
                            <div class="topbar-info-wrap">
                                <ul class="nav justify-content-center">
                                    <li><span class="welome-text">Welcome to insureTHEBRO</span></li>
                                </ul>
                            </div>
                        </div><!-- .header-left -->
                        <div class="header-right d-lg-flex ml-lg-auto">
                            <div class="topbar-info-wrap">
                                <ul class="nav justify-content-center">
                                    <li>NameCompany</li>
                                </ul>
                            </div>
                        </div><!-- .header-right -->
                    </div><!-- .header-parts-nav -->
                </div><!-- .header-parts-wrap -->
            </div><!-- .container -->
        </div><!-- .header-topbar -->
    </div><!-- .set-header-sticky -->

    <!-- Logobar for Desktop -->
    <div class="header-logobar border-bottom d-none d-lg-flex">
        <div class="container">
            <div class="header-parts-wrap">
                <div class="header-parts-nav d-flex">
                    <div class="header-left mr-auto align-self-center">

                    </div><!-- .header-left -->
                    <div class="header-center justify-content-center d-flex">
                        <!-- Site Logo -->
                        <div class="logo-wrap">
                            <a href="index.html" class="site-logo default-logo"><img class="img-fluid"
                                                                                     alt="insurethebro"
                                                                                     src="images/logos.png"></a>
                        </div>
                    </div><!-- .header-center -->
                    <div class="header-right d-flex align-self-center ml-auto">
                        <!-- Overlay Search Trigger -->
                        <div class="search-trigger-wrap">
                            <a href="#" class="search-trigger overlay-search-trigger"><span
                                    class="ti-search"></span></a>
                        </div>
                    </div><!-- .header-right -->
                </div><!-- .header-parts-nav -->
            </div><!-- .header-parts-wrap -->
        </div><!-- .container -->
    </div><!-- .header-logobar -->


    <section id="contact-section" class="contact-section section-bg-white">
        <div class="section-inner">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9">
                        <div class="section-title-wrapper mb-5 text-center">
                            <h2 class="section-title text-uppercase">Добавьте новую запись</h2>
                            <span class="section-title-seperator"></span>
                        </div>
                    </div>
                </div>
            </div>


            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="contact-form-wrapper">
                            <form class="contact-form bv-form" action="inc/function.php">
                                <p class="contact-status-msg d-none"></p>
                                <div class="contact-form-set d-flex">
                                    <div class="form-group mb-5 w-50">
{{--                                        'name', 'percent', 'period', 'company_id', 'category_id'--}}
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="name" placeholder="Name" data-bv-field="name">
                                        </div>
                                    </div>
                                    <div class="form-group mb-5 w-50">
                                        <div class="input-group">
                                            <input type="percent" class="form-control" name="percent" placeholder="Percent" data-bv-field="percent">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-5">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="period" placeholder="Period" data-bv-field="period">
                                    </div>
                                </div>
                                <div class="form-group mb-5">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="company_id" placeholder="Company_id" data-bv-field="company_id">
                                    </div>
                                </div>
                                <div class="form-group mb-5">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="category_id" placeholder="Category_id" data-bv-field="category_id">
                                    </div>
                                </div>
                                <div class="form-submit-wrap text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div><!-- .contact-form-wrapper -->
                    </div>
                </div>
            </div>
        </div>
    </section>

<footer class="section section-bg-dark">
    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md">
                    <p class="text-white text-muted mt-3 text-center">&copy; Copyright 2020. All Rights Reserved by <a
                            href="" class="text-muted">Brothers</a></p>
                </div>
            </div>
        </div>
    </div>

    <a href="#" class="back-to-top" id="back-to-top"><i class="ti-angle-up"></i></a>

</footer><!--footer-->

<!-- jQuery Library -->
<script src={{  asset('js/jquery.min.js') }}></script>
<!-- jQuery Appear -->
<script src={{  asset('js/bootstrap.min.js') }}></script>
<!-- jQuery Appear -->
<script src="js/jquery.appear.js"></script>
<!-- Maginific Popup -->
<script src={{  asset('js/jquery.magnific-popup.min.js') }}></script>
<!-- Owl Carousel -->
<script src={{  asset('js/owl.carousel.min.js') }}></script>
<!-- Parallax -->
<script src={{  asset('js/parallaxie.js') }}></script>
<!-- Circle Progress -->
<script src={{  asset('js/jquery.circle.progress.min.js') }}></script>
<!-- Day Counter -->
<script src={{  asset('js/jquery.countdown.min.js') }}></script>
<!-- Isotope Masonry -->
<script src={{  asset('jjs/isotope.pkgd.min.js') }}></script>
<!-- Bootstrap Validator -->
<script src={{  asset('js/validator.min.js') }}></script>
<!-- Foxy Floating Parallax -->
<script src={{  asset('js/foxy-float-parallax.js') }}></script>
<!-- Foxy Element Parallax -->
<script src={{  asset('js/foxy-element-parallax.js') }}></script>
<!-- Particles and Particles Config App -->
<script src={{  asset('js/particles.min.js') }}></script>
<script src={{  asset('js/particles.app.js') }}></script>
<!-- YT Player -->
<script src={{  asset('js/jquery.mb.YTPlayer.min.js') }}></script>
<!-- Theme Scripts -->
<script src={{  asset('js/theme.js') }}></script>

</body>
</html>
