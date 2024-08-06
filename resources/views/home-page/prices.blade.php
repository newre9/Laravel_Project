

@extends('layouts.frontmaster')

@section('prices')
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


<div class="w3-row-padding" id="plans">
    <div class="w3-center w3-padding-64">
      <h3>{{ trans('sentence.Pricing Plans')}}</h3>
      <p>{{ trans('sentence.Choose a pricing plan that fits your needs')}}</p>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-center w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32">{{ trans('sentence.Turkish to English')}} </li>
        <li class="w3-padding-16"><b>{{ trans('sentence.Turkish to English')}} </b> ( 0.040 TL/{{ trans('sentence.word')}}) </li>



        <li class="w3-light-grey w3-padding-24">
            <a href="register">  <button class="w3-button w3-green w3-padding-large">{{ trans('sentence.Get Started')}}</button></a>
        </li>
      </ul>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-center w3-hover-shadow">
        <li class="w3-dark-grey w3-xlarge w3-padding-32">{{ trans('sentence.English to English')}}</li>
        <li class="w3-padding-16"><b>{{ trans('sentence.English to English')}}</b> ( 0.028 TL/{{ trans('sentence.word')}}) </li>


        <li class="w3-light-grey w3-padding-24">
            <a href="register">  <button class="w3-button w3-green w3-padding-large">{{ trans('sentence.Get Started')}}</button></a>
        </li>
      </ul>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-center w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32">{{ trans('sentence.Instant Quote')}}</li>

        <li class="w3-padding-16"><input   id="count"  onchange="calculateTotal()"  placeholder="{{ trans('sentence.word')}}"/> </li>
        <li class="w3-padding-16"><select  id="selectedcake" onchange="calculateTotal()" placeholder="Type project">
            <option value="Select Type project">{{ trans('sentence.Select Type project')}}</option>
            <option value="1">{{ trans('sentence.headt')}}</option>
            <option value="2">{{ trans('sentence.heade')}}</option>
          </select> </li>

        <li class="w3-padding-16" id="totalPrice">


        </li>
        <li class="w3-light-grey w3-padding-24">
        <a href="register">  <button class="w3-button w3-green w3-padding-large">{{ trans('sentence.Get Started')}}</button></a>
        </li>
      </ul>
    </div>
  </div>
</body>
@endsection
