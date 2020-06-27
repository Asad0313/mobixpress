@extends('admin.master')

@section('content')


    <h2>Generate Coupons</h2>

    <form action="/admin/senddiscountcouponForm" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="name">Code</label>
            <input type="text" class="form-control" name="code" id="code" placeholder="Enter Code"  required>

        </div>
        <div class="form-group">
            <label for="type">Type</label>
            <select name="type" class="form-control" id="categories">
                <option value="Fixed">Fixed</option>
                <option value="percent_off">Percent_off</option>
            </select>
            <br/>

            <div class="form-group">
                <label for="value">value</label>

                <input type="text" class="form-control" name="value" id="value" placeholder="Enter Value" required>
            </div>
            <div class="form-group">
                <label for="Percentoff">percentoff</label>

                <input type="text" class="form-control" name="percent_off" id="percentoff" placeholder="Enter Percent" required>
            </div>
        </div>

            {{Form::submit('Submit',array('class' => 'btn btn-primary'))}}
            {!! Form::close() !!}


    </form>
    </div>



@endsection