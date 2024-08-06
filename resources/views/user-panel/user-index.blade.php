
@extends('layouts.auth_user')

@section('content')
<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/home-page/css/home-style.css">
<link rel="stylesheet" href="/home-page/css/style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="/home-page/css/forms-buttons.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="/home-page/css/user-index.css">



<style>
html,body,h1,h2,h3,h4 {font-family:"Lato", sans-serif}
.mySlides {display:none}
.w3-tag, .fa {cursor:pointer}
.w3-tag {height:15px;width:15px;padding:0;margin-top:6px}
.servis-orta{
    margin-left: 25%;

}

@media screen and (max-width: 650px) {

    .servis-orta{
    margin-left:5%;

}
}
</style>
<body>



<div class="servis-orta">
  <div class="w3-row w3-container" id="services">
	<!-- ======= Counter Section ======= -->
    <section class="counter bg-light">
        <div class="container" >
            <div class="row">
                <div class="col-lg-3 col-md-6" >
                    <div class="count-card">
                        <i class="far fa-smile"></i>

                        <span data-toggle="counter-up"><i class="fa fa-language" style="font-size:80px"></i></span><br><br><br>
                        <h3 style="text-align:center;">{{ trans('sentence.headt')}}  </h3>
                        <a href="translate/services">{{ trans('sentence.Apply')}} »</a>
                    </div>
                </div>

              <div class="col-lg-3 col-md-6">
                    <div class="count-card">
                        <span data-toggle="counter-up"><i class="fa fa-pencil-square-o" style="font-size:80px"></i></span><br><br><br><br>
                        <h3 style="text-align:center">{{ trans('sentence.heade')}}</h3>
                        <a href="manuscript/services">{{ trans('sentence.Apply')}}»</a>
                    </div>
              </div>
            </div>
        </div>
    </section><!-- End counter Section -->
  </div>

</div>
<!-- js -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
@endsection
