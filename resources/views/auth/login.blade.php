@extends('layouts.app')


@section('content')



<div class="container">


    <div class="auth-pages">


        <div class="auth-left">

            @if(session()->has('success_message'))
                <div class="alert alert-success">
                    {{session()->get('success-message')}}
                </div>
            @endif

            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                    </ul>
                </div>
                @endif


            <h2>Returning Customer</h2>
            <div class="spacer"></div>
            <form action="{{url('/login')}}" method="post" >
                {{csrf_field()}}




                <i class="glyphicon glyphicon-user"><input type="email" id="email"  name="email"  value="{{old('email')}}" placeholder="Email" required autofocus></i>




                &nbsp


                    <input type="password" id="password" name="password" value="{{old('password')}}" placeholder="Password" required autofocus>

                &nbsp

                <div class="login-container">

                    <button type="submit" class="auth-button">Login</button>

                    <label >
                    <input  type="checkbox" name="remember"  {{ old('remember') ? 'checked' : '' }}>

                       Remember Me
                    </label>

                </div>
                &nbsp

                <div class="spacer"> </div>



                <a href="{{route('password.request')}}"> Forgot your Password?</a>




            </form>
        </div>



    <div class="auth-right">
   <h2>New Customer</h2>
        <div class="spacer"></div>
        <p><strong>Save Time Now</strong></p>
        <p>You don't need an account to checkout.!!!</p>
        <div class="spacer"></div>
        <a href="{{url('/')}}"
           class="auth-button-hollow"> Continue as Guest</a>



        <div class="spacer"></div>
        <br>
        <p><strong>Save Time Later</strong></p>
        <p>Create an account for fast checkout and get easy access for order history and AI based Recommendations</p>
        <div class="spacer"></div>
        <a href="{{url('/register')}}"
           class="auth-button-hollow"> Create An Account </a>

    </div>
    </div>
</div>







{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Login') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('login') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <div class="form-check">--}}
{{--                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

{{--                                    <label class="form-check-label" for="remember">--}}
{{--                                        {{ __('Remember Me') }}--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row mb-0">--}}
{{--                            <div class="col-md-8 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Login') }}--}}
{{--                                </button>--}}

{{--                                @if (Route::has('password.request'))--}}
{{--                                    <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                                        {{ __('Forgot Your Password?') }}--}}
{{--                                    </a>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
</div>

{{--<footer id="footer"><!--Footer-->--}}
{{--    <div class="footer-top">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-sm-2">--}}
{{--                    <div class="companyinfo">--}}
{{--                        <h2><span>MOBI</span>-XPRESS</h2>--}}
{{--                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm-7">--}}
{{--                    <div class="col-sm-3">--}}
{{--                        <div class="video-gallery text-center">--}}
{{--                            <a href="#">--}}
{{--                                <div class="iframe-img">--}}
{{--                                    <img src="/images/home/iframe1.png" alt="" />--}}
{{--                                </div>--}}
{{--                                <div class="overlay-icon">--}}
{{--                                    <i class="fa fa-play-circle-o"></i>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <p>Circle of Hands</p>--}}
{{--                            <h2>24 DEC 2014</h2>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-sm-3">--}}
{{--                        <div class="video-gallery text-center">--}}
{{--                            <a href="#">--}}
{{--                                <div class="iframe-img">--}}
{{--                                    <img src="/images/home/iframe2.png" alt="" />--}}
{{--                                </div>--}}
{{--                                <div class="overlay-icon">--}}
{{--                                    <i class="fa fa-play-circle-o"></i>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <p>Circle of Hands</p>--}}
{{--                            <h2>24 DEC 2014</h2>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-sm-3">--}}
{{--                        <div class="video-gallery text-center">--}}
{{--                            <a href="#">--}}
{{--                                <div class="iframe-img">--}}
{{--                                    <img src="/images/home/iframe3.png" alt="" />--}}
{{--                                </div>--}}
{{--                                <div class="overlay-icon">--}}
{{--                                    <i class="fa fa-play-circle-o"></i>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <p>Circle of Hands</p>--}}
{{--                            <h2>24 DEC 2014</h2>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-sm-3">--}}
{{--                        <div class="video-gallery text-center">--}}
{{--                            <a href="#">--}}
{{--                                <div class="iframe-img">--}}
{{--                                    <img src="/images/home/iframe4.png" alt="" />--}}
{{--                                </div>--}}
{{--                                <div class="overlay-icon">--}}
{{--                                    <i class="fa fa-play-circle-o"></i>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <p>Circle of Hands</p>--}}
{{--                            <h2>24 DEC 2014</h2>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm-3">--}}
{{--                    <div class="address">--}}
{{--                        <img src="/images/home/map.png" alt="" />--}}
{{--                        <p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="footer-widget">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-sm-2">--}}
{{--                    <div class="single-widget">--}}
{{--                        <h2>Service</h2>--}}
{{--                        <ul class="nav nav-pills nav-stacked">--}}
{{--                            <li><a href="#">Online Help</a></li>--}}
{{--                            <li><a href="#">Contact Us</a></li>--}}
{{--                            <li><a href="#">Order Status</a></li>--}}
{{--                            <li><a href="#">Change Location</a></li>--}}
{{--                            <li><a href="#">FAQ’s</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm-2">--}}
{{--                    <div class="single-widget">--}}
{{--                        <h2>Quock Shop</h2>--}}
{{--                        <ul class="nav nav-pills nav-stacked">--}}
{{--                            <li><a href="#">T-Shirt</a></li>--}}
{{--                            <li><a href="#">Mens</a></li>--}}
{{--                            <li><a href="#">Womens</a></li>--}}
{{--                            <li><a href="#">Gift Cards</a></li>--}}
{{--                            <li><a href="#">Shoes</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm-2">--}}
{{--                    <div class="single-widget">--}}
{{--                        <h2>Policies</h2>--}}
{{--                        <ul class="nav nav-pills nav-stacked">--}}
{{--                            <li><a href="#">Terms of Use</a></li>--}}
{{--                            <li><a href="#">Privecy Policy</a></li>--}}
{{--                            <li><a href="#">Refund Policy</a></li>--}}
{{--                            <li><a href="#">Billing System</a></li>--}}
{{--                            <li><a href="#">Ticket System</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm-2">--}}
{{--                    <div class="single-widget">--}}
{{--                        <h2>About Shopper</h2>--}}
{{--                        <ul class="nav nav-pills nav-stacked">--}}
{{--                            <li><a href="#">Company Information</a></li>--}}
{{--                            <li><a href="#">Careers</a></li>--}}
{{--                            <li><a href="#">Store Location</a></li>--}}
{{--                            <li><a href="#">Affillate Program</a></li>--}}
{{--                            <li><a href="#">Copyright</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm-3 col-sm-offset-1">--}}
{{--                    <div class="single-widget">--}}
{{--                        <h2>About Shopper</h2>--}}
{{--                        <form action="#" class="searchform">--}}
{{--                            <input type="text" placeholder="Your email address" />--}}
{{--                            <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>--}}
{{--                            <p>Get the most recent updates from <br />our site and be updated your self...</p>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="footer-bottom">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <p class="pull-left">Copyright © 2019 MOB-XPRESS Inc. All rights reserved.</p>--}}
{{--                <p class="pull-right">Designed by <span><a target="_blank" href="{{url('/')}}">MOBIXPRESS</a></span></p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--</footer><!--/Footer-->--}}


@endsection
