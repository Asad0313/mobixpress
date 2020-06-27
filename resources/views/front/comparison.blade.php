@extends('front.master')

@section('content')

<head>
    <link href="/css/comparision.css" rel="stylesheet">
</head>

<!--/ Intro Single star /-->
<section class="intro-single">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8">
                <div class="title-single-box">
                    <h1 class="title-single">Products Comparison</h1>
                    <span class="color-text-a">Compare products</span>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href={{url('/')}}>Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Comparison
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <form method="post" action="{{ route('comparison.compare') }}" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="container">
{{--            <div class="row" style="margin-top:40px;">--}}
{{--                <div class="col sm-3 col md-3">--}}
{{--                    <label> First Product</label>--}}
{{--                </div>--}}


{{--            </div>--}}
            <div class="row" style="margin-top:10px;">
                <div class="col-sm-3 col-md-6">
                    <label> First Product</label>
                    <select name="product1" class="form-control" id="product1">
                        <option selected disabled>Select Product 1</option>
                        @foreach($products as $product)
                            <option value="{{ $product->id }}">{{ $product->pro_name}}</option>
                        @endforeach
                    </select>
                </div>

{{--                <div class="col sm-3 col md-3">--}}
{{--                   --}}
{{--                </div>--}}


                <div class="col-sm-3 col-md-6">
                    <label> Second Product</label>
                    <select name="product2" class="form-control" id="product2">
                        <option selected disabled>Select product 2</option>
                        @foreach($products as $product)
                            <option value="{{ $product->id }}">{{ $product->pro_name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <br>
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <button type="submit" class="btn-lg btn_compare" style="width:20%;"> Compare</button>
                </div>
            </div>
        </div>

    </form>

</section>
<!--/ Intro Single End /-->

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="container-fliud">
                    <div class="wrapper row">
                        <div class="preview col-md-6">

                            <div class="preview-pic tab-content">
                                <div class="tab-pane active" id="">
                                    <img src="{{(!empty($productID1)) ? url('images',$productID1->image) : '' }}" class="thumbnail zoom" />
                                </div>
                            </div>

                        </div>
                        <div class="details col-md-6">
                            <h3 class="product-title">{{ (!empty($productID1)) ? $productID1->pro_name : '' }}</h3>
                            <h6 class="product-title"></h6>
                            <div class="rating">
                                <div class="stars">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <span class="review-no">41 reviews</span>
                            </div>

                            <h4 class="price">price: <span style="font-size:20px;"><br>
                                {{ (!empty($productID1)) ? $productID1->pro_price : '' }}
                            </span></h4>
                            <h4 class="price">info: <span style="font-size:20px;"><br>
                                {{ (!empty($productID1)) ? $productID1->pro_info : '' }}
                            </span></h4>

                            <h4 class="price">brands: <span style="font-size:20px;"><br>
                                {{ (!empty($productID1)) ? $productID1->brands : '' }}
                            </span></h4>
                            <a href="{{url('/review')}}">
                            <button class="view_rating">view rating </button>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="container-fliud">
                    <div class="wrapper row">
                        <div class="preview col-md-6">

                            <div class="preview-pic tab-content">
                                <div class="tab-pane active" id="">
                                    <img src="{{(!empty($productID2)) ? url('images',$productID2->image) : '' }} " class="thumbnail zoom"/>
                                </div>
                            </div>

                        </div>
                        <div class="details col-md-6">
                            <h3 class="product-title">{{ (!empty($productID2)) ? $productID2->pro_name : '' }}</h3>
                            <h6 class="product-title"></h6>
                            <div class="rating">
                                <div class="stars">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <span class="review-no">41 reviews</span>
                            </div>

                            <h4 class="price">Price: <span style="font-size:20px;"><br>
                                {{ (!empty($productID2)) ? $productID2->pro_price : '' }}
                            </span></h4>
                            <h4 class="price">Info: <span style="font-size:20px;"><br>
                                {{ (!empty($productID2)) ? $productID2->pro_info : '' }}
                            </span></h4>
                            <h4 class="price">brands: <span style="font-size:20px;"><br>
                                {{ (!empty($productID2)) ? $productID2->brands : '' }}
                            </span></h4>

                            <a href="{{url('/review')}}">
                            <button class="view_rating">view rating </button>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<hr>

<!--/ footer Star /-->


<!--/ Footer End /-->
@endsection

