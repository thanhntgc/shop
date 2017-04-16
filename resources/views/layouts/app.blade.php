<?php
?>
<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Subash || Home-5</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('img/icon/favicon.png') }}">

    <!-- All CSS Files -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <!-- Nivo-slider css -->
    <link rel="stylesheet" href="{{ URL::asset('css/nivo-slider.css') }}">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="{{ URL::asset('css/core.css') }}">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="{{ URL::asset('css/shortcode/shortcodes.css') }}">
    <!-- Theme main style -->
    <link rel="stylesheet" href="{{ URL::asset('style.css') }}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{ URL::asset('css/responsive.css') }}">
    <!-- Template color css -->
    <link href="{{ URL::asset('css/color/color-core.css') }}" data-style="styles" rel="stylesheet">
    <!-- User style -->
    <link rel="stylesheet" href="{{ URL::asset('css/custom.css') }}">

    <!-- Modernizr JS -->
    <script src="{{ URL::asset('js/vendor/modernizr-2.8.3.min.js') }}"></script>

    <!-- Scripts -->
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
                                                    'csrfToken' => csrf_token(),
                                                ]); ?>
    </script>
</head>

<body>
<!-- START HEADER AREA -->
<header class="header-area header-wrapper">
    <!-- header-top-bar -->
    <div class="header-top-bar plr-185">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 hidden-xs">
                    <div class="call-us">
                        <p class="mb-0 roboto">(+88) 01234-567890</p>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="top-link clearfix">
                        <ul class="link f-right">
                            <li>
                                <a href="my-account.html">
                                    <i class="zmdi zmdi-account"></i>
                                    My Account
                                </a>
                            </li>
                            <li>
                                <a href="wishlist.html">
                                    <i class="zmdi zmdi-favorite"></i>
                                    Wish List (0)
                                </a>
                            </li>
                            <li>
                                @if (Auth::guest())
                                <a href="{{ route('login') }}"> <i class="zmdi zmdi-lock"></i>Login</a>
                                @else
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                                @endif
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-middle-area -->
    <div class="header-middle-area plr-185">
        <div class="container-fluid">
            <div class="full-width-mega-dropdown">
                <div class="row">
                    <!-- logo -->
                    <div class="col-md-2 col-sm-6 col-xs-12">
                        <div class="logo">
                            <a href="index.html">
                                <img src="{{ URL::asset('img/logo/logo.png') }}" alt="main logo">
                            </a>
                        </div>
                    </div>
                    <!-- primary-menu -->
                    <div class="col-md-8 hidden-sm hidden-xs">
                        <nav id="primary-menu">
                            <ul class="main-menu text-center">
                                @foreach ($catalogs as $catalog)
                                <li><a href="catalog/{{$catalog ->id}}/products">{{$catalog -> name}}</a></li>
                                @endforeach
                            </ul>
                        </nav>
                    </div>
                    <!-- header-search & total-cart -->
                    <div class="col-md-2 col-sm-6 col-xs-12">
                        <div class="search-top-cart  f-right">
                            <!-- header-search -->
                            <div class="header-search f-left">
                                <div class="header-search-inner">
                                    <button class="search-toggle">
                                        <i class="zmdi zmdi-search"></i>
                                    </button>
                                    <form action="#">
                                        <div class="top-search-box">
                                            <input type="text" placeholder="Search here your product...">
                                            <button type="submit">
                                                <i class="zmdi zmdi-search"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- total-cart -->
                            <div class="total-cart f-left">
                                <div class="total-cart-in">
                                    <div class="cart-toggler">
                                        <a href="#">
                                            <span class="cart-quantity">02</span><br>
                                            <span class="cart-icon">
                                                        <i class="zmdi zmdi-shopping-cart-plus"></i>
                                                    </span>
                                        </a>
                                    </div>
                                    <ul>
                                        <li>
                                            <div class="top-cart-inner your-cart">
                                                <h5 class="text-capitalize">Your Cart</h5>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="total-cart-pro">
                                                <!-- single-cart -->
                                                <div class="single-cart clearfix">
                                                    <div class="cart-img f-left">
                                                        <a href="#">
                                                            <img src="resource-demo/img/cart/1.jpg" alt="Cart Product"/>
                                                        </a>
                                                        <div class="del-icon">
                                                            <a href="#">
                                                                <i class="zmdi zmdi-close"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="cart-info f-left">
                                                        <h6 class="text-capitalize">
                                                            <a href="#">Dummy Product Name</a>
                                                        </h6>
                                                        <p>
                                                            <span>Brand <strong>:</strong></span>Brand Name
                                                        </p>
                                                        <p>
                                                            <span>Model <strong>:</strong></span>Grand s2
                                                        </p>
                                                        <p>
                                                            <span>Color <strong>:</strong></span>Black, White
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- single-cart -->
                                                <div class="single-cart clearfix">
                                                    <div class="cart-img f-left">
                                                        <a href="#">
                                                            <img src="resource-demo/img/cart/1.jpg" alt="Cart Product"/>
                                                        </a>
                                                        <div class="del-icon">
                                                            <a href="#">
                                                                <i class="zmdi zmdi-close"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="cart-info f-left">
                                                        <h6 class="text-capitalize">
                                                            <a href="#">Dummy Product Name</a>
                                                        </h6>
                                                        <p>
                                                            <span>Brand <strong>:</strong></span>Brand Name
                                                        </p>
                                                        <p>
                                                            <span>Model <strong>:</strong></span>Grand s2
                                                        </p>
                                                        <p>
                                                            <span>Color <strong>:</strong></span>Black, White
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="top-cart-inner subtotal">
                                                <h4 class="text-uppercase g-font-2">
                                                    Total =
                                                    <span>$ 500.00</span>
                                                </h4>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="top-cart-inner view-cart">
                                                <h4 class="text-uppercase">
                                                    <a href="#">View cart</a>
                                                </h4>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="top-cart-inner check-out">
                                                <h4 class="text-uppercase">
                                                    <a href="#">Check out</a>
                                                </h4>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- END HEADER AREA -->

<!-- START MOBILE MENU AREA -->
<div class="mobile-menu-area hidden-lg hidden-md">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul>
                            @foreach ($catalogs as $catalog)
                            <li><a href="catalog/{{$catalog ->id}}/products">{{$catalog -> name}}</a></li>
                            @endforeach
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END MOBILE MENU AREA -->

<!-- START SLIDER AREA -->
<div class="slider-area bg-3 bg-opacity-black-60 dotted-overlay ptb-150 mb-80">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="slider-desc-3 slider-desc-4  text-center">
                    <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                        <h1 class="slider2-title-2 cd-headline clip is-full-width">
                                    <span class="cd-words-wrapper">
                                        <b class="is-visible">Iphone 7+</b>
                                        <b>Ipad Pro</b>
                                        <b>Macbook 2016</b>
                                        <b>Iphone 7</b>
                                        <b>Iphone 6s</b>
                                    </span>
                        </h1>
                    </div>
                    <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">
                        <h2 class="slider2-title-3"></h2>
                    </div>
                    <div class="slider-button wow fadeInUp" data-wow-duration="1s" data-wow-delay="2.5s">
                        <a href="#" class="button extra-small button-white">
                            <span class="text-uppercase">Buy now</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END SLIDER AREA -->

@yield('content')


<!-- START FOOTER AREA -->
<footer id="footer" class="footer-area footer-2">
    <div class="footer-top footer-top-2 text-center ptb-60">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="footer-logo">
                        <img src="{{ URL::asset('img/logo/logo.png') }}" alt="">
                    </div>
                    <ul class="footer-menu-2">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Products</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Pages</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom footer-bottom-2 text-center gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-5">
                    <div class="copyright-text copyright-text-2">
                        <p>&copy; <a href="https://themeforest.net/user/codecarnival/portfolio" target="_blank">CodeCarnival</a> 2016. All Rights
                            Reserved.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <ul class="footer-social footer-social-2">
                        <li>
                            <a class="facebook" href="" title="Facebook"><i class="zmdi zmdi-facebook"></i></a>
                        </li>
                        <li>
                            <a class="google-plus" href="" title="Google Plus"><i class="zmdi zmdi-google-plus"></i></a>
                        </li>
                        <li>
                            <a class="twitter" href="" title="Twitter"><i class="zmdi zmdi-twitter"></i></a>
                        </li>
                        <li>
                            <a class="rss" href="" title="RSS"><i class="zmdi zmdi-rss"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-3">
                    <ul class="footer-payment">
                        <li>
                            <a href="#"><img src="{{ URL::asset('img/payment/1.jpg') }}" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="{{ URL::asset('img/payment/1.jpg') }}" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="{{ URL::asset('img/payment/1.jpg') }}" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="{{ URL::asset('img/payment/1.jpg') }}" alt=""></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- END FOOTER AREA -->

<!-- START QUICKVIEW PRODUCT -->
<div id="quickview-wrapper">
    <!-- Modal -->
    <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="modal-product clearfix">
                        <div class="product-images">
                            <div class="main-image images">
                                <img alt="" src="img/product/quickview.jpg">
                            </div>
                        </div><!-- .product-images -->

                        <div class="product-info">
                            <h1>Aenean eu tristique</h1>
                            <div class="price-box-3">
                                <div class="s-price-box">
                                    <span class="new-price">£160.00</span>
                                    <span class="old-price">£190.00</span>
                                </div>
                            </div>
                            <a href="single-product-left-sidebar.html" class="see-all">See all features</a>
                            <div class="quick-add-to-cart">
                                <form method="post" class="cart">
                                    <div class="numbers-row">
                                        <input type="number" id="french-hens" value="3">
                                    </div>
                                    <button class="single_add_to_cart_button" type="submit">Add to cart</button>
                                </form>
                            </div>
                            <div class="quick-desc">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est
                                at libero.
                            </div>
                            <div class="social-sharing">
                                <div class="widget widget_socialsharing_widget">
                                    <h3 class="widget-title-modal">Share this product</h3>
                                    <ul class="social-icons clearfix">
                                        <li>
                                            <a class="facebook" href="#" target="_blank" title="Facebook">
                                                <i class="zmdi zmdi-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="google-plus" href="#" target="_blank" title="Google +">
                                                <i class="zmdi zmdi-google-plus"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="twitter" href="#" target="_blank" title="Twitter">
                                                <i class="zmdi zmdi-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="pinterest" href="#" target="_blank" title="Pinterest">
                                                <i class="zmdi zmdi-pinterest"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="rss" href="#" target="_blank" title="RSS">
                                                <i class="zmdi zmdi-rss"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .product-info -->
                    </div><!-- .modal-product -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div>
    <!-- END Modal -->
</div>
<!-- END QUICKVIEW PRODUCT -->

<!-- Body main wrapper end -->


<!-- Placed JS at the end of the document so the pages load faster -->

<!-- jquery latest version -->
<script src="{{ URL::asset('js/vendor/jquery-3.1.1.min.js') }}"></script>
<!-- Bootstrap framework js -->
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
<!-- jquery.nivo.slider js -->
<script src="{{ URL::asset('lib/js/jquery.nivo.slider.js') }}"></script>
<!-- All js plugins included in this file. -->
<script src="{{ URL::asset('js/plugins.js') }}"></script>
<!-- Main js file that contents all jQuery plugins activation. -->
<script src="{{ URL::asset('js/main.js') }}"></script>

</body>

</html>