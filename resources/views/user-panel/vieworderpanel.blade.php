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


                <table  class="table table-bordered table-striped">

                  <tbody>

                  <tr>
                  <th>Project Number</th>
                  <td>{{$orderdetay['id']}}</td>
                  </tr>
                  <tr>
                  <th>Project Name</th>
                  <td>{{$orderdetay['project_name']}}</td>
                  </tr>

                  <tr>
                  <th>File</th>
                  <td><a href="{{ route('downloadfile', $orderdetay->file) }} ">DOWNLOAD FİLE <i class="fa fa-download" aria-hidden="true"></i></a></td>
                   </tr>


                   <tr>
                  <th>number_of_words</th>
                   <td>{{$orderdetay['number_of_words']}}</td>
                  </tr>

                  <tr>
                  <th>project_type</th>
                   <td>{{$orderdetay['project_type']}}</td>
                  </tr>

                  <tr>
                  <th>category</th>
                   <td>{{$orderdetay['category']}}</td>
                  </tr>
                  <tr>
                  <th>sub_category</th>
                   <td>{{$orderdetay['sub_category']}}</td>
                  </tr>

                  <tr>
                  <th>requested_turnaround_time</th>
                   <td>{{$orderdetay['requested_turnaround_time']}}</td>
                  </tr>


                  <th>journal_Specific_formatting</th>
                   <td>{{$orderdetay['journal_Specific_formatting']}}</td>
                  </tr>

                  <tr>
                  <th>english_style</th>
                   <td>{{$orderdetay['english_style']}}</td>
                  </tr>

                  <tr>
                  <th>total_cost</th>
                   <td>{{$orderdetay['total_cost']}}</td>
                  </tr>


                  <tr>
                  <th>Payment Status</th>
                   <td>
                   {{$orderdetay['payment_status']}}

                   </td>
                  </tr>
                  <tr>
                  <th>Status</th>
                    <td>

                    {{$orderdetay['status']}}



                    </td>
                   </tr>

                   <tr>
                  <th>Comment</th>
                     <td>{{$orderdetay['comment']}}</td>
                     </tr>
                  <tr>

                  <tr>
                  <th>created_at</th>
                     <td>{{$orderdetay['created_at']}}</td>
                     </tr>
                  <tr>
                  <th>updated_at</th>
                   <td>{{$orderdetay['updated_at']}}</td>

                  </tr>




                  </tbody>

                </table>


</body>
</html>
@endsection
