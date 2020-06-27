
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Custom Theme files -->
    <link href="/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <!-- shop css -->
    <link href="/css/shop.css" type="text/css" rel="stylesheet" media="all">
    <link href="/css/flexslider.css" type="text/css" rel="stylesheet" media="all">
    <link href="/css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="/css/fontawesome-all.min.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
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
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Elsie+Swash+Caps:400,900" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
    <!-- //online-fonts -->

<!-- inner banner -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{url('/')}}"><i class="fa fa-home"></i> Home</a>
            </li>

            <li class="breadcrumb-item">
                <a href="{{url('/register')}}"><i class="fa fa-user"></i> Account</a>
            </li>
            <li class="breadcrumb-item">
                <a href="#"><i class="fa fa-star"></i> Wishlist</a>
            </li>
            <li class="breadcrumb-item">
          <a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{url('/cart')}}"><i class="fa fa-shopping-cart"></i> Cart</a>
            </li>

            <li class="breadcrumb-item">
                @if(Auth::check())
                <a href="/home"><i class="fa fa-lock"></i> {{$userData->name}}</a>
            @else
                <a href="{{url('/login')}}"><i class="fa fa-lock"></i> Login</a>
                @endif
            </li>






        </ol>

    </nav>


    <div class="ibanner_w3 pt-sm-5 pt-3">
    <h4 class="head_agileinfo text-center text-capitalize text-center pt-5 text-warning">
        <span class="text-warning">Mobi</span>
        <span class="text-warning">xpress</span></h4>
</div>
<!-- //inner banner -->
<!-- breadcrumbs -->

<!-- //breadcrumbs -->
<!-- Single -->
<div class="innerf-pages section py-5">
    <div class="container">
        <div class="row my-sm-5">
            <div class="col-lg-4 single-right-left">
                <div class="grid images_3_of_2">
                    <div class="flexslider1">
                        <ul class="slides">
                            <li data-thumb="{{url('images',$products->image)}}">
                                <div class="thumb-image">
                                    <img src="{{url('images',$products->image)}}" data-imagezoom="true" alt=" " class="img-fluid" height="20" widht="10"> </div>
                            </li>
                            <li data-thumb="{{url('images',$products->image)}}">
                                <div class="thumb-image">
                                    <img src="{{url('images',$products->image)}}" data-imagezoom="true" alt=" " class="img-fluid" height="20" widht="10"> </div>
                            </li>
                            <li data-thumb="{{url('images',$products->image)}}">
                                <div class="thumb-image">
                                    <img src="{{url('images',$products->image)}}" data-imagezoom="true" alt=" " class="img-fluid" height="20" widht="10"> </div>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 mt-lg-0 mt-5 single-right-left simpleCart_shelfItem">
                <h3>{{$products->pro_name}}</h3>
                </h3>
                <div class="caption">

                    <ul class="rating-single">
                        <li>
                            <a href="#">
                                <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                            </a>
                        </li>
                    </ul>
                    <div class="clearfix"> </div>.
                    <h6>
                        Rs.{{$products->pro_price}}</h6>
                </div>
                <div class="desc_single">
                    <h5>Description</h5>
                    <p>{{$products->pro_info}}</p>
                </div>
                <div class="d-sm-flex justify-content-between">
                    <div class="occasional">
                        <h5 class="sp_title mb-3">Highlights</h5>
                        <ul class="single_specific">
                            <li>
                                <span>BRAND: </span> APPLE</li>
                            <li>
                                <span>Body :</span> Solid</li>
                            <li>
                                <span>RAM :</span> 4GB</li>
                            <li>
                                <span>MEMORY :</span> 64GB BUILTIN AND SUPPORT EXTERNAL CARD</li>
                        </ul>

                    </div>
                    <div class="color-quality mt-sm-0 mt-4">
                        <h5 class="sp_title mb-3">services</h5>
                        <ul class="single_serv">
                            <li>
                                <a href="#">30 Day Return Policy</a>
                            </li>
                            <li class="mt-2">
                                <a href="#">Cash on Delivery available</a>
                            </li>
                                </ul>
                    </div>
                </div>
                <div class="description">
                    <h5>Check delivery, payment options and charges at your location</h5>


&nbsp;
{{--                    <form action="{{url('/addToWishList')}}">--}}
{{--                        {{csrf_field()}}--}}

{{--                        <input type="hidden" value="{{$products->id}}" name="pro_id" />--}}
{{--                        <input type="submit" value="Add To Wishlist" class="btn btn-warning">--}}
{{--                    </form>--}}
                </div>
                <div class="col-sm-6">
                    <div class="total_area">
                        <a href="{{route('AddToCartProduct',$products->id)}}" class="  btn btn-default add-to-cart">
                            <i class="fa fa-shopping-cart"></i>Add to cart</a>

                    </div>
                    <form id="wishlistform" class="form-horizontal" role="form" action="/wishlist" method="post">
                        {{csrf_field()}}

                        <button
                      onclick=" return confirm('Are you Sure you Want to Add This Product Into Wishlist?')"  class="glyphicon glyphicon-heart" type="submit" name="pro_name"
                                value="{{ $products->pro_name }}"
                                style="background: transparent; border: none;width:50px; font-size: 75px; text-align: center; color: hotpink">
                        </button>
                    </form></div>
            </div>
        </div>
    </div>
</div>


<!--// Single -->

<footer id="footer"><!--Footer-->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="companyinfo">
                        <h2><span>MOBI</span>-XPRESS</h2>
                        <p>BEST SELLING WEBSITE OF MOBILES COMING SOON!</p>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="col-sm-3">
                        <div class="video-gallery text-center">
                            <a href="#">
                                <div class="iframe-img">
                                    <img src="/images/home/iframe1.png" alt="" />
                                </div>
                                <div class="overlay-icon">
                                    <i class="fa fa-play-circle-o"></i>
                                </div>
                            </a>
                            <p>Circle of MobiXpress</p>
                            <h2>24 DEC 2019</h2>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="video-gallery text-center">
                            <a href="#">
                                <div class="iframe-img">
                                    <img src="/images/home/iframe2.png" alt="" />
                                </div>
                                <div class="overlay-icon">
                                    <i class="fa fa-play-circle-o"></i>
                                </div>
                            </a>
                            <p>Circle of MobiXpress</p>
                            <h2>24 DEC 2019</h2>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="video-gallery text-center">
                            <a href="#">
                                <div class="iframe-img">
                                    <img src="/images/home/iframe3.png" alt="" />
                                </div>
                                <div class="overlay-icon">
                                    <i class="fa fa-play-circle-o"></i>
                                </div>
                            </a>
                            <p>Circle of MobiXpress</p>
                            <h2>24 DEC 2019</h2>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="video-gallery text-center">
                            <a href="#">
                                <div class="iframe-img">
                                    <img src="/images/home/iframe4.png" alt="" />
                                </div>
                                <div class="overlay-icon">
                                    <i class="fa fa-play-circle-o"></i>
                                </div>
                            </a>
                            <p>Circle of MobiXpress</p>
                            <h2>24 DEC 2019</h2>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="address">
                        <img src="/images/home/map.png" alt="" />
                        <p>SZABIST-100 CAMPUS CLIFTON</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-widget">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Quock Shop</h2>
                        <ul class="nav nav-pills nav-stacked">

                            <li><a href="">SMART PHONE</a></li>
                            <li><a href="">IPAD</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Quock Shop</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="">ACCESSORIES</a></li>
                            <li><a href="">TABLETS</a></li>
                            <li><a href="">SMART PHONE</a></li>
                            <li><a href="">IPAD</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Quock Shop</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="">ACCESSORIES</a></li>
                            <li><a href="">TABLETS</a></li>
                            <li><a href="">SMART PHONE</a></li>
                            <li><a href="">IPAD</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Quock Shop</h2>

                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="">ACCESSORIES</a></li>
                            <li><a href="">TABLETS</a></li>
                            <li><a href="">SMART PHONE</a></li>
                            <li><a href="">IPAD</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 col-sm-offset-1">
                    <div class="single-widget">
                        <h2>About Mobi-xpress</h2>
                        <form action="#" class="searchform">
                            <input type="text" placeholder="Your email address" />
                            <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                            <p>Get the most recent updates from <br />our site and be updated your self...</p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="pull-left">Copyright © 2019 MOB-XPRESS Inc. All rights reserved.</p>
                <p class="pull-right">Designed by
                    <span><a target="_blank" href="{{url('/')}}">MOBIXPRESS</a></span></p>
            </div>
        </div>
    </div>

</footer><!--/Footer-->
<!-- signin Modal -->
<!-- js -->
<script src="/js/jquery-2.2.3.min.js"></script>
<!-- //js -->
<!-- smooth dropdown -->
<script>
    $(document).ready(function () {
        $('ul li.dropdown').hover(function () {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(200);
        }, function () {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(200);
        });
    });
</script>
<!-- //smooth dropdown -->
<!-- script for password match -->

<!-- FlexSlider -->
<script src="/js/jquery.flexslider.js"></script>
<script>
    // Can also be used with $(document).ready()
    $(window).load(function () {
        $('.flexslider1').flexslider({
            animation: "slide",
            controlNav: "thumbnails"
        });
    });
</script>
<!-- //FlexSlider-->
<!-- cart-js -->
<script src="/js/minicart.js"></script>
<script>
    hub.render();

    hub.cart.on('new_checkout', function (evt) {
        var items, len, i;

        if (this.subtotal() > 0) {
            items = this.items();

            for (i = 0, len = items.length; i < len; i++) {}
        }
    });
</script>
<!-- //cart-js -->
<!-- zoom -->
<script src="/js/imagezoom.js"></script>
<!-- zoom-->

<!-- start-smooth-scrolling -->
<script src="/js/move-top.js"></script>
<script src="/js/easing.js"></script>



    <script type="text/javascript">

        $(document).ready(function () {
            $('.ajaxGET').click(function (e) {

                e.preventDefault();

                var url = $(this).find('#url').text();
                var productId = $(this).find('#productId').text();

                var _token = $("input[name='_token']").val();
                $.ajax({



                    method:"GET",
                    url:url,


                    data:{_token: _token, id:productId},
                    success:function (data,status,XHR) {

                        alert("successfully added into the Wishlist!!!!");
                        var totalQuantity = data.totalQuantity;

                        $('#totalQuantity').html(totalQuantity);
                        //get span id and its value and then append
                        var q = parseInt(document.querySelector('#totalQuantity').innerHTML) + 1;
                        document.querySelector('#totalQuantity').innerHTML = q;

                    },

                    error:function (xhr,status,error) {

                        alert(error);

                    }
                });

            });



        });



    </script>
<script>
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();

            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
    });
</script>
<!-- //end-smooth-scrolling -->
<!-- smooth-scrolling-of-move-up -->
<script>
    $(document).ready(function () {
        /*
        var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
        };
        */

        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<script src="/js/SmoothScroll.min.js"></script>
<!-- //smooth-scrolling-of-move-up -->
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/js/bootstrap.js"></script>



