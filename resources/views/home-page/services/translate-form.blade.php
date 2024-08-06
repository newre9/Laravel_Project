@extends('layouts.auth_user')
@section('title','Manuscript')
@section('content')

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
<link rel="stylesheet" href="/home-page/css/pay.css">




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
@guest
<!--
    <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
    </li>
    @if (Route::has('register'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
    @endif
    -->
    <script>window.location = "/register";</script>
@else






<!-- Content -->
<div class="w3-content" style="max-width:1100px;margin-top:50px;margin-bottom:80px;">
  <!-- Grid -->
  <div class="testbox">
  <form method="POST" action="{{ route('Orders.store') }}" enctype="multipart/form-data" >
@csrf

        <div class="banner">
          <h1>Apply your Request</h1>
        </div>
        <div class="item">
          <p>Project Name<span class="required">*</span></p>
          <div class="name-item">
            <input type="text" name="project_name" required/>
          </div>
        </div>

        <div class="position-item">
            <div class="item">
              <p>Project Type<span class="required">*</span></p>
              <select name="project_type" id="selectedcake" onchange="calculateTotal()" required>
                <option value="1">Turkish to English (translation & editing) </option>
                <option value="2">English to English (editing)</option>
              </select>
            </div>
          </div>
        <div class="contact-item">
          <div class="item">
            <p>Number of Words<span class="required">*</span></p>
            <input  name="number_of_words" id="count"  onchange="calculateTotal()"  required/>
          </div>
        </div>


        <div class="position-item">
          <div class="item" required>
            <p>Requested Turnaround Time<span class="required">*</span></p>
            <select name="requested_turnaround_time"  id="filling"  "  >

              <option value="72" >72 hours</option>
              <option value="7">7 Days</option>
            </select>
          </div>
        </div>
        <div class="item">
            <p>Total Cost<span class="required">*</span></p>
            <div class="name-item">
                <input  name="total_cost"  readonly  />
            </div>
          </div>

          <div class="item" id="totalPrice" hidden> cost</div>




          <input type="text" name="payment_status" value="ödeme bekleniyor " hidden  />
          <input type="text" name="status"   value="düzenleniyor" hidden/>



		<div class="position-item" hidden>
          <div class="item">
            <p>Category<span class="required">*</span></p>
            <select name="category" required>
              <option value="Business" selected>Business</option>
              <option value="Computer Science">Computer Science</option>
              <option value="Engineering">Engineering</option>
              <option value="Humanities/Social Sciences">Humanities/Social Sciences</option>
              <option value="Law">Law</option>
			  <option value="Life Sciences">Life Sciences</option>
			  <option value="Material Science">Material Science</option>
			  <option value="Mathmetics">Mathmetics</option>
			  <option value="Medicine">Medicine</option>
			  <option value="Physical Sciences">Physical Sciences</option>
			  <option value="Social Sciences">Social Sciences</option>
			  <option value="Other">Other</option>

            </select>
          </div>
        </div>
		<div class="position-item" hidden>
          <div class="item">
            <p>Subcategory</p>
            <select name="sub_category" >
              <option value="Anatomy" selected>Anatomy</option>
              <option value="Agriculture Sciences">Agriculture Sciences</option>
              <option value="Biochemistry">Biochemistry</option>
              <option value="Cell Biology">Cell Biology</option>
              <option value="Evolutionary Biology">Evolutionary Biology</option>
			  <option value="Developmental Biology">Developmental Biology</option>
              <option value="Environmental and Ecology">Environmental and Ecology</option>
              <option value="Marine Biology">Marine Biology</option>
              <option value="Microbiology">Microbiology</option>
              <option value="Molecular Biology">Molecular Biology</option>
			  <option value="Genetics">Genetics</option>
              <option value="Neuroscience">Neuroscience</option>
              <option value="Pharmacology and Toxicology">Pharmacology and Toxicology</option>
              <option value="Physiology">Physiology</option>
              <option value="Veterinary Medicine">Veterinary Medicine</option>
			  <option value="Zoology and Plant Biology">Zoology and Plant Biology</option>
              <option value="Other">Other</option>
            </select>
          </div>
        </div>

        <div class="question"  hidden>
          <p>Journal-Specific Formatting</p>
          <div class="question-answer">
            <div>
                <select name="journal_Specific_formatting" >
                    <option value="Anatomy" selected>null</option>
                </select>
            </div>

          </div>
        </div>
		<div class="item">
        <div class="item">
          <p>Upload File<span class="required">*</span></p>
			<input type="file" name="file" accept="file/*" >
        </div>
		</div>
		<div class="contact-item" hidden>
          <div class="item">
            <p>Target Journal<span class="required">*</span></p>
            <input type="text" name="name" value="null" required/>
          </div>
        </div>
		<div class="position-item" hidden>
          <div class="item">
            <p>English Style<span class="required">*</span></p>
            <select name="english_style" required>
              <option value="American" selected>American</option>
              <option value="British">British</option>
            </select>
          </div>
        </div>

		<div class="position-item">
		<div class="item">
		<div class="item">
            <p>Message to the Editor Style</p>

			<textarea rows="10" cols="70" name="comment"   >.</textarea>
          </div>
        </div>
		</div>
           <!-- <button type="submit" value="submit">Next</button> -->
          <!-- <br><br><br><div class="centered"><p style="font-size:50px; padding-top:2700px;">
          <div class="wrapper0">
          <a href="/user/services/translate/pay" ><span class="button" >Next Step</span></a>
            </div>
            </div> -->
       <div class="panel-footer">
            <button class="btn back-btn" type="submit" value="submit" style="margin-left:350px;">Next Step</button>
        </div>


      </form>
    </div>
  <!-- Grid -->
</div>





<p id="demo"></p>

<script>
var myElement = document.getElementById("timed").value;
document.getElementById("demo").innerHTML =
"merhaba " + myElement.innerHTML;
</script>
 @endguest
<!-- Footer -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="/home-page/js/pay.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>

    function getCakeSizePrice() {
    x = document.getElementById("selectedcake").value;
    return x;
    }
    function getcount() {
    zz = document.getElementById("count").value;
    return zz;
    }
    function calculateTotal() {
    var total;
    if(getCakeSizePrice()==1 )
    {
    total = getcount() * 5 ;
    }else if(getCakeSizePrice()==2 )
    {
    total = getcount() *6 ;
    }
    }
    document.getElementById('totalPrice').innerHTML = "Your Total is: $" + total;
    var totalEl = document.getElementById('totalPrice');
    $( "input[name='total_cost']" ).val(total);
    totalEl.style.display = 'block';
    }

    function hideTotal() {
    var totalEl = document.getElementById('totalPrice');
    totalEl.style.display = 'none';
    }
     </script>


@endsection




@extends('layouts.auth_user')
@section('title','Manuscript')
@section('content')

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
<link rel="stylesheet" href="/home-page/css/pay.css">




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
@guest
<!--
    <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
    </li>
    @if (Route::has('register'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
    @endif
    -->
    <script>window.location = "/register";</script>
@else






<!-- Content -->
<div class="w3-content" style="max-width:1100px;margin-top:50px;margin-bottom:80px;">
  <!-- Grid -->
  <div class="testbox">
  <form method="POST" action="{{ route('Orders.store') }}" enctype="multipart/form-data" >
@csrf

        <div class="banner">
          <h1>Apply your Request</h1>
        </div>
        <div class="item">
          <p>Project Name<span class="required">*</span></p>
          <div class="name-item">
            <input type="text" name="project_name" required/>
          </div>
        </div>

        <div class="position-item">
            <div class="item">
              <p>Project Type<span class="required">*</span></p>
              <select name="project_type" id="selectedcake" onchange="calculateTotal()" required>
                <option value="1">Turkish to English (translation & editing) </option>
                <option value="2">English to English (editing)</option>
              </select>
            </div>
          </div>
        <div class="contact-item">
          <div class="item">
            <p>Number of Words<span class="required">*</span></p>
            <input  name="number_of_words" id="count"  onchange="calculateTotal()"  required/>
          </div>
        </div>


        <div class="position-item">
          <div class="item" required>
            <p>Requested Turnaround Time<span class="required">*</span></p>
            <select name="requested_turnaround_time"  id="filling"   >

              <option value="72" >72 hours</option>
              <option value="7">7 Days</option>
            </select>
          </div>
        </div>
        <div class="item">
            <p>Total Cost<span class="required">*</span></p>
            <div class="name-item">
                <input  name="total_cost"  readonly  />
            </div>
          </div>

          <div class="item" id="totalPrice" hidden> cost</div>




          <input type="text" name="payment_status" value="ödeme bekleniyor " hidden  />
          <input type="text" name="status"   value="düzenleniyor" hidden/>



		<div class="position-item" hidden>
          <div class="item">
            <p>Category<span class="required">*</span></p>
            <select name="category" required>
              <option value="Business" selected>Business</option>
              <option value="Computer Science">Computer Science</option>
              <option value="Engineering">Engineering</option>
              <option value="Humanities/Social Sciences">Humanities/Social Sciences</option>
              <option value="Law">Law</option>
			  <option value="Life Sciences">Life Sciences</option>
			  <option value="Material Science">Material Science</option>
			  <option value="Mathmetics">Mathmetics</option>
			  <option value="Medicine">Medicine</option>
			  <option value="Physical Sciences">Physical Sciences</option>
			  <option value="Social Sciences">Social Sciences</option>
			  <option value="Other">Other</option>

            </select>
          </div>
        </div>
		<div class="position-item" hidden>
          <div class="item">
            <p>Subcategory</p>
            <select name="sub_category" >
              <option value="Anatomy" selected>Anatomy</option>
              <option value="Agriculture Sciences">Agriculture Sciences</option>
              <option value="Biochemistry">Biochemistry</option>
              <option value="Cell Biology">Cell Biology</option>
              <option value="Evolutionary Biology">Evolutionary Biology</option>
			  <option value="Developmental Biology">Developmental Biology</option>
              <option value="Environmental and Ecology">Environmental and Ecology</option>
              <option value="Marine Biology">Marine Biology</option>
              <option value="Microbiology">Microbiology</option>
              <option value="Molecular Biology">Molecular Biology</option>
			  <option value="Genetics">Genetics</option>
              <option value="Neuroscience">Neuroscience</option>
              <option value="Pharmacology and Toxicology">Pharmacology and Toxicology</option>
              <option value="Physiology">Physiology</option>
              <option value="Veterinary Medicine">Veterinary Medicine</option>
			  <option value="Zoology and Plant Biology">Zoology and Plant Biology</option>
              <option value="Other">Other</option>
            </select>
          </div>
        </div>

        <div class="question"  hidden>
          <p>Journal-Specific Formatting</p>
          <div class="question-answer">
            <div>
                <select name="journal_Specific_formatting" >
                    <option value="Anatomy" selected>null</option>
                </select>
            </div>

          </div>
        </div>
		<div class="item">
        <div class="item">
          <p>Upload File<span class="required">*</span></p>
			<input type="file" name="file" accept="file/*" >
        </div>
		</div>
		<div class="contact-item" hidden>
          <div class="item">
            <p>Target Journal<span class="required">*</span></p>
            <input type="text" name="name" value="null" required/>
          </div>
        </div>
		<div class="position-item" hidden>
          <div class="item">
            <p>English Style<span class="required">*</span></p>
            <select name="english_style" required>
              <option value="American" selected>American</option>
              <option value="British">British</option>
            </select>
          </div>
        </div>

		<div class="position-item">
		<div class="item">
		<div class="item">
            <p>Message to the Editor Style</p>

			<textarea rows="10" cols="70" name="comment"   >.</textarea>
          </div>
        </div>
		</div>
           <!-- <button type="submit" value="submit">Next</button> -->
          <!-- <br><br><br><div class="centered"><p style="font-size:50px; padding-top:2700px;">
          <div class="wrapper0">
          <a href="/user/services/translate/pay" ><span class="button" >Next Step</span></a>
            </div>
            </div> -->
       <div class="panel-footer">
            <button class="btn back-btn" type="submit" value="submit" style="margin-left:350px;">Next Step</button>
        </div>


      </form>
    </div>
  <!-- Grid -->
</div>





<p id="demo"></p>

<script>
var myElement = document.getElementById("timed").value;
document.getElementById("demo").innerHTML =
"merhaba " + myElement.innerHTML;
</script>
 @endguest
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="/home-page/js/pay.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@endsection




