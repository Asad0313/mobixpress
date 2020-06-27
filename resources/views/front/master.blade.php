<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>MobiXpress |E-Phones</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/prettyPhoto.css" rel="stylesheet">
    <link href="/css/price-range.css" rel="stylesheet">
    <link href="/css/animate.css" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">
    <link href="/css/responsive.css" rel="stylesheet">
    <link href="/css/algolia.css" rel=stylesheet />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

    <!--[if lt IE 9]>
    <script src="/js/html5shiv.js"></script>
    <script src="/js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/images/ico/apple-touch-icon-57-precomposed.png">



    <script src="/js/jquery.js"></script>


</head><!--/head-->

<body>
<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i> +92 324 244 6105</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> mobixpress@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="{{url('/auth/facebook')}}"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->

    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="{{url('/')}}"><img src="/images/home/MobiLogo.png" width="80" height="80" class="thumbnail zoom"  alt="" /></a>
                    </div>
                    <div class="btn-group pull-right">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                PAKISTAN
                                <span class="caret"></span>
                            </button>
{{--                            <ul class="dropdown-menu">--}}
{{--                                <li><a href="#">Canada</a></li>--}}
{{--                                <li><a href="#">UK</a></li>--}}
{{--                            </ul>--}}
                        </div>

                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                RUPEES
                                <span class="caret"></span>
                            </button>
{{--                            <ul class="dropdown-menu">--}}
{{--                                <li><a href="#">Canadian Dollar</a></li>--}}
{{--                                <li><a href="#">Pound</a></li>--}}
{{--                            </ul>--}}
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            @if(Auth::check())
{{--                                <li> {{$userData->name}}<i class="dropdown-menu"></i></li>--}}
{{--                                <div class="dropdown-menu" aria-labelledby="pagesDropdown" {{$userData->name}}>--}}
{{--                                    <h6 class="dropdown-header" href="{{url('/logout')}}">Logout</h6>--}}
                            @endif
                            <li><a href="{{url('/register')}}"><i class="fa fa-user"></i>Account</a></li>
                            <li><a href="{{url('/recommendation')}}"><i class="fa fa-star"></i>Recommendation</a></li>
                            <li><a href="{{route('checkoutProducts')}}"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                            <li><a href="{{url('/cart')}}">
                                    <i class="fa fa-shopping-cart"></i>
                                      @if(Session::has('cart'))
                                          <span id="totalQuantity"  class="badge">
                                              {{Session::get('cart')->totalQuantity}}


                                          </span>

                                    @endif



                                    Cart</a></li>


                            @if(Auth::check())
                            <li><a href="/home"><i class="fa fa-lock"></i> {{$userData->name}}</a></li>

                            @else
                                <li><a href="{{url('/login')}}"><i class="fa fa-lock"></i> Login</a></li>
                            @endif
{{--                            <li><a href="{{url('/cart')}}}"><i class="fa fa-shopping-cart">View Cart</i>({{Cart::count}}) ({{Cart::total}}) </a> </li>--}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->
</header>
@yield('content')
</body>
</html>
