@extends('layouts.auth_user')
@section('title','login')
@section('content')
<head>
<meta charset="utf-8">
<meta charset="utf-8" lang="{{ str_replace('_', '-', app()->getLocale()) }}>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Reset Password</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="/home-page/css/login.css">

</head>
<body>
<br><br><br><br><br><br>
<div class="login-form">
<form method="POST" action="{{ route('password.update') }}">
    @csrf
        <input type="hidden" name="token" value="{{ $token }}">


        <h2 class="text-center">Reset Password</h2>
                            @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

        <div class="form-group">

    <input id="email" type="email" class="input-field form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
    @error('email')

            <span class="d-block alert alert-warning" role="alert">
                    {{ $message }}
                    </span>
            @enderror
</div>
        <div class="form-group">

            <input id="password" placeholder="New Password"  type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            @error('password')

            <span class="d-block alert alert-warning" role="alert">
                    {{ $message }}
                    </span>
            @enderror
        </div>
        <div class="form-group">
            <input id="password-confirm" placeholder="Confirm New Password"  type="password" class="form-control"  name="password_confirmation" required autocomplete="new-password">

        </div>
        <div class="form-group">
        <button type="submit" class="btn btn-primary form-control">Reset Password</button>
</div>
    </form>
</div>
</body>
@endsection
