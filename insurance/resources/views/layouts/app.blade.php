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

@include('components.sigin')

@include('components.search')

@include('layouts.header')

@yield('content')

@include('components.featurebox')

@include('layouts.footer')

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>


<!-- jQuery Library -->
<script src={{  asset('js/jquery.min.js') }}></script>
<!-- jQuery Appear -->
<script src={{  asset('js/bootstrap.min.js') }}></script>
<!-- jQuery Appear -->
<script src={{  asset('js/jquery.appear.js') }}></script>
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
