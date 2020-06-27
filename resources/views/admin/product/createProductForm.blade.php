@extends('admin.master')

@section('content')

    <div class="table-responsive">
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>

                    <li>{!! print_r($errors->all()) !!}</li>

                </ul>



            </div>
        @endif

        <h2>Create New Product</h2>

    <form action="/admin/sendCreateProductForm" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Product Name"  required>

        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" name="description" id="description" placeholder="Product Description"  required>
            <br/>

            <div class="form-group">
                <label for="imageFile">Image</label>

                <input type="file" name="imageFile" id="imageFile" placeholder="Image" required>
            </div>

        </div>
        <div class="form-group">
            <label for="code">Code</label>
            <input type="text" class="form-control" name="code" id="code" placeholder="Product Code"  required>

        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" class="form-control" name="price" id="price" placeholder="Product Price"  required>

        </div>
        <div class="form-group">
            <label for="sale">Sale</label>
            <input type="text" class="form-control" name="sale" id="sale" placeholder="Sale Price"  required>

        </div>
        <div class="form-group">
            <label for="categories">Categories</label>
            <select name="categories" class="form-control" id="categories">
                <option value="Mobile">Mobile</option>
                <option value="Ipad">Ipad/Tablet</option>
                <option value="Accessories">Accessories</option>

            </select>

        </div>
        <div class="form-group">
            <label for="brands">Brands</label>
            <select name="brands" class="form-control" id="brands">
                <option value="Apple">Apple</option>
                <option value="Samsung">Samsung</option>
                <option value="Oppo">Oppo</option>
                <option value="Huawei">Huawei</option>
            </select>
            {{--<input type="text" class="form-control" name="brands" id="brands" placeholder="brands"  required>--}}

        </div>


        {{--    <button type="submit" name="submit" class="btn btn-default">Submit</button>--}}
        {{Form::submit('Submit',array('class' => 'btn btn-primary'))}}
        {!! Form::close() !!}



    </form>
    </div>
@endsection








