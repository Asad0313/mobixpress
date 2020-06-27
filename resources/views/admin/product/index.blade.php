@extends('admin.master')
@section('content')



@forelse($products as $product)
<li>
    <h4>Name Of Product: {{$product->pro_name}}</h4>
<form action = "{{route('product.destroy', $product->id)}}" method="post">

{{csrf_field()}}

 {{method_field('DELETE')}}
    <input class="btn btn-sm btn-danger" type="submit" value="Delete">

</form>

</li>


@empty




<h3>Non Products</h3>


@endforelse

@endsection