

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<title>@yield('title')</title>
<meta charset="UTF-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/home-page/css/home-style.css">
<link rel="stylesheet" href="/home-page/css/style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />






<style>
html,body,h1,h2,h3,h4 {font-family:"Lato", sans-serif}
.mySlides {display:none}
.w3-tag, .fa {cursor:pointer}
.w3-tag {height:15px;width:15px;padding:0;margin-top:6px;}
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

/* Responsive navigation menu (for mobile devices) */
@media screen and (max-width: 450px) {
  .topnav  {
    float: none;
    display: block;
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
 font-size: 17px;
}

  .topnav-centered a {
    position: relative;
    top: 0;
    left: 10;
    transform: none;
  }
}

</style>
<body>

<!-- Links (sit on top) -->
<div class="w3-top">






    <div class="w3-row w3-large w3-light-green">

        <div class="topnav">

            <!-- Centered link -->
            <div class="logoo" >
              <a href="#" class="active"> <img src="/home-page/img/logo.png" width="30%" height="10%" ></a>
            </div>

            <!-- Left-aligned links (default) -->


            <!-- Right-aligned links -->
            <div class="topnav-right">
              <a href="lang/en">En</a>
              <a href="lang/tr">Tr</a>
              @guest
              @if (Route::has('register'))


              <a href="/register"><i class=" fa fa-fw fa-sign-in"></i>{{ trans('sentence.Sign Up')}}</a>
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
    <div class="w3-col s3">
      <a href="/#" class="w3-button w3-block"><i class="fa fa-fw fa-home"></i> {{ trans('sentence.Home')}}</a>
    </div>
	<div class="w3-col s3">
      <a href="/#services" class="w3-button w3-block">{{ trans('sentence.Services')}}</a>
    </div>
    <div class="w3-col s3">
      <a href="/#plans" class="w3-button w3-block">{{ trans('sentence.Pricing')}}</a>
    </div>

    <div class="w3-col s3">
      <a href="/#about" class="w3-button w3-block">{{ trans('sentence.About Us')}}</a>
    </div>
    <div class="w3-col s3">
      <a href="/#contact" class="w3-button w3-block">{{ trans('sentence.Contact Us')}}</a>
    </div>

  </div>
</div>

<script>
// Slideshow
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demodots");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " w3-white";
}
</script>

<script src='jq/slider-query.min.js'></script>
<script src="js/slider-js.js"></script>

@guest
<li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else

<!-- between header and content -->
<div class="w3-display-container w3-animate-opacity" style="width:100%;min-height:515px;max-height:500px; background-color:rgb(209, 203, 203);">

  <div class="centered"><p style="font-size:50px; padding-top:100px; color:rgb(22, 20, 20);">{{ trans('sentence.Hello')}} {{ Auth::user()->name }}</p>






  <div class="wrapper0">

      <a href="{{route('customerprofile',(Auth::user()->id ) )}}"><span class="button" > {{ trans('sentence.View my profile')}}</span></a>
      <a href="{{route('editprofile',(Auth::user()->id ) )}}"><span class="button" >{{ trans('sentence.Edit my information')}}</span></a>
      <a href="{{ url('/userpanel') }}"><span class="button" >{{ trans('sentence.Choose a service')}}</span></a>
      <a href="{{ url('orders/user') }}"><span class="button" >{{ trans('sentence.My Project')}}</span></a>
    </div>
    </div>
</div>
@endguest
@include('flash-message')
@yield('content')


<!-- Footer -->

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

</body></html>
