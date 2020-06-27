@extends('front.master')

@section('content')




<!--/ Intro Single star /-->
<section class="intro-single">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8">
                <div class="title-single-box">
                    <h1 class="title-single">My Reviews</h1>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href={{url('/')}}>Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <a href={{url('#')}}>My Reviews</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <br><br>
    <section class="property-single nav-arrow-b">
        @foreach($reviews as $review)

            <div class="container">
                <hr>
                <div class="row">
                    <div class="col-md-4">
                        <h3 class="text-success"> {{$review->pro_name}} </h3>

                        <img width="100"
                              src="{{url('images',$review->pro_image) }}" src="{{url('image',$review->pro_image)}}">
                    </div>
                    <div class="col-md-4">
                        <h5 class="text-info"><span> <img src="images/scoring.png" style="width:50px; height:50px;"></span>Scores
                        </h5><br>
                        <h6> ProductQuality : <span class="text-info">{{$review->productQuality}}</span></h6>
                        <h6> DeliveryService : <span class="text-info">{{$review->DeliveryService}}</span></h6>
                        <h6>  otherServices: <span class="text-info">{{$review->otherServices}}</span></h6>
                        <h6> other : <span class="text-info">{{ $review->other }}</span></h6>

                    </div>
                    <div class="col-md-4">
                        <h5 class="text-warning"><span> <img src="images/views.png" style="width:50px; height:50px;"></span>
                            Your Views</h5>
                        <br>
                        <span class="text-info">{{$review->YourViews}}</span>
                    </div>
                </div>
                <form action={{url('/review')}} method="post">
                    {{csrf_field()}}
                    <div class="rows" style="margin-left:455px; margin-top:10px; ">
                        <input type="text" name="review" style="visibility:hidden;" value=""><br>
                        <a class="btn btn-primary" style="color: white; width:500px; text-align: center; padding-top: 3px; border: black; border-radius: 5px; background-color: forestgreen"
                                href="{{route( 'review.edit',$review->ReviewID )}}"><i class="fas fa-trash-alt"></i> EDIT </a>
                    </div>
                </form>

                <form method="post" action="/review/{{$review->ReviewID}}">
                    {{csrf_field()}}
                    <div class="rowss" style="margin-left:455px; margin-top:10px; ">
                        <input type="hidden" name="_method" value="DELETE"><br>
                        <button type="submit"    onclick="return confirm('Are you Sure you Want to Delete This Review?')"
                                style="color: white; width:500px; text-align: center; padding-top: 3px; border: black; border-radius: 5px; background-color: red">
                            <i class="fas fa-trash-alt"></i> DELETE


                        </button>
                    </div>
                </form>
            </div>
        @endforeach
    </section>

    <!--/ footer Star /-->

@endsection
<!--/ Footer End /-->

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
</section>
</body>
</html>
