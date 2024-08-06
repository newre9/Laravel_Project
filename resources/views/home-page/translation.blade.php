@extends('layouts.frontiki')
@section('title','Translation')
@section('content')

<div class="about-section" id="ceo">
    <img src="/home-page/img/sld3.JPG" alt="John" style="width:50%">
    <h1>{{ trans('sentence.translationhead')}}</h1>
    <p></p>
    <p>{{ trans('sentence.translationtext')}}</p>

  </div>

@endsection
