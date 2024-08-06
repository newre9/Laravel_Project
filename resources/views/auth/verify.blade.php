
@extends('layouts.frontiki')
@section('title','login')
@section('content')
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Password Verification</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="/home-page/css/login.css">

</head>
<body>

<div class="login-form pt-4">
        <h2 class="text-center">Verify Your Email Address</h2>
        <div class="form-group m-4">

        @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

        </div>
        <div class="form-group ml-4">
        {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
        </div>
                    <form  method="POST" class="bg-white mb-2 p-0" action="{{ route('verification.resend') }}">
                        @csrf



                        <button type="submit" class="btn btn-secondary m-3 p-2 btn-default">{{ __('click here to request another') }}</button>.


                    </form>
</div>
</body>
@endsection
