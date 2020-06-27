@extends('admin.master')

@section('content')

   @if($userData->admin_level == 1)

    <div align="right">
        <a href="{{url('/admin/products')}}" class="btn btn-danger mb1 black bg-darken-2">BACK</a>

    </div>
    <br/>

<form action="/admin/updateProduct/{{$product->id}}" method="post">
 {{csrf_field()}}
   <div class="form-group">
  <label for="name">Name</label>
       <input type="text" class="form-control" name="name" id="name" placeholder="Product Name" value="{{$product->pro_name}}" required>

   </div>
    <div class="form-group">
        <label for="description">Description</label>
        <input type="text" class="form-control" name="description" id="description" placeholder="Product Description" value="{{$product->pro_info}}" required>

    </div>
    <div class="form-group">
        <label for="code">Code</label>
        <input type="text" class="form-control" name="code" id="code" placeholder="Product Code" value="{{$product->pro_code}}" required>

    </div>
    <div class="form-group">
        <label for="price">Price</label>
        <input type="text" class="form-control" name="price" id="price" placeholder="Product Price" value="Rs{{$product->pro_price}}" required>

    </div>
    <div class="form-group">
        <label for="sale">Sale</label>
        <input type="text" class="form-control" name="sale" id="sale" placeholder="SSale Price" value="Rs{{$product->spl_price}}" required>

    </div>
    <div class="form-group">
        <label for="categories">Categories</label>
        <input type="text" class="form-control" name="categories" id="categories" placeholder="categories" value="{{$product->categories}}" required>

    </div>
    <div class="form-group">
        <label for="brands">Brands</label>
        <input type="text" class="form-control" name="brands" id="brands" placeholder="Brands" value="{{$product->brands}}" required>

    </div>


    {{--    <button type="submit" name="submit" class="btn btn-default">Submit</button>--}}
    {{Form::submit('Submit',array('class' => 'btn btn-primary'))}}


@else

    <div class="alert alert-danger">Only First Level admins can Edit Products</div>

    @endif


</form>







@endsection
