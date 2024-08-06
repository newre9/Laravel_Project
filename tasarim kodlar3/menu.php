<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: grey;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height:35px;
  border-radius: 4px;
  margin-left:15px;
}

.logo{
	float:left;}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}
.header a.active1 {
  background-color: orange;
  color: white;
}

.header-right {
  float: right;
}


</style>
</head>
<body>

<div class="header">
<div class="logo">
  <img src="WhatsApp Image 2020-05-12 at 21.18.08.jpeg"  width="100" height="70"></div>
   <a href="#contact">Home</a>
    <a href="#about">Services</a>
   <a href="#contact">Contact</a>
    <a href="#about">About</a>
  <div class="header-right">
    <a class="active" href="#home">Singin</a>
     <a class="active1" href="#home">Singup</a>
    
  </div>
</div>

<div style="padding-left:20px">
  <h1>Responsive Header</h1>
  <p>Resize the browser window to see the effect.</p>
  <p>Some content..</p>
</div>

</body>
</html>