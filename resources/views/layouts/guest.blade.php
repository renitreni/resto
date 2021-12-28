<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('vendor/icofont/icofont.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/meal/css/main.css') }}">

@livewireStyles
<!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body>

<div class="site-mobile-menu">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
            <span class="icofont-close js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>
<nav class="site-nav mb-5">
    <div class="container-fluid">
        <div class="site-navigation text-center">
            <a href="index-2.html" class="logo menu-absolute m-0">Meal<span class="text-primary">.</span></a>
            <ul class="js-clone-nav d-none d-lg-inline-block site-menu">
                <li class="active"><a href="index-2.html">Home</a></li>
                <li class="has-children">
                    <a href="menu.html">Menu</a>
                    <ul class="dropdown">
                        <li><a href="elements.html">Elements</a></li>
                        <li class="has-children">
                            <a href="#">Menu Two</a>
                            <ul class="dropdown">
                                <li><a href="#">Sub Menu One</a></li>
                                <li><a href="#">Sub Menu Two</a></li>
                                <li><a href="#">Sub Menu Three</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Menu Three</a></li>
                    </ul>
                </li>
                <li><a href="events.html">Events</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
            <a href="book-a-table.html" class="btn-book btn btn-primary btn-sm menu-absolute">Book a table</a>
            <a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light"
               data-toggle="collapse" data-target="#main-navbar">
                <span></span>
            </a>
        </div>
    </div>
</nav>

{{ $slot }}

@livewireScripts
<script src="{{ asset('theme/meal/js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('theme/meal/js/popper.min.js+bootstrap.min.js.pagespeed.jc.sIO8dxRblt.js') }}"></script>
<script src="{{ asset('vendor/OwlCarousel2-2.3.4/dist/owl.carousel.min.js') }}"></script>

<script src="{{ asset('theme/meal/js/jquery.fancybox.min.js+aos.js+custom.js.pagespeed.jc.LQZgLUc6p4.js') }}"></script>

<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js') }}"></script>
<script>
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        rtl:false,
        loop:true,
        margin:10,
        nav:true,
        autoWidth:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    })
</script>
</body>
</html>
