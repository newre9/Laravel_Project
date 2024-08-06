<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<title>@yield('title')</title>
<meta charset="UTF-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/home-page/css/home-style.css">
<link rel="stylesheet" href="/home-page/css/style.css">
<link rel="stylesheet" href="/home-page/css/mobilmenu.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />



<style>
html,body,h1,h2,h3,h4 {font-family:"Lato", sans-serif}
.mySlides {display:none}
.w3-tag, .fa {cursor:pointer}
.w3-tag {height:15px;width:15px;padding:0;margin-top:6px}



.topnav {
  position: relative;
  overflow: hidden;
  background-color: rgb(223, 219, 219);
}

.topnav a {
  float: left;
  color: #353232;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;


}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {

  color: white;
}

.topnav-centered a {
  float: none;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.topnav-right {
  float: right;
}



* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;

    margin-top:19%;
    margin-bottom:50px
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.veen-k{
    margin-left:20%;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 10.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .9}
  to {opacity: 4}
}

@keyframes fade {
  from {opacity: .9}
  to {opacity: 4}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}

.slideshow-container{
max-width:1100px;
margin-top:25%;
margin-bottom:50px
}
}

/* Responsive navigation menu (for mobile devices) */
@media screen and (max-width: 310px) {
  .topnav  {
    float: none;
    display: block;
  }
  .veen-k{
    margin-left:1%;
}
  .logoo img{
width: 55%;
height: 15%;

  }
  .topnav-right {
  float: left;
  margin-left: 9%;
  margin-top: -5%;
}
 .topnav-right a {
 font-size: 13px;
}

.topnav-centered a {
    position: relative;
    top: 0;
    left: 10;
    transform: none;
}
.slideshow-container{
max-width:1100px;
margin-top:30%;
margin-bottom:50px
}
}

</style>
<body>
<div class="w3-top">
<div class="w3-row w3-large w3-light-green">
         <div class="topnav">
            <div class="logoo" >
              <a href="#" class="active"> <img src="/home-page/img/logo.png" width="30%" height="10%" ></a>
            </div>
            <div class="topnav-right">
                <a href="{{ url('en') }}/">En</a>
                <a href="{{ url('tr') }}">Tr</a>
              @guest
              @if (Route::has('register'))
               <a href="/register"><i class="fas fa-user-plus"></i>{{ trans('sentence.Sign Up')}}</a>
               <a href="/login"><i class="fa fa-fw fa-user"></i>{{ trans('sentence.Login')}}</a>
               @endif
               @else
               <a href="{{ url('/userpanel') }}" class="d-block"><i class=" fa fa-fw fa-user"></i>{{ Auth::user()->name }}</a>
               <a  href="{{ route('logout') }}"
     onclick="event.preventDefault();
      document.getElementById('logout-form').submit();">
      {{ __('Logout') }}
</a>
     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      @csrf
     </form>
        @endguest
        </div>
        </div>
	    </div>
    <div class="w3-row w3-large w3-light-grey">
        <div class="topnavv" id="myTopnav">
            <a href="/#" class="active"  ><i class="fa fa-fw fa-home"></i>{{ trans('sentence.Home')}}</a>
            <a href="/#services"onClick="refreshPage()">{{ trans('sentence.Services')}}</a>
            <a href="/#plans"onClick="refreshPage()">{{ trans('sentence.Pricing')}}</a>
            <a href="/#about"onClick="refreshPage()">{{ trans('sentence.Team')}}</a>
            <a href="{{ url('/about') }}">{{ trans('sentence.About Us')}}</a>
            <a href="/#contact"onClick="refreshPage()" ><i class="fa fa-fw fa-envelope"></i>{{ trans('sentence.Contact')}}</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
              <i class="fa fa-bars"></i>
            </a>
          </div>
    </div>
</div>

@yield('slider')
<div class="w3-content" style="max-width:1100px;margin-top:-50px;margin-bottom:80px">
@yield('services')
@yield('prices')
@yield('teamceo')
@yield('team')
</div>

  @yield('content')


<footer class="w3-container w3-padding-32 w3-light-grey w3-center">

  <a href="#" class="w3-button w3-black w3-margin"><i class="fa fa-arrow-up w3-margin-right"></i>{{ trans('sentence.To the top')}}</a>
  <div class="w3-xlarge w3-section">
   <a href="" class="w3-button  "><i class="fab fa-facebook-f" style="color: black"></i></a>
   <a href="" class="w3-button  "><i class="fab fa-instagram" style="color: black"></i></a>
   <a href="" class="w3-button  "><i class="fab fa-twitter" style="color: black"></i></a>

  </div>
<a href="{{ url('/privacypolicy') }}" title="W3.CSS"  class="w3-hover-text-green">{{ trans('sentence.Privacy Policy')}}</a>
</footer>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src='/home-page/jq/slider-query.min.js'></script>
<script src="/home-page/js/slider-js.js"></script>
<script src="/home-page/js/pay.js"></script>
</body>
</html>
