            @extends('admin.master')

            @section('content')
<div align="right">
<a href="{{url('/admin/products')}}" class="btn btn-danger mb1 black bg-darken-2">BACK</a>

</div>
<br/>

            <div class="table-responsive">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>

            <li>{!! print_r($errors->all()) !!}</li>

                    </ul>



                </div>
                @endif

                <h3>Current Image</h3>
                <div><img src="{{URL::to('/')}}/images/{{$product->image}}" class="img-fluid" alt="Responsive image" > </div>

                <form action="/admin/updateProductImage/{{$product->id}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}



                    <div class="form-group">
                   <label for="description">Update Image</label>

                        <input type="file" class="" name="image" id="image" placeholder="Image" value="{{$product->image}}" required>
                    </div>

{{--                    <button type="submit" name="submit" class="btn btn-default">Submit</button>--}}
                    {{Form::submit('Submit',array('class' => 'btn btn-primary'))}}
                    {!! Form::close() !!}

                </form>
            </div>


            @endsection