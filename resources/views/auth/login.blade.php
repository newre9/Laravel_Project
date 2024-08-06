
@extends('layouts.auth_user')
@section('title','login')
@section('content')
<html>
<head>
<meta charset="utf-8" lang="{{ str_replace('_', '-', app()->getLocale()) }}>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="/home-page/css/login.css">

</head>
<body>
<br><br><br><br><br><br>
<div class="login-form">
    <form method="POST" action="{{ route('login') }}">
                        @csrf
        <h2 class="text-center">{{ trans('sentence.Log in')}}</h2>
        <div class="form-group">

            <input id="email" type="email" placeholder="{{ trans('sentence.E-mail')}}" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')

            <span class="d-block alert alert-warning" role="alert">
                    {{ $message }}
                    </span>
            @enderror
        </div>
        <div class="form-group">

            <input id="password" placeholder="{{ trans('sentence.Password')}}"  type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password')

            <span class="d-block alert alert-warning" role="alert">
                    {{ $message }}
                    </span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary p-3 pl-5 pr-5 mt-3 mr-3 ml-0">{{ trans('sentence.Log in')}}</button>

<button type="reset" class="btn btn-danger p-3 pl-5 pr-5 mt-3 float-right">{{ trans('sentence.Reset')}}</button>
        <div class="clearfix">
        <label class="pull-left checkbox-inline"><input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>{{ trans('sentence.remember')}} </label>


@if (Route::has('password.request'))
                <a class="btn btn-link d-inline pull-right" href="{{ route('password.request') }}">
                    {{ trans('sentence.Forgot Your Password?')}}
                </a>
            @endif
        </div>
    </form>
    <p class="text-center"><a href="register">{{ trans('sentence.Create an Account')}}</a></p>
</div>






</body>
</html>
@endsection
