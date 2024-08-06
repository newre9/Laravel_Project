
@extends('layouts.frontmaster')

@section('services')
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

<head></head>
<body>

<div class="w3-row w3-container" id="services">
    <div class="w3-center w3-padding-64">
      <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16"> {{ trans('sentence.What We Offer')}}</span>
    </div>


    <div class="w3-col  m7 w3-grey w3-container w3-padding-16">
      <h3>{{ trans('sentence.headt')}}   </h3>
      <p>{{ trans('sentence.contentt')}}</p>
	  	  <div class="w3-col s7"><a href="{{ url('/Translate') }}" class="w3-button w3-block" style="background-color:#000; color:#fff">{{ trans('sentence.more')}}</a></div>
    </div>

    <div class="w3-col  m5 w3-dark-grey w3-container w3-padding-16">
      <h3>{{ trans('sentence.heade')}}  </h3>
      <p> {{ trans('sentence.contente')}}</p>
		<div class="w3-col s7"><a href="{{ url('/Editing') }}" class="w3-button w3-block" style="color:#000; background-color:#f1f1f1">{{ trans('sentence.more')}}</a></div>
    </div>


  </div>
</body>
@endsection
