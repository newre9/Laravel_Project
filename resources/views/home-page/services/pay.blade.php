@extends('layouts.auth_user')
@section('title','Pay')
@section('content')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/home-page/css/home-style.css">
<link rel="stylesheet" href="/home-page/css/style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="/home-page/css/forms-buttons.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="/home-page/css/user-index.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<link rel="stylesheet" href="/home-page/css/pay.css">



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
    @guest
    <!--
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
        @endif
        -->
        <script>window.location = "/register";</script>
    @else



{{-- <!-- Content -->
<div class="w3-content" style="max-width:1100px;margin-top:50px;margin-bottom:80px;">
  <!-- Grid -->
  <div class="checkout-panel">
    <div class="panel-body">
      <h2 class="title">Payment</h2>
      <form method="POST" action="" >
      @csrf
<div class="payment-method">
<tr>
 <th ><h3 >Total Cost:<h2 style="color: green;" > $ {{$orderdetay['total_cost']}}</h2> </h3></th>
</tr>
        <tr>
            <td ><h3 >iban :123456678991233466885222 </h3></td>
        </tr>
          </div>

      <tr>
        <td ><h5 >Tutarı Iban numarasıyla ödeme yapabilirsiniz.</h5></td>
    </tr>
    </div>


</div> --}}
<div class="card text-center w-65">
    <div class="card-header">
      Proje Ödeme Bilgisi
    </div>
    <div class="card-body">
      <h5 class="card-title">{{$orderdetay['total_cost']}} TL</h5>
      <h5 class="card-text">Iban :123456678991233466885222</h5>
      {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
    </div>
    <div class="card-footer text-muted">
     Tutarı Göndereceğiniz vakit açıklama kısmına proje numarası ve isminizi eklemeyi unutmayın.
    </div>
  </div>




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="/home-page/js/pay.js"></script>
@endguest
@endsection



