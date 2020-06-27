@extends('layouts.app')

@section('content')
<div class="container">
    <div class="auth-pages">
        <div class="auth-left">
{{--            @if(session()->has('success_message'))--}}
{{--                <div class="alert alert-success">--}}
{{--                    {{session()->get('success-message')}}--}}
{{--                </div>--}}
{{--            @endif--}}

{{--            @if(count($errors) > 0)--}}
{{--                <div class="alert alert-danger">--}}
{{--                    <ul>--}}
{{--                        @foreach($errors->all() as $error)--}}
{{--                            <li>{{$error}}</li>--}}
{{--                        @endforeach--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            @endif--}}


            <h2>Welcome To Our New Customer</h2>
            &nbsp
            <div class="spacer"></div>
            <form method="POST" action="{{ route('register') }}">
                {{csrf_field()}}


                <input  type="Name" id="name" class="form-control @error('name') is-invalid @enderror"   name="name" value="{{old('name')}}" placeholder="Name" required autofocus>
                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                &nbsp

                <input type="Email" id="email" name="email" class="form-control @error('email') is-invalid @enderror"  value="{{old('email')}}" placeholder="Email-Address" required autofocus>
                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                &nbsp
                <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" value="{{old('password')}}" placeholder="Password" required autofocus>

                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                &nbsp
                <input type="password" id="password-confirm" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" value="{{old('password')}}" placeholder="Confirm Password" required autofocus>
                @error('password')
                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                @enderror
                &nbsp

                <div class="login-container">

                    <button type="submit" class="auth-button">Register</button>



                </div>
                &nbsp

                <div class="spacer"> </div>



                <a href="{{url('/login')}}"> Already Have An Account?</a>




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
            <p><strong>Now Save your time to Roaming in markets</strong></p>
            <p>Create an account for fast checkout and get easy access for order history and AI based Recommendations and get expert advice from our smart system</p>
            <div class="spacer"></div>
{{--            <a href="{{url('/register')}}"--}}
{{--               class="auth-button-hollow"> Create An Account </a>--}}

        </div>
    </div>
</div>

{{--<div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Register') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('register') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>--}}

{{--                                @error('name')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">--}}

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
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row mb-0">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Register') }}--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
</div>
@endsection
