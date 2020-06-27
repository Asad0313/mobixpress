@extends('front.master')

@section('content')

    <head>

        <link href="/css/review.css"rel="stylesheet">
    </head>

<!--/ REVIEW FORM START /-->

<div class="container">
    <div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">


            <div style="padding-top:0px" class="panel-body">

                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                <form id="reviewform" class="form-horizontal" action="/review/{{ $review->ReviewID }}" method="post">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="PUT">


                    <h6> User ID </h6>
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input type="text" id="users_id" class="form-control" name="users_id"
                               value="{{ Auth::user()->id }}" disabled>
                    </div>

                    <h6> Email Address </h6>
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="Email" type="email" class="form-control" name="Email"
                               value="{{ Auth::user()->email }}" disabled>
                    </div>
                    <h6> Full Name </h6>
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="FullName" type="text" class="form-control" name="FullName"
                               value="{{ Auth::user()->name }}" placeholder="Full Name">
                    </div>

                    <h6> Select Product </h6>
                    <select name="pro_name" class="form-control" id="pro_name" style="width:100%" ;>
                        <option selected disabled>Select Product</option>
                        @foreach($products as $product)
                            <option>{{ $product->pro_name }}</option>
                        @endforeach
                    </select>
                    <Br>
                    <hr>
                    <div class="form-group">

                        <h6> productQuality </h6>
                        <input name="productQuality" type="range" min="1" max="5"
                               value="{{ $review->productQuality }}" class="slider" id="myRange">
                        <p>Value: <span id="demo"></span></p>
                        <script>
                            var slider = document.getElementById("myRange");
                            var output = document.getElementById("demo");
                            output.innerHTML = slider.value; // Display the default slider value
                            slider.oninput = function () {
                                output.innerHTML = this.value;
                            }
                        </script>
                    </div>
                    <div class="form-group">

                        <Br>
                        <hr>
                        <h6> DeliveryService </h6>
                        <input type="range" min="1" max="5" value="{{ $review->DeliveryService }}" class="slider" id="myRange2"
                               name="DeliveryService">
                        <p>Value: <span id="demo2"></span></p>
                        <script>
                            var slider2 = document.getElementById("myRange2");
                            var output2 = document.getElementById("demo2");
                            output2.innerHTML = slider2.value; // Display the default slider value
                            slider2.oninput = function () {
                                output2.innerHTML = this.value;
                            }
                        </script>
                    </div>
                    <div class="form-group">

                        <Br>
                        <hr>
                        <h6> otherServices </h6>
                        <input type="range" min="1" max="5" value="{{ $review->otherServices }}" class="slider"
                               id="myRange3" name="otherServices">
                        <p>Value: <span id="demo3"></span></p>
                        <script>
                            var slider3 = document.getElementById("myRange3");
                            var output3 = document.getElementById("demo3");
                            output3.innerHTML = slider3.value; // Display the default slider value
                            slider3.oninput = function () {
                                output3.innerHTML = this.value;
                            }
                        </script>
                    </div>
                    <div class="form-group">

                        <Br>
                        <hr>
                        <h6> other </h6>
                        <input type="range" min="1" max="5" value="{{ $review->other }}" class="slider"
                               id="myRange4" name="other">
                        <p>Value: <span id="demo4"></span></p>
                        <script>
                            var slider4 = document.getElementById("myRange4");
                            var output4 = document.getElementById("demo4");
                            output4.innerHTML = slider4.value; // Display the default slider value
                            slider4.oninput = function () {
                                output4.innerHTML = this.value;
                            }
                        </script>
                    </div>

                    <div class="form-group">

                        <input type="text" name="YourViews" class="form-control" style="height:200px;"
                               value="{{ $review->YourViews }}" placeholder="Your Views">


                    </div>


                    <div style="margin-bottom: 25px" class="input-group">
{{--                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>--}}
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-warning" value="UPDATE REVIEW ">

                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12 control">
                            <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%">
                                Your review matters !

                            </div>
                        </div>
                    </div>
                </form>
            </div>


        </div>
    </div>
</div>
<!--/ REVIEW FORM END End /-->
@endsection


<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<div id="preloader"></div>

<!-- JavaScript Libraries -->
<script src="/lib/jquery/jquery.min.js"></script>
<script src="/lib/jquery/jquery-migrate.min.js"></script>
<script src="/lib/popper/popper.min.js"></script>
<script src="/lib/bootstrap/js/bootstrap.min.js"></script>
<script src="/lib/easing/easing.min.js"></script>
<script src="/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="/lib/scrollreveal/scrollreveal.min.js"></script>
<!-- Contact Form JavaScript File -->
<script src="/contactform/contactform.js"></script>

<!-- Template Main Javascript File -->
<script src="/js/main.js"></script>

</body>
</html>
