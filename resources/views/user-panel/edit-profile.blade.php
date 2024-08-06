

@extends('layouts.auth_user')
@section('title','editprofil')
@section('content')
<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="/home-page/css/forms-buttons.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="/home-page/css/user-index.css">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
<link rel="stylesheet" href="/home-page/css/forms-buttons2.css">



<style>
html,body,h1,h2,h3,h4 {font-family:"Lato", sans-serif}
.mySlides {display:none}
.w3-tag, .fa {cursor:pointer}
.w3-tag {height:15px;width:15px;padding:0;margin-top:6px}
.centered {
  position: absolute;
  text-align: center;
  color: white;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
</style>
<body>

<div class="w3-content" style="max-width:1100px;margin-top:50px;margin-bottom:80px;">
  <!-- Grid -->

      <h2 style="color:black">{{ trans('sentence.Change My Account Information')}}</h2><br>
      <div class="icon">
        <i class="fas fa-user-circle"></i>
      </div>
      <div class="formcontainer">
      <div class="container1">
        <form method="post"    action="{{route('customerupdate', $customer['id'])}}"   >
            @csrf
        <label for="uname"><strong>{{ trans('sentence.Username')}}</strong></label>
        <input type="text"  name="name" value="{{$customer['name']}}">
        <label for="mail"><strong> {{ trans('sentence.E-mail')}}</strong></label>
        <input type="text"  name="email" value="{{$customer['email']}}" >
        <label for="school"><strong>{{ trans('sentence.University')}}</strong></label>
        <input type="text"  name="school" value="{{$customer['university']}}">
        <label for="school"><strong>{{ trans('sentence.Country')}}</strong></label>
        <input type="text"  name="country" value="{{$customer['country']}}" >


        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-warning">
                    {{ trans('sentence.Güncelle')}}
                </button>
            </div>
        </div>

    </form>
<br>
<form method="POST" action="{{ route('change.password') }}">
    @csrf
    @foreach ($errors->all() as $error)
                            <p class="text-danger">{{ $error }}</p>
                         @endforeach
                         <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ trans('sentence.Current Password')}}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="current_password" autocomplete="current-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ trans('sentence.New Password')}}</label>

                            <div class="col-md-6">
                                <input id="new_password" type="password" class="form-control" name="new_password" autocomplete="current-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ trans('sentence.New Confirm Password')}}</label>

                            <div class="col-md-6">
                                <input id="new_confirm_password" type="password" class="form-control" name="new_confirm_password" autocomplete="current-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ trans('sentence.Update Password')}}
                                </button>
                            </div>
                        </div>
    </form>
      </div>


  <!-- Grid -->
</div>
</div>

<!-- Footer -->


</body>
</html>

@endsection
