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
                                                                                     src="{{ asset('images/logos.png') }}"></a>
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
                                                                                        src="{{ asset('images/logos.png') }}"></a>
                            </div>

                            @include('components.menu')

                        </div><!-- .header-left -->
                        <div class="header-right d-flex align-self-center ml-auto">
                            <!-- Signin Form Trigger -->
                            @auth
                                <ul class="nav site-menu d-none d-lg-flex">
                                    <li class="nav-item menu-item-has-children">
                                        <span>{{ auth()->user()->name }}</span>
                                        <ul class="nav flex-column sub-menu">
                                            <li class="nav-item"><a href="{{ 'signout' }}">Выйти</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            @elseauth
                                <ul class="nav">
                                    <li class="login-dropdown menu-item-has-children">
                                        <a href="#" class="signin-form-trigger"><span class="ti-user mr-1"></span>Вход/Регистрация</a>
                                    </li>
                                </ul>
                            @endauth

                        </div><!-- .header-right -->
                    </div><!-- .header-parts-nav -->
                </div><!-- .header-parts-wrap -->
            </div><!-- .container -->
        </div><!-- .header-navbar -->
    </div><!-- .header-sticky-part -->
</header><!--Header-->
