@extends('front.master')

@section('content')





<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Check out</li>
            </ol>
        </div><!--/breadcrums-->

   @if(Auth::check())



        <div class="shopper-informations">
            <div class="row">

                <div class="col-sm-12 clearfix">
                    <div class="bill-to">
                        <p>Shipping / Bill To</p>
                        <div class="form-one">
                            <form action="createOrder" method="post" >
{{--                                <form action="{{route('order.email')}}" method="post">--}}
                                {{csrf_field()}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="name">Name</label>--}}
{{--                                    <input type="text" class="form-control" name="first_name" id="first_name" placeholder= "First Name"  required>--}}

{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="lastname">LastName</label>--}}
{{--                                    <input type="text" class="form-control" name="last_name" id="last_name" placeholder= "last_Name"  required>--}}

{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="email">Email</label>--}}
{{--                                    <input type="text" class="form-control" name="email" id="email" placeholder= "Email"  required>--}}

{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="address">Address</label>--}}
{{--                                    <input type="text" class="form-control" name="address" id="address" placeholder= "Address"  required>--}}

{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="zip">Zip</label>--}}
{{--                                    <input type="text" class="form-control" name="zip" id="zip" placeholder= "Zip / Postal Code"  required>--}}

{{--                                </div>--}}


{{--                                <div class="form-group">--}}
{{--                                    <label for="phone">Phone</label>--}}
{{--                                    <input type="text" class="form-control" name="phone" id="phone" placeholder= "phone"  required>--}}

{{--                                </div>--}}


                                <input type="text" placeholder="Email" name="email" id="email" value="{{ Auth::user()->email }}" required>
                                <input type="text" placeholder="First Name " name="first_name" value="{{Auth::user()->name}}"  id="first_name" required>

                                <input type="text" placeholder="Last Name " name="last_name" id="last_name" value="{{Auth::user()->name}}" required >
                                <input type="text" placeholder="Address" name="address" id="address" required min="0" max="10">



                                <input type="text" placeholder="Zip / Postal Code" name="zip" id="zip" required pattern="^\d{5}$"  >
                                <input type="text" placeholder="Phone" name="phone" id="phone" required pattern="^\d{8}$">
                                <select>
                                    <option>-- City --</option>
                                    <option>Karachi</option>
                                    <option>Thatta</option>
                                    <option>Lahore</option>
                                    <option>Bahawalpur</option>
                                    <option>Badin</option>
                                    <option>Thar</option>
                                    <option>Hunza</option>
                                    <option>Gilgit</option>
                                </select>
                                <select>
                                    <option>-- State / Province / Region --</option>
                                    <option>United States</option>
                                    <option>Bangladesh</option>
                                    <option>UK</option>
                                    <option>India</option>
                                    <option>Pakistan</option>
                                    <option>Ucrane</option>
                                    <option>Canada</option>
                                    <option>Dubai</option>
                                </select>




{{--                                {{Form::submit('Proceed To Pay',array('class' => "btn btn-default check_out"))}}--}}
                                <button class="btn btn-default check_out" type="submit" name="submit" >Proceed To Payment</button>
                                {!! Form::close() !!}

                            </form>
{{--                            </form>--}}
                        </div>
                        <div class="form-two">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        @else
            <div class ="alert alert-danger" role="alert">
                <strong>Please!</strong><a href="{{route('login')}}">Log in</a> in order to create an order

            </div>
        @endif
    </div>

</section> <!--/#cart_items-->



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
                        <p>SZABIST 100-CAMPUS,CLIFTON,KARACHI</p>
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
                        <h2>About MOBI-XPRESS</h2>

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
                        <h2>About MOBI-XPRESS</h2>
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
                <p class="pull-left">Copyright © 2019 Mobi-Xpress Inc. All rights reserved.</p>
                <p class="pull-right">Designed by <span><a target="_blank" href="{{url('/')}}">Mobi-Xpress</a></span></p>
            </div>
        </div>



    </div>

</footer><!--/Footer-->




@endsection