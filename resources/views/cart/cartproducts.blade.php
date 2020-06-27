@extends('front.master');
@section('content')




{{--    @if(session()->get('coupon')['name'])--}}
{{--        <div class ="alert alert-danger" role="alert">--}}
{{--            <strong>Invalid! Coupon Please! Try Again</strong>--}}

{{--        </div>--}}
{{--    @endif--}}



    <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li class="active">Shopping Cart</li>
                </ol>
            </div>
            <div class="table-responsive cart_info">
                <table class="table table-condensed table-hover ">
                    <thead>
                    <tr class="cart_menu">
                        <td class="image">Item</td>
                        <td class="description"></td>
                        <td class="price">Price</td>
                        <td class="quantity">Quantity</td>
                        <td class="total">Total</td>
                        <td></td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cartItems->items as $item)

                        <tr class="border border-dark">
                            <td class="cart_product ">
                                <a href="" ><img src="{{url('/images',$item['data']['image'])}} "  width="100" height="100" class="thumbnail zoom"  ></a>
                            </td>
                            <td class="cart_description " align="center" >
                                <h4><a href="">{{$item['data']['pro_name']}}</a></h4>
                                <br/>
                                <p>{{$item['data']['pro_info']}}</p>
                                <p>id: {{$item['data']['id']}}</p>
                            </td>
                            <td class="cart_price">
                                RS. <p>{{$item['price']}}</p>
                            </td>
                            <td class="cart_quantity ">
                                <div class="cart_quantity_button">
                                    <a class="cart_quantity_up" href="{{route('IncreaseSingleProduct',['id' => $item['data']['id']])}}"> + </a>
                                    <input class="cart_quantity_input" type="text" name="quantity" value="{{$item['quantity']}}" id="upcart" autocomplete="off" size="2">
                                    <a class="cart_quantity_down" href="{{route('DecreaseSingleProduct',['id' => $item['data']['id']])}}"> - </a>
                                </div>
                            </td>

                            <td class="cart_total  ">

                                RS.<p class="cart_total_price">{{$item['price']}}</p>
                            </td>
                            <td class="cart_delete  ">
                                <a class="cart_quantity_delete" href="{{route('DeleteItemFromCart',['id' => $item['data']['id']])}}"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>







                    @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </section> <!--/#cart_items-->


    <section id="do_action">
        <div class="container">
            <div class="heading">
                <h3>What would you like to do next?</h3>
                <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
            </div>
            <div class="row">

                <div class="col-sm-6">
                    <div class="chose_area">
                        <form action="{{route('coupon.store')}}" method="POST">

                            {{csrf_field()}}
                       &nbsp;   &nbsp;  &nbsp;  &nbsp;   <input type="text" name="coupon_code" id="coupon_code" required>
                            <br>

                            &nbsp;  <button type="submit" class="btn btn-default update" >Apply Coupon</button>

                        </form>

                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="total_area">

                        <ul>



                            <li>Quantity <span>{{$cartItems->totalQuantity}}</span></li>
                            <li>Shipping Cost <span>Free</span></li>
                            <li>Total <span>{{$cartItems->totalPrice}}</span></li>
                            @if(session()->has('coupon'))


                            <li>Discount: {{session()->get('coupon')['name']}}<span>

                                <form action="{{route('coupon.destroy')}}" method="POST" style="display:inline">
                                    {{csrf_field()}}
                                    {{method_field('delete')}}
                                    <button type="submit" style="font-size: 14px">Remove</button>


                                </form>
                                      {{session()->get('coupon')['discount']}}</span></li>



                                <li>New Subtotal<span>{{$item['price'] - session()->get('coupon')['discount']}}</span></li>



                                @endif




                        </ul>


                        <a class="btn btn-default update" href="">Update</a>
                        <a class="btn btn-default check_out" href="{{route('checkoutProducts')}}">Check Out</a>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#do_action-->

    <footer id="footer"><!--Footer-->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="companyinfo">
                            <h2><span>Mobi</span>-Xpress</h2>
                            <p>BEST SELLING WEBSITE OF MOBILES COMING SOON!</p>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="images/home/iframe1.png" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Circle of MobiXpress</p>
                                <h2>24 DEC 2014</h2>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="images/home/iframe2.png" alt="" />
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
                                        <img src="images/home/iframe3.png" alt="" />
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
                                        <img src="images/home/iframe4.png" alt="" />
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
                            <img src="images/home/map.png" alt="" />
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
                            <h2>Service</h2>
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
                            <h2>Policies</h2>
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
                    <p class="pull-left">Copyright © 2019 Mobi-Xpress Inc. All rights reserved.</p>
                    <p class="pull-right">Designed by <span><a target="_blank" href="{{url('/')}}">MobiXpress</a></span></p>
                </div>
            </div>
        </div>

    </footer><!--/Footer-->








    @endsection