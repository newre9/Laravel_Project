@extends('layouts.auth_user')
@section('title','login')
@section('content')

<head>
<meta charset="utf-8">
<title>Reset Password</title>
<meta name="viewport" content="width=device-width, initial-scale=1">


<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


</head>
 <div class="form-gap " style="margin-top:20%"></div>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="text-center">
                  <h3><i class="fa fa-lock fa-4x"></i></h3>
                  <h2 class="text-center">{{ trans('sentence.Forgot Password?')}}</h2>
                  <p>{{ trans('sentence.You can reset your password here.')}}</p>
                  <div class="panel-body">
                    <form id="register-form" role="form" autocomplete="off" class="form" method="POST" action="{{ route('password.email') }}">
                    @csrf
                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                          <input id="email" name="email" placeholder="{{ trans('sentence.E-mail')}}" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus"  type="email">
                          @error('email')
                                <span class="d-block alert alert-warning" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                      </div>
                      <div class="form-group">
                        <input name="recover-submit" class="btn btn-lg btn-primary btn-block" value="{{ trans('sentence.Send Password Reset Link')}}" type="submit">
                      </div>

                      <input type="hidden" class="hide" name="token" id="token" value="">
                    </form>

                  </div>
                </div>
              </div>
            </div>
          </div>
	</div>
</div>

</body>
@endsection

