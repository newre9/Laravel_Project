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


<style>
html,body,h1,h2,h3,h4 {font-family:"Lato", sans-serif}
.mySlides {display:none}
.w3-tag, .fa {cursor:pointer}
.w3-tag {height:15px;width:15px;padding:0;margin-top:6px;}
</style>
<body>

<!-- Links (sit on top) -->
<div class="w3-top">
  <div class="w3-row w3-large w3-light-grey">

    <div class="w3-row w3-large w3-light-black">
	<div class="w3-col s1" >
      <a href="login" class="w3-button w3-block"> <p style="font-size:12px">LOGIN</p></a>
    </div>
	<div class="w3-col s1" >
      <a href="register" class="w3-button w3-block"> <p style="font-size:12px">SIGN UP</p></a>
    </div>
	<div class="w3-col s1" >
      <a href="#" class="w3-button w3-block"> <p style="font-size:12px">Türkçe</p></a>
    </div>
	<div class="w3-col s1" >
      <a href="#" class="w3-button w3-block"> <p style="font-size:12px">English</p></a>
    </div>
	</div>

    <div class="w3-col s3">
      <a href="/" class="w3-button w3-block">Home</a>
    </div>
	<div class="w3-col s3">
      <a href="/#services" class="w3-button w3-block">Services</a>
    </div>
    <div class="w3-col s3">
      <a href="/#plans" class="w3-button w3-block">Pricing</a>
    </div>
	<div class="w3-col s3">
      <a href="#" class="w3-button w3-block">FAQ</a>
    </div>
    <div class="w3-col s3">
      <a href="/#about" class="w3-button w3-block">About Us</a>
    </div>
    <div class="w3-col s3">
      <a href="/#contact" class="w3-button w3-block">Contact Us</a>
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
