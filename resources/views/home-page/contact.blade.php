
@extends('layouts.frontmaster')

@section('content')
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


<head>
    <style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}
.column p{
    margin-top: 5%;
margin-left:30%;
font-size: 17px;

}
.pp{

margin-left:40%;


}
.column i {
margin-left:40%;
font-size: 30px;

}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}



    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

  <div class="container" id="contact" style="background-color: white">
    <div style="text-align:center">
      <h2>{{ trans('sentence.İletişim')}}</h2>
      <p>{{ trans('sentence.Bize bir mesaj bırakabilirsiniz')}} </p>
    </div>
    @include('flash-message')
    <div class="row">
      <div class="column mt-5">
        <i class="fas fa-phone"></i>
      <p>+90 544 447 7549 </p>
      {{-- <i class="fas fa-map-marker-alt"></i>
      <p >Turkey</p> --}}
      <i class="fas fa-envelope"></i>
      <p>info@entrediting.com </p>
      </div>
      <div class="column">
        <form action="/contact-us"  method="POST">
            {!! csrf_field() !!}
          <label for="fname"> {{ trans('sentence.İsim Soyisim')}}</label>
          <input type="text" name="name">
          <label for="lname">{{ trans('sentence.E-mail')}}</label>
          <input type="text"   name="email">
          <label for="country">{{ trans('sentence.Konu')}}</label>
          <input type="text"  name="subject">
          <label for="subject">{{ trans('sentence.Mesaj')}}</label>
          <textarea style="height:170px" name="message"></textarea>
          <button type="submit" value="submit" class="w3-button w3-block w3-black">{{ trans('sentence.Gönder')}}</button>
        </form>
      </div>
    </div>
  </div>
</div>

</body>
</html>
@endsection
