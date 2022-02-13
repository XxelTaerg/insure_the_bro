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

<!-- Overlay Search Form -->
<div class="search-overlay-wrap">
    <a href="#" class="abs-trigger-right overlay-search-close overlay-search-trigger"><span
            class="ti-close text-light"></span></a>
    <div class="search-overlay-inner">
        <form class="search-form">
            <div class="input-group">
                <input type="text" name="s" class="form-control" placeholder="Введите то, что ищете..">
                <div class="input-group-append">
                    <button class="btn btn-dark" type="submit"><span class="ti-search"></span></button>
                </div>
            </div>
        </form>
    </div>
</div><!-- .search-overlay-wrap -->

<!-- Sigin/Register Form -->
<div class="user-login-form-wrap">
    <a href="#" class="signin-form-trigger abs-trigger-right"><span class="ti-close text-light"></span></a>
    <div class="user-login-inner">
        <div class="user-login-wrap rounded active">
            <h5 class="text-center mt-2 mb-3">Вход</h5>
            <form class="signin-form mb-3" action="{{ route('login.custom') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Email адрес</label>
                    <input type="text" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label>Пароль</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="form-group">
                    <a href="#" class="trigger-register-form">Регистрация</a> / <a href="#" class="trigger-forget-form">Забыли
                        пароль?</a>
                </div>
                <input type="submit" name="logsubmit" class="btn btn-primary mt-2" value="Вход">
            </form>
        </div>
        <div class="forget-password-wrap rounded">
            <a href="#" class="trigger-login-form abs-trigger-right"><span class="ti-close"></span></a>
            <h5 class="text-center mt-2 mb-3">Забыли пароль?</h5>
            <form class="forget-password-form mb-3">
                <div class="form-group">
                    <label>Email адрес</label>
                    <input type="text" class="form-control" name="email">
                </div>
                <input type="submit" name="forgetsubmit" class="btn btn-primary mt-2" value="Submit">
            </form>
        </div>
        <div class="user-registration-wrap rounded">
            <a href="#" class="trigger-login-form abs-trigger-right"><span class="ti-close"></span></a>
            <h5 class="text-center mt-2 mb-3">Регистрация</h5>
            <form class="register-form mb-3" action="{{ route('register.custom') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Название компании</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label>Email адрес</label>
                    <input type="text" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label>Телефон</label>
                    <input type="text" class="form-control" name="phone">
                </div>
                <div class="form-group">
                    <label>Юридический адрес</label>
                    <input type="text" class="form-control" name="address">
                </div>
                <div class="form-group">
                    <label>Пароль</label>
                    <input type="password" class="form-control" name="password">
                </div>
                {{--                <div class="form-group">--}}
                {{--                    <label>Повторите пароль</label>--}}
                {{--                    <input type="password" class="form-control" name="confirmpassword">--}}
                {{--                </div>--}}
                <input type="submit" name="registersubmit" class="btn btn-primary mt-2" value="Регистрация">
            </form>
        </div>
    </div><!-- .user-login-inner -->
</div><!-- .user-login-form-wrap -->

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
                                    <li><a href="malto:info@insurethebro.com"><span class="mail-text"><i
                                                    class="ti-mail"></i> info@insurethebro.com</span></a></li>
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

    <!-- Set Header Sticky  -->
    <div class="set-header-sticky">
        <!-- Navbar for Desktop -->
        <div class="header-navbar d-none d-lg-flex">
            <div class="container">
                <div class="header-parts-wrap">
                    <div class="header-parts-nav d-flex">
                        <div class="header-left d-flex">
                            <!-- Logo Wrapper -->
                            <div class="logo-wrap m-0">
                                <a href="index.html" class="site-logo sticky-logo"><img class="img-fluid mr-3"
                                                                                        alt="insurethebro"
                                                                                        src="images/logos.png"></a>
                            </div>
                            <!-- Site Menu -->
                            <ul class="nav site-menu d-none d-lg-flex">
                                <li class="nav-item"><a href="{{ route('index') }}">Все</a></li>
                                @foreach ($productCategories as $key=>$category)
                                    <li class="nav-item"><a href="{{ route('filter.categories', ['category_id'=>$category->id]) }}">{{ $category->name }}</a></li>
                                @endforeach
                            </ul>
                        </div><!-- .header-left -->
                        <div class="header-right d-flex align-self-center ml-auto">
                            <!-- Signin Form Trigger -->
                            <ul class="nav">
                                <li class="login-dropdown menu-item-has-children">
                                    <a href="#" class="signin-form-trigger"><span class="ti-user mr-1"></span>Вход/Регистрация</a>
                                </li>
                            </ul>
                        </div><!-- .header-right -->
                    </div><!-- .header-parts-nav -->
                </div><!-- .header-parts-wrap -->
            </div><!-- .container -->
        </div><!-- .header-navbar -->
    </div><!-- .header-sticky-part -->
</header><!--Header-->
<section class="vector-featurebox-section">
    <div class="section-inner">
        <div class="container">
            <div class="row">
                <br>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Название</th>
                        <th scope="col">Процент страхования</th>
                        <th scope="col">Срок страхования</th>
                        <th scope="col">Компания</th>
                        <th scope="col">Категория</th>
                        <th scope="col">Действие</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($products as $key=>$product)
                            <tr>
                                <th scope="row">{{ $key+1 }}</th>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->percent }}</td>
                                <td>{{ $product->period}}</td>
                                <td>{{ $product->insuranceCompany->name}}</td>
                                <td>{{ $product->category->name}}</td>
                                <td><button type="button" class="btn btn-success">Оформить</button></td>
                            </tr>
                    @endforeach
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<section class="vector-featurebox-section">
    <div class="section-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <!-- Feature Box Vector -->
                    <div
                        class="feature-box feature-box-vector mb-5 mb-lg-0 text-center before-bg-square after-bg-square">
                        <div class="feature-box-card">
                            <div class="feature-box-icon-wrap mb-3">
                                <span class="feature-box-abs-img set-as-background"
                                      data-bgimg="images/vectors/abstract-vector-1.png"></span>
                                <span class="feature-box-icon icon-lg text-white bg-none"><i
                                        class="fa fa-line-chart"></i></span>
                            </div>
                            <div class="feature-box-body">
                                <div class="feature-box-title-wrap mb-4">
                                    <h4 class="feature-box-title">Застрахуй здровье</h4>
                                </div>
                                <div class="feature-box-content-wrap">
                                    <p class="feature-box-content">Специальное предоложение на 1 год за 300 рублей</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- .feature-box -->
                </div><!-- .col -->
                <div class="col-md-6 col-lg-4">
                    <div
                        class="feature-box feature-box-vector mb-5 mb-lg-0 text-center before-bg-square after-bg-square">
                        <div class="feature-box-card">
                            <div class="feature-box-icon-wrap mb-3">
                                <span class="feature-box-abs-img set-as-background"
                                      data-bgimg="images/vectors/abstract-vector-2.png"></span>
                                <span class="feature-box-icon icon-lg text-white bg-none"><i
                                        class="fa fa-paper-plane"></i></span>

                            </div>
                            <div class="feature-box-body">
                                <div class="feature-box-title-wrap mb-4">
                                    <h4 class="feature-box-title">ТОЛЬКО СЕГОДНЯ!</h4>
                                </div>
                                <div class="feature-box-content-wrap">
                                    <p class="feature-box-content">Возможность страхования сроком в 1 месяц</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- .feature-box -->
                </div><!-- .col -->
                <div class="col-lg-4">
                    <div class="feature-box feature-box-vector text-center before-bg-square after-bg-square">
                        <div class="feature-box-card">
                            <div class="feature-box-icon-wrap mb-3">
                                <span class="feature-box-abs-img set-as-background"
                                      data-bgimg="images/vectors/abstract-vector-3.png"></span>
                                <span class="feature-box-icon icon-lg text-white bg-none"><i
                                        class="ti-email"></i></span>
                            </div>
                            <div class="feature-box-body">
                                <div class="feature-box-title-wrap mb-4">
                                    <h4 class="feature-box-title">Онлайн оповещение страхователя</h4>
                                </div>
                                <div class="feature-box-content-wrap">
                                    <p class="feature-box-content">Теперь вы можете оповестить страховую компанию о
                                        случившемся, наврав одно сообщение в мессенджере.</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- .feature-box -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .section-inner -->
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
