@extends('admin.master')


@section('content')
    <div class="table-responsive">
        <table class="table table-striped">
            <thead class="border-dark" >
            <tr class="
text-light bg-dark">
                <th>Id</th>
                <th>Image</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Code</th>
                <th>Sale Price</th>
                <th>Categories</th>
                <th>Brands</th>
                <th>Edit Image</th>
                <th>Edit</th>
                <th>Remove</th>

            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{$product['id']}}</td>
                    <td>  <img src="{{url('/images',$product->image)}}" src="{{url('image',$product->image)}}" class="img-fluid" alt="Responsive image" /></td>
                    <td>{{$product->pro_name}}</td>
                    <td>{{$product->pro_info}}</td>
                    <td>Rs{{$product->pro_price}}</td>
                    <td>{{$product->pro_code}}</td>
                    <td>Rs{{$product->spl_price}}</td>
                    <td>{{$product->categories}}</td>
                    <td>{{$product->brands}}</td>

                                     <td><a href="{{route('adminEditProductImageForm',$product->id)}}" class="btn btn-info">Edit Image</a> </td>
                                     <td><a href="{{route('adminEditProductForm',$product->id)}}" class="btn btn-warning">Edit </a> </td>
                                     <td><a href="{{route('adminDeleteProduct',$product->id)}}"
                                            onclick="return confirm('Are you Sure you Want to Delete This Order?')"
                                            class="btn btn-danger">Remove</a> </td>



                </tr>
            @endforeach


            </tbody>




            </tr>




            </thead>

        </table>
        {{$products->links()}}



    </div>




@endsection