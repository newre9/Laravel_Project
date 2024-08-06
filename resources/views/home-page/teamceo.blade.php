
@extends('layouts.frontmaster')

@section('teamceo')
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


<div class="w3-row-padding" id="about" >
    <div class="w3-center w3-padding-64">
      <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">{{ trans('sentence.Who We Are')}}</span>
    </div>
    <div class="w3-third w3-margin-bottom veen-k" >
      <div class="w3-card-4">
        <img src="/home-page/img/veene.jpeg" alt="John" style="width:90%">
        <div class="w3-container">
          <h3>Veene Sulaivany-Bayram</h3>
          <p class="w3-opacity">{{ trans('sentence.CEO & Founder')}}</p>
          <p>{{ trans('sentence.Mrs. Bayram is one of the cofounders of EnTr Editing & Translation...')}} </p>
         <a href="{{ url('/veen') }}" ><p><button class="w3-button w3-light-grey w3-block">{{ trans('sentence.more')}}</button></p></a>
        </div>
      </div>
    </div>

    <div class="w3-third w3-margin-bottom">
      <div class="w3-card-4">
        <img src="/home-page/img/tevfik1.jpg" alt="John" style="width:90%" >
        <div class="w3-container">
          <h3>Tevfik Bayram</h3>
          <p class="w3-opacity">{{ trans('sentence.CEO & Founder')}}</p>
          <p>{{ trans('sentence.Dr. Bayram is a Public Health Specialist and is one of the cofounders of EnTr...')}} </p>
          <a href="{{ url('/tevfik') }}" > <p><button class="w3-button w3-light-grey w3-block">{{ trans('sentence.more')}}</button></p></a>
        </div>
      </div>
    </div>

  </div>

</body>
@endsection
