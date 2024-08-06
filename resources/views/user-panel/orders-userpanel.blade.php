
@extends('layouts.auth_user')
@section('title','Order Listesi')
@section('content')
<html>
<head>
<meta charset="utf-8" lang="{{ str_replace('_', '-', app()->getLocale()) }}>
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
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="/home-page/css/forms-buttons.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="/home-page/css/user-index.css">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
<link rel="stylesheet" href="/home-page/css/forms-buttons2.css">



<style>
html,body,h1,h2,h3,h4 {font-family:"Lato", sans-serif}
.mySlides {display:none}
.w3-tag, .fa {cursor:pointer}
.w3-tag {height:15px;width:15px;padding:0;margin-top:6px}
.centered {
  position: absolute;
  text-align: center;
  color: white;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

</style>
<body>

{{--
              <!-- /.card-header -->
              <div >
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th>Proje  Numarası</th>
                    <th>Proje ismi</th>
                    <th>Toplam fiyat</th>
                    <th>Pay</th>
                    <th>Status</th>

                  </tr>
                  </thead>

                  @foreach ($orderss as $orders)
                  <tr>
                  <td>{{$orders->id}}</td>
                    <td>{{$orders->project_name}}</td>
                    <td> {{$orders->total_cost}}$</td>
                    <td   > <a href="{{route('paydetail',$orders->id)}}" ><i class="fas fa-money-check-alt" style="color:green; font-size: 17px;" >    {{$orders->payment_status}}  </i></a></td>
                    <td ><i class="fa fa-check" style="color:green; font-size: 15px;" >{{$orders->status}}</i></span></td>

                  </tr>


           @endforeach
                </table></div> --}}

                <table class="table">
                    <thead class="thead-light ">
                      <tr>
                    <th>{{ trans('sentence.Proje  Numarası')}}</th>
                    <th>{{ trans('sentence.Proje ismi')}}</th>
                    <th>{{ trans('sentence.Kelime Sayısı')}}</th>
                    <th>{{ trans('sentence.Toplam fiyat')}}</th>
                    <th>{{ trans('sentence.Ödeme Durum')}}</th>
                    <th>{{ trans('sentence.Proje Durum')}}</th>
                      </tr>
                    </thead>
                    @foreach ($orderss as $orders)
                    <tbody>
                      <tr>
                        <th scope="row">{{$orders->id}}</th>
                        <td>{{$orders->project_name}}</td>
                        <td>{{$orders->number_of_words}} </td>
                        <td>{{$orders->total_cost}}<span style="margin-left: 5px">TL</span></td>
                        <td   > <a href="{{route('paydetail',$orders->id)}}" >{{$orders->payment_status}} <i class="fas fa-arrow-right d-flex justify-content-center" style="color:#5F9EA0; font-size: 25px;" >  </i>   </a></td>

                        <td>{{$orders->status}} </td>
                      </tr>



                    </tbody>
                    @endforeach
                  </table>




</body>
</html>
@endsection
