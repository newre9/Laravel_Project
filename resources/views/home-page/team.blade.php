
@extends('layouts.frontmaster')

@section('team')
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


<div class="w3-row-padding" >
<div class="w3-third w3-margin-bottom">
      <div class="w3-card-4">
        <img src="/home-page/img/gbengo1.jpg" alt="Jane" style="width:90%">
        <div class="w3-container">
          <h3>Gbenga Adebayo</h3>
          <p class="w3-opacity">{{ trans('sentence.EnTr Editing & Translation')}}</p>
          <p>{{ trans('sentence.Dr. Adebayo is the founder and Chief Executive Officer of Livinghealth..')}}</p>
          <a href="{{ url('/Gbenga') }}" >  <p><button class="w3-button w3-light-grey w3-block">{{ trans('sentence.more')}}</button></p></a>
        </div>
      </div>
    </div>
    <div class="w3-third w3-margin-bottom">
        <div class="w3-card-4">
          <img src="/home-page/img/anna1.jpg" alt="Jane" style="width:90%">
          <div class="w3-container">
            <h3>Anna Schmitt </h3>
            <p class="w3-opacity">{{ trans('sentence.EnTr Editing & Translation')}}</p>
            <p>{{ trans('sentence.Anna Schmitt, MPH is a co-founder of Yarrow, LLC..')}}</p>
            <a href="{{ url('/Anna') }}" ><p><button class="w3-button w3-light-grey w3-block">{{ trans('sentence.more')}}</button></p></a>
          </div>
        </div>
      </div>
      <div class="w3-third w3-margin-bottom">
        <div class="w3-card-4">
          <img src="/home-page/img/naham1.jpg" alt="Jane" style="width:90%">
          <div class="w3-container">
            <h3>Naham Shapiro</h3>
            <p class="w3-opacity">{{ trans('sentence.EnTr Editing & Translation')}}</p>
            <p>{{ trans('sentence.Naham Shapiro is a Public Health Specialist with global experience working..')}}</p>
            <a href="{{ url('/Naham') }}" > <p><button class="w3-button w3-light-grey w3-block">{{ trans('sentence.more')}}</button></p></a>
          </div>
        </div>
      </div>
</div>
</body>
@endsection
