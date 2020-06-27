@extends('admin.master')


@section('content')
    <div class="table-responsive">
        <table class="table table-striped">
            <thead class="border-dark" >
            <tr class="
text-light bg-dark">
                <th>Id</th>
                <th>Code</th>
                <th>Type</th>
                <th>Value</th>
                <th>Percent_off</th>
                <th>Remove Coupon</th>
            </tr>
            </thead>

            <tbody>
            @foreach($coupons as $coupon)

                <tr>

                    <td>{{$coupon['id']}}</td>
                    <td>{{$coupon->code}}</td>
                    <td>{{$coupon->type}}</td>
                    <td>Rs{{$coupon->value}}</td>
                    <td>{{$coupon->percent_off}}</td>


                    <td><a href="{{route('adminDeleteCoupons',$coupon->id)}}"
                           onclick="return confirm('Are you Sure you Want to Delete This Coupon?')"
                           class="btn btn-danger">Remove</a> </td>
                </tr>

            @endforeach
            </tbody>

        </table>
    </div>

            @endsection