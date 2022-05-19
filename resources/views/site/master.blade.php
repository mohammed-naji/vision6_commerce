<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7"><![endif]-->
<!--[if IE 8]><html class="ie ie8"><![endif]-->
<!--[if IE 9]><html class="ie ie9"><![endif]-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="favicon.png" rel="icon">
    <meta name="author" content="Nghia Minh Luong">
    <meta name="keywords" content="Default Description">
    <meta name="description" content="Default keyword">
    <title>@yield('title', env('APP_NAME'))</title>
    <!-- Fonts-->
    <link
        href="https://fonts.googleapis.com/css?family=Archivo+Narrow:300,400,700%7CMontserrat:300,400,500,600,700,800,900"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('siteassets/plugins/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('siteassets/plugins/ps-icon/style.css') }}">
    <!-- CSS Library-->
    <link rel="stylesheet" href="{{ asset('siteassets/plugins/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('siteassets/plugins/owl-carousel/assets/owl.carousel.css') }}">
    <link rel="stylesheet"
        href="{{ asset('siteassets/plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css') }}">
    <link rel="stylesheet" href="{{ asset('siteassets/plugins/slick/slick/slick.css') }}">
    <link rel="stylesheet"
        href="{{ asset('siteassets/plugins/bootstrap-select/dist/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('siteassets/plugins/Magnific-Popup/dist/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('siteassets/plugins/jquery-ui/jquery-ui.min.css') }}">
    <!-- Custom-->
    <link rel="stylesheet" href="{{ asset('siteassets/css/style.css') }}">
    <!--HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--WARNING: Respond.js doesn't work if you view the page via file://-->
    <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
    <style>
        #section-1 {
            height: 38em;
            color: #fff;
            background-color: #222;
        }

        #section-1 .content-slider {
            position: relative;
            width: 100%;
            height: 100%;
        }

        #section-1 .content-slider input {
            display: none;
        }

        #section-1 .content-slider .slider {
            position: relative;
            width: inherit;
            height: inherit;
            overflow: hidden;
        }

        #section-1 .content-slider .slider .banner {
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
            z-index: 0;
            width: inherit;
            height: inherit;
            text-align: center;
            background-repeat: no-repeat;
            background-position: 50% 50%;
            transition: all .5s ease;
        }

        #section-1 .content-slider .slider .banner .banner-inner-wrapper {
            height: 100%;
            padding-top: 6em;
            background-image: linear-gradient(rgba(243, 129, 129, 0.9), rgba(252, 227, 138, 0.9));
            box-sizing: border-box;
        }

        #section-1 .content-slider .slider .banner .banner-inner-wrapper h2 {
            padding-bottom: 0.3em;
            font-family: 'Kaushan Script', cursive;
            font-weight: 400;
            font-size: 2.5em;
            text-transform: none;
        }

        #section-1 .content-slider .slider .banner .banner-inner-wrapper h1 {
            font-size: 6em;
            line-height: 95%;
        }

        #section-1 .content-slider .slider .banner .banner-inner-wrapper .line {
            display: block;
            width: 4em;
            height: 0.1875em;
            margin: 2.5em auto;
            background: #fff;
        }

        #section-1 .content-slider .slider .banner .banner-inner-wrapper .learn-more-button {
            padding-bottom: 5em;
            z-index: 15 !important;
        }

        #section-1 .content-slider .slider .banner .banner-inner-wrapper .learn-more-button a {
            padding: 0.5em 2em;
            text-align: center;
            font-family: Montserrat, sans-serif;
            font-size: 0.875em;
            color: #fff;
            text-transform: uppercase;
            border: 0.1875em solid #fff;
        }

        #section-1 .content-slider .slider .banner .banner-inner-wrapper .learn-more-button a:hover {
            color: #e88382;
            border-color: #e88382;
            transition: .3s;
        }

        #section-1 .content-slider .slider #top-banner-1 {
            background: url('https://checkboxes-demo.webdevs.co.ua/images/mogo/banner-1.png') no-repeat center center;
            background-size: cover;
        }

        #section-1 .content-slider .slider #top-banner-2 {
            background: url('https://checkboxes-demo.webdevs.co.ua/images/mogo/banner-2.png') no-repeat center center;
            background-size: cover;
        }

        #section-1 .content-slider .slider #top-banner-3 {
            background: url('https://checkboxes-demo.webdevs.co.ua/images/mogo/banner-3.png') no-repeat center center;
            background-size: cover;
        }

        #section-1 .content-slider .slider #top-banner-4 {
            background: url('https://checkboxes-demo.webdevs.co.ua/images/mogo/banner-4.png') no-repeat center center;
            background-size: cover;
        }

        #section-1 .content-slider nav {
            position: absolute;
            bottom: 0.5em;
            width: 100%;
            z-index: 10;
            text-align: center;
        }

        #section-1 .content-slider nav .controls {
            display: block;
            width: 70%;
            margin: 0 auto;
            font-family: Montserrat, sans-serif;
            color: #fff;
        }

        #section-1 .content-slider nav .controls label {
            position: relative;
            display: inline-block;
            width: 20%;
            height: 3.1em;
            overflow: hidden;
            margin: 0 1em;
            padding-top: 1em;
            text-align: left;
            text-transform: uppercase;
            font-family: Montserrat, sans-serif;
            font-size: 1em;
            color: #f6eac5;
            font-weight: 400;
            cursor: pointer;
            transition: all .3s;
        }

        #section-1 .content-slider nav .controls label .progressbar {
            position: absolute;
            top: 0;
            left: 0;
            height: 3px;
            width: 100%;
            background: #f6eac5;
            z-index: 100;
        }

        #section-1 .content-slider nav .controls label .progressbar .progressbar-fill {
            position: inherit;
            width: inherit;
            height: inherit;
            margin-left: -100%;
            background: #e88382;
        }

        #section-1 .content-slider nav .controls label span {
            font-size: 1.4em;
            font-weight: 700;
        }

        #section-1 .content-slider nav .controls label:hover {
            color: #e88382;
        }

        #section-1 .content-slider #banner1:checked~.slider #top-banner-1,
        #section-1 .content-slider #banner2:checked~.slider #top-banner-2,
        #section-1 .content-slider #banner3:checked~.slider #top-banner-3,
        #section-1 .content-slider #banner4:checked~.slider #top-banner-4 {
            opacity: 1;
            z-index: 1;
        }

        #section-1 .content-slider #banner1:checked~nav label:nth-of-type(1),
        #section-1 .content-slider #banner2:checked~nav label:nth-of-type(2),
        #section-1 .content-slider #banner3:checked~nav label:nth-of-type(3),
        #section-1 .content-slider #banner4:checked~nav label:nth-of-type(4) {
            cursor: default;
            color: #fff;
            transition: all .5s;
        }

        #section-1 .content-slider #banner1:checked~nav label:nth-of-type(1) .progressbar,
        #section-1 .content-slider #banner2:checked~nav label:nth-of-type(2) .progressbar,
        #section-1 .content-slider #banner3:checked~nav label:nth-of-type(3) .progressbar,
        #section-1 .content-slider #banner4:checked~nav label:nth-of-type(4) .progressbar {
            background: #fff;
        }

        #section-1 .content-slider #banner1:checked~nav label:nth-of-type(1) .progressbar-fill,
        #section-1 .content-slider #banner2:checked~nav label:nth-of-type(2) .progressbar-fill,
        #section-1 .content-slider #banner3:checked~nav label:nth-of-type(3) .progressbar-fill,
        #section-1 .content-slider #banner4:checked~nav label:nth-of-type(4) .progressbar-fill {
            animation: progressBarFill 5s linear;
        }

        @keyframes progressBarFill {
            from {
                margin-left: -100%;
            }

            to {
                margin-left: 0;
            }
        }

        @media only screen and (min-width: 1920px) {
            body {
                font-size: 22px;
            }

            .main-header .header-wrapper {
                width: 57%;
            }

            #section-1 {
                height: 46em;
            }

            #section-1 .content-slider .slider .banner .banner-inner-wrapper {
                padding-top: 12em;
            }
        }

        @media only screen and (max-width: 1919px) {
            body {
                font-size: 20px;
            }

            .main-header .header-wrapper {
                width: 60%;
            }

            #section-1 {
                height: 43em;
            }

            #section-1 .content-slider .slider .banner .banner-inner-wrapper {
                padding-top: 11em;
            }
        }

        @media only screen and (max-width: 1680px) {
            body {
                font-size: 18px;
            }

            .main-header .header-wrapper {
                width: 65%;
            }

            #section-1 {
                height: 40em;
            }

            #section-1 .content-slider .slider .banner .banner-inner-wrapper {
                padding-top: 5em;
            }
        }

        @media only screen and (max-width: 1366px) {
            body {
                font-size: 16px;
            }

            .main-header .header-wrapper {
                width: 70%;
            }
        }

        @media only screen and (max-width: 1120px) {
            .main-header .header-wrapper .main-menu li {
                padding: 0.75em 1.4em;
            }

            #section-1 {
                height: 35em;
            }

            #section-1 .content-slider nav {
                bottom: -0.2em;
            }

            #section-1 .content-slider .slider .banner .banner-inner-wrapper {
                padding-top: 7em;
            }

            #section-1 .content-slider .slider .banner .banner-inner-wrapper .line {
                margin: 2em auto;
            }
        }

        @media only screen and (max-width: 1024px) {
            body {
                font-size: 14px;
            }

            .main-header .header-wrapper .main-menu li {
                padding: 0.75em 1.3em;
            }

            #section-1 .content-slider nav {
                bottom: 0;
            }

            #section-1 .content-slider nav .controls {
                width: 80%;
            }
        }

        @media only screen and (max-width: 860px) {
            .main-header .header-wrapper .main-menu li {
                padding: 0.75em 0.9em;
            }

            #section-1 {
                height: 29em;
            }

            #section-1 .content-slider nav {
                bottom: -1em;
            }

            #section-1 .content-slider nav .controls {
                width: 90%;
            }

            #section-1 .content-slider .slider .banner .banner-inner-wrapper h2 {
                font-size: 2em;
            }

            #section-1 .content-slider .slider .banner .banner-inner-wrapper h1 {
                font-size: 4.5em;
            }

            #section-1 .content-slider .slider .banner .banner-inner-wrapper {
                padding-top: 5em;
            }
        }

        @media only screen and (max-width: 768px) {
            .main-header .header-wrapper .main-menu li {
                padding: 0.75em 0.5em;
            }

            #section-1 {
                height: 27em;
            }

            #section-1 .content-slider nav .controls {
                width: 100%;
            }

            #section-1 .content-slider nav .controls label {
                width: 19%;
                font-size: 0.8em;
            }

            #section-1 .content-slider .slider .banner .banner-inner-wrapper .line {
                margin: 1.7em auto;
            }
        }

        @media only screen and (max-width: 650px) {
            .main-header .header-wrapper {
                width: 95%;
            }
        }

        @media only screen and (max-width: 480px) {
            .main-header .header-wrapper {
                width: 97%;
            }

            .main-header .header-wrapper .main-logo {
                display: none;
            }

            .main-header .header-wrapper .main-menu li {
                padding: 0.2em 0.3em;
            }

            .main-header .header-wrapper .main-menu li:last-child,
            .main-header .header-wrapper .main-menu li:nth-child(6) {
                padding: 0.2em 0.7em;
            }

            #section-1 {
                height: 26em;
            }

            #section-1 .content-slider nav {
                bottom: -0.5em;
            }

            #section-1 .content-slider nav .controls label {
                width: 40%;
                font-size: 0.7em;
            }

            #section-1 .content-slider .slider .banner .banner-inner-wrapper h2 {
                font-size: 1.5em;
            }

            #section-1 .content-slider .slider .banner .banner-inner-wrapper h1 {
                font-size: 3em;
            }

            #section-1 .content-slider .slider .banner .banner-inner-wrapper .line {
                margin: 1.7em auto;
            }
        }

    </style>

    @yield('styles')
</head>
<!--[if IE 7]><body class="ie7 lt-ie8 lt-ie9 lt-ie10"><![endif]-->
<!--[if IE 8]><body class="ie8 lt-ie9 lt-ie10"><![endif]-->
<!--[if IE 9]><body class="ie9 lt-ie10"><![endif]-->

<body class="ps-loading">
    <div class="header--sidebar"></div>
    <header class="header">
        <div class="header__top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-6 col-xs-12 ">
                        <p>460 West 34th Street, 15th floor, New York - Hotline: 804-377-3580 - 804-399-3580</p>
                    </div>
                    <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 ">
                        <div class="header__actions"><a href="#">Login & Regiser</a>
                            <div class="btn-group ps-dropdown"><a class="dropdown-toggle" href="#"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">USD<i
                                        class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#"><img src="{{ asset('siteassets/images/flag/usa.svg') }}" alt="">
                                            USD</a></li>
                                    <li><a href="#"><img src="{{ asset('siteassets/images/flag/singapore.svg') }}"
                                                alt=""> SGD</a></li>
                                    <li><a href="#"><img src="{{ asset('siteassets/images/flag/japan.svg') }}"
                                                alt=""> JPN</a></li>
                                </ul>
                            </div>
                            <div class="btn-group ps-dropdown"><a class="dropdown-toggle" href="#"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Language<i
                                        class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">Japanese</a></li>
                                    <li><a href="#">Chinese</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navigation">
            <div class="container-fluid">
                <div class="navigation__column left">
                    <div class="header__logo"><a class="ps-logo" href="index.html"><img
                                src="{{ asset('siteassets/images/logo.png') }}" alt=""></a></div>
                </div>
                <div class="navigation__column center">
                    <ul class="main-menu menu">
                        <li class="menu-item menu-item-has-children dropdown"><a href="index.html">Home</a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="index.html">Homepage #1</a></li>
                                <li class="menu-item"><a href="#">Homepage #2</a></li>
                                <li class="menu-item"><a href="#">Homepage #3</a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children has-mega-menu"><a href="#">Men</a>
                            <div class="mega-menu">
                                <div class="mega-wrap">
                                    <div class="mega-column">
                                        <ul class="mega-item mega-features">
                                            <li><a href="product-listing.html">NEW RELEASES</a></li>
                                            <li><a href="product-listing.html">FEATURES SHOES</a></li>
                                            <li><a href="product-listing.html">BEST SELLERS</a></li>
                                            <li><a href="product-listing.html">NOW TRENDING</a></li>
                                            <li><a href="product-listing.html">SUMMER ESSENTIALS</a></li>
                                            <li><a href="product-listing.html">MOTHER'S DAY COLLECTION</a></li>
                                            <li><a href="product-listing.html">FAN GEAR</a></li>
                                        </ul>
                                    </div>
                                    <div class="mega-column">
                                        <h4 class="mega-heading">Shoes</h4>
                                        <ul class="mega-item">
                                            <li><a href="product-listing.html">All Shoes</a></li>
                                            <li><a href="product-listing.html">Running</a></li>
                                            <li><a href="product-listing.html">Training & Gym</a></li>
                                            <li><a href="product-listing.html">Basketball</a></li>
                                            <li><a href="product-listing.html">Football</a></li>
                                            <li><a href="product-listing.html">Soccer</a></li>
                                            <li><a href="product-listing.html">Baseball</a></li>
                                        </ul>
                                    </div>
                                    <div class="mega-column">
                                        <h4 class="mega-heading">CLOTHING</h4>
                                        <ul class="mega-item">
                                            <li><a href="product-listing.html">Compression & Nike Pro</a></li>
                                            <li><a href="product-listing.html">Tops & T-Shirts</a></li>
                                            <li><a href="product-listing.html">Polos</a></li>
                                            <li><a href="product-listing.html">Hoodies & Sweatshirts</a></li>
                                            <li><a href="product-listing.html">Jackets & Vests</a></li>
                                            <li><a href="product-listing.html">Pants & Tights</a></li>
                                            <li><a href="product-listing.html">Shorts</a></li>
                                        </ul>
                                    </div>
                                    <div class="mega-column">
                                        <h4 class="mega-heading">Accessories</h4>
                                        <ul class="mega-item">
                                            <li><a href="product-listing.html">Compression & Nike Pro</a></li>
                                            <li><a href="product-listing.html">Tops & T-Shirts</a></li>
                                            <li><a href="product-listing.html">Polos</a></li>
                                            <li><a href="product-listing.html">Hoodies & Sweatshirts</a></li>
                                            <li><a href="product-listing.html">Jackets & Vests</a></li>
                                            <li><a href="product-listing.html">Pants & Tights</a></li>
                                            <li><a href="product-listing.html">Shorts</a></li>
                                        </ul>
                                    </div>
                                    <div class="mega-column">
                                        <h4 class="mega-heading">BRAND</h4>
                                        <ul class="mega-item">
                                            <li><a href="product-listing.html">NIKE</a></li>
                                            <li><a href="product-listing.html">Adidas</a></li>
                                            <li><a href="product-listing.html">Dior</a></li>
                                            <li><a href="product-listing.html">B&G</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="menu-item"><a href="#">Women</a></li>
                        <li class="menu-item"><a href="#">Kids</a></li>
                        <li class="menu-item menu-item-has-children dropdown"><a href="#">News</a>
                            <ul class="sub-menu">
                                <li class="menu-item menu-item-has-children dropdown"><a
                                        href="blog-grid.html">Blog-grid</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="blog-grid.html">Blog Grid 1</a></li>
                                        <li class="menu-item"><a href="blog-grid-2.html">Blog Grid 2</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item"><a href="blog-list.html">Blog List</a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children dropdown"><a href="#">Contact</a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="contact-us.html">Contact Us #1</a></li>
                                <li class="menu-item"><a href="contact-us.html">Contact Us #2</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="navigation__column right">
                    <form class="ps-search--header" action="do_action" method="post">
                        <input class="form-control" type="text" placeholder="Search Product…">
                        <button><i class="ps-icon-search"></i></button>
                    </form>
                    <div class="ps-cart"><a class="ps-cart__toggle" href="#"><span><i>20</i></span><i
                                class="ps-icon-shopping-cart"></i></a>
                        <div class="ps-cart__listing">
                            <div class="ps-cart__content">
                                <div class="ps-cart-item"><a class="ps-cart-item__close" href="#"></a>
                                    <div class="ps-cart-item__thumbnail"><a href="product-detail.html"></a><img
                                            src="{{ asset('siteassets/images/cart-preview/1.jpg') }}" alt=""></div>
                                    <div class="ps-cart-item__content"><a class="ps-cart-item__title"
                                            href="product-detail.html">Amazin’ Glazin’</a>
                                        <p><span>Quantity:<i>12</i></span><span>Total:<i>£176</i></span></p>
                                    </div>
                                </div>
                                <div class="ps-cart-item"><a class="ps-cart-item__close" href="#"></a>
                                    <div class="ps-cart-item__thumbnail"><a href="product-detail.html"></a><img
                                            src="{{ asset('siteassets/images/cart-preview/2.jpg') }}" alt=""></div>
                                    <div class="ps-cart-item__content"><a class="ps-cart-item__title"
                                            href="product-detail.html">The Crusty Croissant</a>
                                        <p><span>Quantity:<i>12</i></span><span>Total:<i>£176</i></span></p>
                                    </div>
                                </div>
                                <div class="ps-cart-item"><a class="ps-cart-item__close" href="#"></a>
                                    <div class="ps-cart-item__thumbnail"><a href="product-detail.html"></a><img
                                            src="{{ asset('siteassets/images/cart-preview/3.jpg') }}" alt=""></div>
                                    <div class="ps-cart-item__content"><a class="ps-cart-item__title"
                                            href="product-detail.html">The Rolling Pin</a>
                                        <p><span>Quantity:<i>12</i></span><span>Total:<i>£176</i></span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-cart__total">
                                <p>Number of items:<span>36</span></p>
                                <p>Item Total:<span>£528.00</span></p>
                            </div>
                            <div class="ps-cart__footer"><a class="ps-btn" href="cart.html">Check out<i
                                        class="ps-icon-arrow-left"></i></a></div>
                        </div>
                    </div>
                    <div class="menu-toggle"><span></span></div>
                </div>
            </div>
        </nav>
    </header>


    @yield('content')

        <div class="ps-footer bg--cover" data-background="images/background/parallax.jpg">
            <div class="ps-footer__content">
                <div class="ps-container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                            <aside class="ps-widget--footer ps-widget--info">
                                <header><a class="ps-logo" href="index.html"><img
                                            src="{{ asset('siteassets/images/logo-white.png') }}" alt=""></a>
                                    <h3 class="ps-widget__title">Address Office 1</h3>
                                </header>
                                <footer>
                                    <p><strong>460 West 34th Street, 15th floor, New York</strong></p>
                                    <p>Email: <a href='mailto:support@store.com'>support@store.com</a></p>
                                    <p>Phone: +323 32434 5334</p>
                                    <p>Fax: ++323 32434 5333</p>
                                </footer>
                            </aside>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                            <aside class="ps-widget--footer ps-widget--info second">
                                <header>
                                    <h3 class="ps-widget__title">Address Office 2</h3>
                                </header>
                                <footer>
                                    <p><strong>PO Box 16122 Collins Victoria 3000 Australia</strong></p>
                                    <p>Email: <a href='mailto:support@store.com'>support@store.com</a></p>
                                    <p>Phone: +323 32434 5334</p>
                                    <p>Fax: ++323 32434 5333</p>
                                </footer>
                            </aside>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 ">
                            <aside class="ps-widget--footer ps-widget--link">
                                <header>
                                    <h3 class="ps-widget__title">Find Our store</h3>
                                </header>
                                <footer>
                                    <ul class="ps-list--link">
                                        <li><a href="#">Coupon Code</a></li>
                                        <li><a href="#">SignUp For Email</a></li>
                                        <li><a href="#">Site Feedback</a></li>
                                        <li><a href="#">Careers</a></li>
                                    </ul>
                                </footer>
                            </aside>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 ">
                            <aside class="ps-widget--footer ps-widget--link">
                                <header>
                                    <h3 class="ps-widget__title">Get Help</h3>
                                </header>
                                <footer>
                                    <ul class="ps-list--line">
                                        <li><a href="#">Order Status</a></li>
                                        <li><a href="#">Shipping and Delivery</a></li>
                                        <li><a href="#">Returns</a></li>
                                        <li><a href="#">Payment Options</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                    </ul>
                                </footer>
                            </aside>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 ">
                            <aside class="ps-widget--footer ps-widget--link">
                                <header>
                                    <h3 class="ps-widget__title">Products</h3>
                                </header>
                                <footer>
                                    <ul class="ps-list--line">
                                        <li><a href="#">Shoes</a></li>
                                        <li><a href="#">Clothing</a></li>
                                        <li><a href="#">Accessries</a></li>
                                        <li><a href="#">Football Boots</a></li>
                                    </ul>
                                </footer>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ps-footer__copyright">
                <div class="ps-container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                            <p>&copy; <a href="#">SKYTHEMES</a>, Inc. All rights Resevered. Design by <a href="#"> Alena
                                    Studio</a></p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                            <ul class="ps-social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- JS Library-->
    <script type="text/javascript" src="{{ asset('siteassets/plugins/jquery/dist/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('siteassets/plugins/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('siteassets/plugins/jquery-bar-rating/dist/jquery.barrating.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('siteassets/plugins/owl-carousel/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('siteassets/plugins/gmap3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('siteassets/plugins/imagesloaded.pkgd.js') }}"></script>
    <script type="text/javascript" src="{{ asset('siteassets/plugins/isotope.pkgd.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('siteassets/plugins/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('siteassets/plugins/jquery.matchHeight-min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('siteassets/plugins/slick/slick/slick.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('siteassets/plugins/elevatezoom/jquery.elevatezoom.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('siteassets/plugins/Magnific-Popup/dist/jquery.magnific-popup.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('siteassets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAx39JFH5nhxze1ZydH-Kl8xXM3OK4fvcg&amp;region=GB"></script>

    <!-- Custom scripts-->
    <script type="text/javascript" src="{{ asset('siteassets/js/main.js') }}"></script>
    <script>
        function bannerSwitcher() {
            next = $('.sec-1-input').filter(':checked').next('.sec-1-input');
            if (next.length) next.prop('checked', true);
            else $('.sec-1-input').first().prop('checked', true);
        }

        var bannerTimer = setInterval(bannerSwitcher, 5000);

        $('nav .controls label').click(function() {
            clearInterval(bannerTimer);
            bannerTimer = setInterval(bannerSwitcher, 5000)
        });
    </script>

    @yield('scripts')
</body>

</html>
