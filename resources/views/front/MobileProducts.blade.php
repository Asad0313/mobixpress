@extends('front.master')

@section('content')



    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="{{url('/')}}" class="active">Home</a></li>
                            <li class="dropdown"><a href="{{url('review')}}">View Your Reviews<i class="fa fa-angle-down"></i></a>



                            </li>
                            <li class="dropdown"><a href="{{url('review/create')}}">Review & Rating Of Product<i class="fa fa-angle-down"></i></a>

                            </li>

                            <li><a href="{{url('/contact')}}">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="search_box pull-right">

                        <form action="search" method="get">
                            <input type="text" name="searchText" placeholder="Search"/>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-bottom-->
    </header><!--/header-->

    <section id="slider"><!--slider-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-sm-6">
                                    <h1><span>MOBI</span>-XPRESS</h1>
                                    <h2>MOBI-XPRESS MOBILE SHOP</h2>
                                    <p>BEST SELLING WEBSITE OF MOBILES COMING SOON!,Now you will easily get Recommendations </p>
                                    <button type="button" class="btn btn-default get">Get it now</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="/images/home/iphonex2.jpeg" class="img-fluid"  alt="Responsive image" />
                                    <img src="/images/home/pricing.png"  class="pricing" alt="" />
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>MOBI</span>-XPRESSS</h1>
                                    <h2>100% PTA APPROVED PHONES ARE HERE!!</h2>
                                    <p>Pakistan # 01 Best Selling Mobile Phones Recommendation system will be launched soon!. </p>
                                    <button type="button" class="btn btn-default get">Get it now</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="/images/home/Samsung.jpeg" class="img-fluid"  alt="Responsive image" />
                                    <img src="/images/home/pricing.png"  class="pricing" alt="" />
                                </div>
                            </div>

                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>MOBI</span>-XPRESS</h1>
                                    <h2>MOBI-XPRESS MOBILE SHOP</h2>
                                    <p>BEST SELLING WEBSITE OF MOBILES COMING SOON! Here you will get daily coupons for discount! </p>
                                    <button type="button" class="btn btn-default get">Get it now</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="/images/home/Huawei.jpeg" class="img-fluid"  alt="Responsive image" />
                                    <img src="/images/home/pricing.png" class="pricing" alt="" />
                                </div>
                            </div>

                        </div>

                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section><!--/slider-->


    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Category</h2>
                        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="{{route('mobileforproducts')}}">MobilePhones</a>

                                    </h4>
                                </div>

                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="{{route('tabletsforproducts')}}">TABLETS OR IPADS</a>

                                    </h4>
                                </div>

                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="{{route('accessoriesforproducts')}}">ACCESSORIES</a>

                                    </h4>
                                </div>

                            </div>


                        </div><!--/category-products-->


                        <div class="brands_products"><!--brands_products-->
                            <h2>Brands</h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="#"> <span class="pull-right">(50)</span>LG</a></li>
                                    <li><a href="#"> <span class="pull-right">(56)</span>APPLE</a></li>
                                    <li><a href="#"> <span class="pull-right">(27)</span>NOKIA</a></li>
                                    <li><a href="#"> <span class="pull-right">(32)</span>SAMSUNG</a></li>
                                    <li><a href="#"> <span class="pull-right">(5)</span>HUAWEI</a></li>
                                    <li><a href="#"> <span class="pull-right">(9)</span>OPPO</a></li>
                                    <li><a href="#"> <span class="pull-right">(4)</span>MOTROLLA</a></li>
                                </ul>
                            </div>
                        </div><!--/brands_products-->

                        <div class="price-range"><!--price-range-->
                            <h2>Price Range</h2>
                            <div class="well text-center">
                                <input type="range" class="span2"   name="price-min"   id="s12" value="1000" min="1000" max="100000" step="1000"><br />
                                {{--                            <input type="range"  class="span2"  data-slider-min="10000" data-slider-max="100000" data-slider-step="5" data-slider-value="[250,450]" id="price-min" ><br />--}}
                                <b class="pull-left">Rs1000</b> <b class="pull-right">Rs 100000</b>
                                <span id="12"></span>
                            </div>
                        </div><!--/price-range-->


                        <div class="shipping text-center"><!--shipping-->
                            <img src="/images/home/shipping.jpg" alt="" />
                        </div><!--/shipping-->

                    </div>
                </div>




                <div class="col-sm-9 padding-right">

                    <div class="features_items"><!--features_items-->

                        <h2 class="title text-center">Features Items</h2>

                        @foreach($products as $product)
                            <div class="col-sm-4 ">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="{{url('images',$product->image) }}" src="{{url('image',$product->image)}}" class="img-fluid wow bounceInLeft" alt="Responsive image" />
                                            <h2>RS {{$product->pro_price}}</h2>
                                            <p>{{$product->pro_name}}</p>
                                            <a href="{{url('/product_details',$product->id)}}" class="btn btn-default add-to-cart">View Products</a>

                                            <a href="{{route('AddToCartProduct',$product->id)}}" class=" ajaxGET btn btn-default add-to-cart">
                                                <i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                                <h2>RS {{$product->pro_price}}</h2>
                                                <p>{{$product->pro_name}}</p>
                                                <p>{{$product->brands}}</p>
                                                <a href="{{route('AddToCartProduct',$product->id)}}" class=" ajaxGET btn btn-default add-to-cart">
                                                    <i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                <a href="{{url('/product_details',$product->id)}}" class="btn btn-default add-to-cart">View Products</a>


                                            </div>
                                        </div>
                                    </div>
                                    <div class="choose">
                                        <ul class="nav nav-pills nav-justified">
                                            <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                            <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                        </ul>
                                    </div>

                                </div>



                            </div>

                            {{--                        @empty--}}
                            {{--                            <h3>No products</h3>--}}


                        @endforeach
                    </div>








                    <div class="tab-pane fade" id="kids" >
                        <div class="col-sm-3">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="/images/home/gallery1.jpg" alt="" />
                                        <h2>$56</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="/images/home/gallery2.jpg" alt="" />
                                        <h2>$56</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="/images/home/gallery3.jpg" alt="" />
                                        <h2>$56</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="/images/home/gallery4.jpg" alt="" />
                                        <h2>$56</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="poloshirt" >
                        <div class="col-sm-3">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="/images/home/gallery2.jpg" alt="" />
                                        <h2>$56</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="/images/home/gallery4.jpg" alt="" />
                                        <h2>$56</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="/images/home/gallery3.jpg" alt="" />
                                        <h2>$56</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="/images/home/gallery1.jpg" alt="" />
                                        <h2>$56</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/category-tab-->
        </div>
        </div>
    </section>

    <div class="recommended_items"><!--recommended_items-->
        <h2 class="title text-center">recommended items</h2>

        <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">
                    <div class="col-sm-4">
                        <div class="product-image-wrapper wow rubberBand">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="/images/home/tablet1.jpg" class="img-md-fluid  " alt="Responsive image" />
                                    <h2>RS.17000</h2>
                                    <p>SAMSUNG TAB 2</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper wow rubberBand">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="/images/home/ipad2.jpg"   alt="" />
                                    <h2>RS.25000</h2>
                                    <p>IPAD 2</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper wow rubberBand">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="/images/home/ipad6.jpg"  alt="" />
                                    <h2>RS.36000</h2>
                                    <p>IPAD 3</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="col-sm-4">
                        <div class="product-image-wrapper wow rubberBand">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="/images/home/oppoA9.jpg"  alt="" />
                                    <h2>RS.425000</h2>
                                    <p id="asad">OPPO A9</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper wow rubberBand">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="/images/home/oppo1.jpg"  alt="" />
                                    <h2>RS.42000</h2>
                                    <p>VIVO V10</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper wow rubberBand">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="/images/home/huawei.jpg"   alt="" />
                                    <h2>RS.56000</h2>
                                    <p>HUAWEI P8 LITE</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>
    </div>
    </div>
    </div>

    </div><!--/recommended_items-->


    </div>
    </section>





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
                                <p>Circle of Hands</p>
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
                                <p>Circle of Hands</p>
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
                                <p>Circle of Hands</p>
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
                                <p>Circle of Hands</p>
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
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>About Mobi-Xpress</h2>

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
                            <h2>About Mobi-Xpress</h2>
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
                    <p class="pull-right">Designed by <span><a target="_blank" href="{{url('/')}}">MOBIXPRESS</a></span></p>
                </div>
            </div>
        </div>

    </footer><!--/Footer-->

    {{--<script type="text/javascript">--}}

    {{--    $(document).ready(function () {--}}
    {{--       $('.ajaxGET').click(function (e) {--}}

    {{--           e.preventDefault();--}}

    {{--           var url = $(this).fin--}}
    {{--           $.ajax({--}}

    {{--              method:"GET",--}}
    {{--               url:'',--}}

    {{--               data:{},--}}
    {{--               success:function (data,status,XHR) {--}}
    {{--                   --}}
    {{--               },--}}

    {{--               error:function (xhr,status,error) {--}}

    {{--                   --}}
    {{--               }--}}
    {{--           });--}}

    {{--       });--}}

    {{--    });--}}


    {{--</script>--}}

    <script src="/js/jquery.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.scrollUp.min.js"></script>
    <script src="/js/price-range.js"></script>
    <script src="/js/jquery.prettyPhoto.js"></script>
    <script src="/js/main.js"></script>


@endsection