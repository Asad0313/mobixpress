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
{{--            <div class="aa-input-container" id="aa-input-container">--}}
{{--                <input type="search" id="aa-search-input" class="aa-input-search" placeholder="Search With Algolia..." name="search" autocomplete="off" />--}}
{{--                <svg class="aa-input-icon" viewBox="654 -372 1664 1664">--}}
{{--                    <path d="M1806,332c0-123.3-43.8-228.8-131.5-316.5C1586.8-72.2,1481.3-116,1358-116s-228.8,43.8-316.5,131.5  C953.8,103.2,910,208.7,910,332s43.8,228.8,131.5,316.5C1129.2,736.2,1234.7,780,1358,780s228.8-43.8,316.5-131.5  C1762.2,560.8,1806,455.3,1806,332z M2318,1164c0,34.7-12.7,64.7-38,90s-55.3,38-90,38c-36,0-66-12.7-90-38l-343-342  c-119.3,82.7-252.3,124-399,124c-95.3,0-186.5-18.5-273.5-55.5s-162-87-225-150s-113-138-150-225S654,427.3,654,332  s18.5-186.5,55.5-273.5s87-162,150-225s138-113,225-150S1262.7-372,1358-372s186.5,18.5,273.5,55.5s162,87,225,150s113,138,150,225  S2062,236.7,2062,332c0,146.7-41.3,279.7-124,399l343,343C2305.7,1098.7,2318,1128.7,2318,1164z" />--}}
{{--                            </svg>--}}
{{--        </div>--}}
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

<div class="container">
    @include('front.alert')

</div>

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
                                <h1><span>MOBI</span>-XPRESS</h1>
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
                            <div class="panel-heading" >
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
                                <li><a href="{{route('appleforbrands')}}"> <span class="pull-right">(56)</span>APPLE</a></li>
                                <li><a href="#"> <span class="pull-right">(27)</span>NOKIA</a></li>
                                <li><a href="#"> <span class="pull-right">(32)</span>SAMSUNG</a></li>
                                <li><a href="{{route('huaweiforbrands')}}"> <span class="pull-right">(5)</span>HUAWEI</a></li>
                                <li><a href="{{route('oppoforbrands')}}"> <span class="pull-right">(9)</span>OPPO</a></li>
                                <li><a href="#"> <span class="pull-right">(4)</span>MOTROLLA</a></li>
                            </ul>
                        </div>
                    </div><!--/brands_products-->

                    <div class="price-range"><!--price-range-->
                        <h2>Price Range</h2>
                        <div class="well text-center">
                            <input type="range" class="span2"   name="price-min"   id="s12" value="1000" min="1,000" max="100000" step="1000"><br />
{{--                            <input type="range"  class="span2"  data-slider-min="10000" data-slider-max="100000" data-slider-step="5" data-slider-value="[250,450]" id="price-min" ><br />--}}
                            <b class="pull-left">Rs1,000</b> <b class="pull-right">Rs 1,00,000</b>
                            <span id="12"></span>
                        </div>
                    </div><!--/price-range-->




                    <div class="shipping text-center"><!--shipping-->
                        <img src="/images/home/shipping.jpg" alt="" />
                    </div><!--/shipping-->

                </div>
            </div>




            <div class="col-sm-9 padding-right">

                <div class="features_items" id="test"><!--features_items-->

                    <h2 class="title text-center">Features Items</h2>

                    @if(Session::has('flash_message'))
                        <div class="alert alert-danger">{{Session::get('flash_message')}}</div>
                    @endif

                        @foreach($products as $product)
                            <div class="col-sm-4 ">

                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">

                                            {{csrf_field()}}


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
                                                <a href="#" class=" ajaxPOST btn btn-default add-to-cart">

                                                    <div id="url" style="display: none">{{route('AddToCartAjaxPost')}}</div>
                                                    <div style="display: none" id="productId">{{$product->id}}</div>
                                                    <i class="fa fa-shopping-cart"></i>Add to cart</a>

                                                <a href="{{url('/product_details',$product->id)}}" class="btn btn-default add-to-cart">View Products</a>


                                            </div>
                                        </div>
                                        </div>




                                        <div class="choose">
                                            <ul class="nav nav-pills nav-justified">



                                                <li><a href="{{url('/wishlist')}}"><i class="fa fa-plus-square"></i>Add to wishlist


                                                    </a> </li>
                                                <li><a href="{{url('/comparison')}}"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                            </ul>
                                        </div>

                                    </div>




                            </div>

{{--                        @empty--}}
{{--                            <h3>No products</h3>--}}


                        @endforeach
                </div>

                    {{$products->links()}}
                    <div class="category-tab"><!--category-tab-->
                        <div class="col-sm-12">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tshirt" data-toggle="tab">Mobile Phones</a></li>
                                <li><a href="#blazers" data-toggle="tab">Ipad</a></li>
                                <li><a href="#sunglass" data-toggle="tab">Tablets</a></li>
                                <li><a href="#kids" data-toggle="tab">Accessories</a></li>

                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="tshirt" >
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="images/home/oppo.jpg" alt="" />
                                                <h2>Rs.55000</h2>
                                                <p>HUAWEI P8 LITE</p>
                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="images/home/oppoA9.jpg" alt="" />
                                                <h2>Rs.34000</h2>
                                                <p>OPPO A9</p>
                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="images/home/huawei.jpg" alt="" />
                                                <h2>Rs.45000</h2>
                                                <p>Huawei Smart A602 </p>
                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="images/home/oppo1.jpg" alt="" />
                                                <h2>Rs.42000</h2>
                                                <p>VIVO V10</p>
                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="blazers" >
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="images/home/ipad5.jpg" alt="" />
                                                <h2>RS.38000</h2>
                                                <p>IPAD 3</p>
                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="images/home/tablet3.jpg" alt="" />
                                                <h2>RS.25000</h2>
                                                <p>Samsung Tab 2</p>
                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="images/home/ipad3.jpg" alt="" />
                                                <h2>RS.18000</h2>
                                                <p>IPAD 2 mini</p>
                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="images/home/ipad4.jpg" alt="" />
                                                <h2>RS.19000</h2>
                                                <p>IPAD 2</p>
                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="sunglass" >
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="images/home/ipad2.jpg" alt="" />
                                                <h2>RS.14000</h2>
                                                <p>IPAD 1</p>
                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="images/home/tablet1.jpg" alt="" />
                                                <h2>RS. 17000</h2>
                                                <p>Samsung Tab 2</p>
                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="images/home/tablet2.jpg" alt="" />
                                                <h2>RS. 12000</h2>
                                                <p>NEXUS ASUS 2</p>
                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="images/home/ipad6.jpg" alt="" />
                                                <h2>RS.41000</h2>
                                                <p>IPAD 3</p>
                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="kids" >
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="images/home/airpods.jpg" alt="" />
                                                <h2>RS.22000</h2>
                                                <p>AIRPODS 2</p>
                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="images/home/datacable.jpg" alt="" />
                                                <h2>RS.250</h2>
                                                <p>DATA CABLE</p>
                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="images/home/charger1.jpg" alt="" />
                                                <h2>RS.500</h2>
                                                <p>CLEVER CHARGING DOCK</p>
                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="images/home/charger1.jpg" alt="" />
                                                <h2>RS.500</h2>
                                                <p>CLEVER CHARGING DOCK</p>
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
                                                <img src="images/home/gallery2.jpg" alt="" />
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
                                                <img src="images/home/gallery4.jpg" alt="" />
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
                                                <img src="images/home/gallery3.jpg" alt="" />
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
                                                <img src="images/home/gallery1.jpg" alt="" />
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

<script type="text/javascript">

    $(document).ready(function () {
       $('.ajaxPOST').click(function (e) {

           e.preventDefault();

           var url = $(this).find('#url').text();
           var productId = $(this).find('#productId').text();

           var _token = $("input[name='_token']").val();
           $.ajax({



              method:"POST",
               url:url,


               data:{_token: _token, id:productId},
               success:function (data,status,XHR) {

                  alert("successfully addedinto the  cart!!!!");
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

 $('#s12').change(function(e){
    let price = e.target.value;
    $('#12').html(e.target.value)
    $.get('products/fetchpriceajax',{price: e.target.value},(data,status,xhr)=>{
        render(data);
    })
 })

    const render = (data)=>{
     const parent = document.querySelector('#test');
     const template = document.querySelector('#productFilter').innerHTML;
     const html = Mustache.render(template,data);
     parent.innerHTML = html;
    }

</script>

<script src="/js/jquery.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.scrollUp.min.js"></script>
<script src="/js/price-range.js"></script>
<script src="/js/jquery.prettyPhoto.js"></script>
<script src="/js/main.js"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src ="/js/mustache.js"></script>
<script src = "/js/handlebars.js"></script>
<script id="productFilter" type="text/x-handlebars-template">

    @{{#data}}
    <div class="col-sm-4 ">

        <div class="product-image-wrapper">
            <div class="single-products">
                <div class="productinfo text-center">

                    {{csrf_field()}}


                    <img src="/images/@{{image}}" src="{{url('image',$product->image)}}" class="img-fluid wow bounceInLeft" alt="Responsive image" />
                    <h2>RS @{{pro_price}}</h2>
                    <p>@{{pro_name}}</p>
                    <a href="{{url('/product_details','@{{id}')}}" class="btn btn-default add-to-cart">View Products</a>

                    <a href="{{url('/product/addtocart/@{{ id }')}}}" class=" ajaxGET btn btn-default add-to-cart">
                        <i class="fa fa-shopping-cart"></i>Add to cart</a>
                </div>
                <div class="product-overlay">
                    <div class="overlay-content">
                        <h2>RS @{{pro_price}}</h2>
                        <p>@{{pro_name}}</p>
                        <a href="#" class=" ajaxPOST btn btn-default add-to-cart">

                            <div id="url" style="display: none">{{route('AddToCartAjaxPost')}}</div>
                            <div style="display: none" id="productId">{{$product->id}}</div>
                            <i class="fa fa-shopping-cart"></i>Add to cart</a>

                        <a href="{{url('/product_details',$product->id)}}" class="btn btn-default add-to-cart">View Products</a>


                    </div>
                </div>
            </div>




            <div class="choose">
                <ul class="nav nav-pills nav-justified">



                    <li><a href="{{url('/wishlist')}}"><i class="fa fa-plus-square"></i>Add to wishlist


                        </a> </li>
                    <li><a href="{{url('/comparison')}}"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                </ul>
            </div>

        </div>




    </div>

    @{{/data}}
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
    <script>

        var wow = new WOW(
            {
                boxClass:     'wow',      // animated element css class (default is wow)
                animateClass: 'animated', // animation css class (default is animated)
                offset:       0,          // distance to the element when triggering the animation (default is 0)
                mobile:       true,       // trigger animations on mobile devices (default is true)
                live:         true,             // act on asynchronously loaded content (default is true)
                animationdelay: -2,
                callback:     function(box) {
                    // the callback is fired every time an animation is started
                    // the argument that is passed in is the DOM node being animated
                },
                scrollContainer: null,    // optional scroll container selector, otherwise use window,
                resetAnimation: true,     // reset animation on end (default is true)
            }
        );
        wow.init();
    </script>
<script src="https://cdn.jsdelivr.net/npm/algoliasearch@3/dist/algoliasearchLite.min.js"></script>
{{--<script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>--}}
    <script src="/js/algolia.js"></script>

@endsection


