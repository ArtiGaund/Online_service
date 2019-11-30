<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<style>
#menu
{
	z-index: 5;
	top: 0px;
	position: fixed;
	background-attachment: fixed;
	margin-bottom: 80px;
	box-shadow: 10 4px 8px 10 rgba(0,0,0,0.2);
}
.sidenav
		{
			height: 100%;
			width: 0;
			position: fixed;
			z-index: 1;
			top:0;
			left: 0;
			background-color:#111;
			overflow-x:hidden;
			transition: 0.5s;
			padding-top: 60px; 
		}
		.sidenav a
		{
			padding: 8px 8px 8px 32px;
			text-decoration: none;
			font-size: 25px;
			color: #818181;
			display: block;
			transition: 0.3s;
		}
		.sidenav a:hover
		{
			position: relative;
			top: 0;
			right: 25px;
			font-size: 36px;
			margin-left: 50px;
		}
		@media screen and (max-height: 450px)
		{
			.sidenav{padding-top: 15px;}
			.sidenav a{font-size: 18px;}
		}
ul
{
	list-style-type:none;
	margin:0;
	padding:0;
	overflow:hidden;
	background-color:white;
	
}

li{
	float:right;
	border:1px solid #8B0000;
}
li a{
	display:block;
	color:black;
	text-align:center;
	padding:14px 16px;
	text-decoration:none;
}
li a:hover
{
	background-color:#FFE4C4;
}
#slideshow {
	overflow: hidden;
	height: 400px;
	width: 100%;
	margin-top: 80px;
}
.slide-wrapper{
width: 400%;
-webkit-animation: slide 18s ease infinite;
}
#bar{
	top: -50px;
	height: 50px;
	background-color: #f1f1f1;
	opacity: 0.8;
	font-size: 25px;
	color: black;
	padding-left: 80px;
	padding-top: 10px;
	position: relative;
}
#card_background
{
	position: relative;
	top: -65px;
	width: 100%;
	height: 1400px;
	background-color: #f2f2f2;
}
.card1 {
	top: 10px;
	border: 1px solid green;
	background-color: white;	
	margin-left: 130px;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.1s;
    width: 330px;
    height: 500px;
    position: relative;
    padding: 10px;
    float: left;
}

.card1:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    width:350px;
    height:550px;
}

.container1 {
	width:350px;
	height: 400px;
    padding: 2px 16px;
}

.card3 {
	top: -740px;
	border: 1px solid green;
	background-color: white;	
	margin-left: 480px;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.1s;
    width: 330px;
    height: 500px;
    position: relative;
    padding: 10px;
    float: left;
}

.card3:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    width:350px;
    height:550px;
}

.container3 {
	width:350px;
	height: 400px;
    padding: 2px 16px;
}
.card4 {
	top: -1255px;
	border: 1px solid green;
	background-color: white;	
	margin-left: 1000px;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.1s;
    width: 330px;
    height: 500px;
    position: relative;
    padding: 10px;
    float: left;
}

.card4:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    width:350px;
    height:550px;
}

.container4{
	width:350px;
	height: 400px;
    padding: 2px 16px;
}
.card5 {
	top: -1200px;
	border: 1px solid green;
	background-color: white;	
	margin-left: 0px;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.1s;
    width: 330px;
    height: 550px;
    position: relative;
    padding: 10px;
    float: left;
}

.card5:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    width:350px;
    height:570px;
}

.container5 {
	width:350px;
	height: 400px;
    padding: 2px 16px;
}
.card6 {
	top: -800px;
	border: 1px solid green;
	background-color: white;	
	margin-left: 470px;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.1s;
    width: 330px;
    height: 550px;
    position: relative;
    padding: 10px;
    float: left;
}

.card6:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    width:350px;
    height:550px;
}

.container6 {
	width:350px;
	height: 400px;
    padding: 2px 16px;
}
.card8 {
  top: -800px;
  border: 1px solid green;
  background-color: white;  
  margin-left: 470px;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.1s;
    width: 330px;
    height: 550px;
    position: relative;
    padding: 10px;
    float: left;
}

.card8:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    width:350px;
    height:550px;
}

.container8 {
  width:350px;
  height: 400px;
    padding: 2px 16px;
}
.slide{
float: left;
height: 400px;
width: 25%;
background: #f2f2f2;
}
@-webkit-keyframes slide {
20% {margin-left: 0px;}
30% {margin-left: -100%;}
50% {margin-left: -100%;}
60% {margin-left: -200%;}
70% {margin-left: -200%;}
80% {margin-left: -300%;}
90% {margin-left: -300%;}
}

</style>
</head>
<body>
<div id="menu" style="width:100%;height:80px;background-color: white">
	<div id="mySlidenav" class="sidenav" style="background-attachment: fixed;">
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	<a href="#"><i class="material-icons">local_airport</i>Air Tickets</a>
	<a href="#"><i class="material-icons"></i>Apply for Loans</a>
	<a href="#"><i class="material-icons">directions_car</i>Auto care</a>
	<a href="#"><i class="material-icons"></i>Book Hotel</a>
	<a href="#"><i class="material-icons"></i>Books</a>

	</div>
<span style="font-size: 30px;cursor: pointer; background-attachment: fixed;" onclick="openNav()">&#9776;Home</span>
	<ul style=" position: relative; width: 20%; float: right;">
		<li><a href="login.php">Login</a></li>
		<li><a href="Register.php">Register</a></li>
		<li><a href="index.php">Home</a></li>
	</ul>
</div>
<div id="slideshow">
	<div class="slide-wrapper">
		<div class="slide"><img width="100%" height="400px" id="myimage" src="images/Advtg_Offer_Banner_Mumbai.jpg"></div>
		<div class="slide"><img width="100%" height="400px" id="myimage" src="images/image_3.png"></div>
		<div class="slide"><img width="100%" height="400px" id="myimage" src="images/CardOffers.jpg"></div>
		<div class="slide"><img width="100%" height="400px" id="myimage" src="images/image_3.png"></div>
	</div>
</div>
<div id="bar">
<!-- <p align="center" style="font-size:25px;background-color:rgba(128,128,128,0.1);height:50px;padding-top:-10px;position: relative;"> -->
Electrician,Plumber,Carpenter,AC Repair and Maintenance,Catering,Civil Repair,Whitewashing Services at your doorstep
</div>
<div id="card_background">
	<div class="card1">
    <a href="Restaurants.php" style="text-decoration: none;">
  <img src="images/restaurant.jpg" alt="Avatar" style="width:100%">
  <div class="container1">
    <h4><b>Restaurants</b></h4> 
    <p>Order Online</p>
    <p>Book Table</p>
    <p>more</p>
  </div>
</a>
  	<div class="card3">
      <a href="Movies.php" style="text-decoration: none;">
  <img src="images/movies.jpg" alt="Avatar" style="width:100%">
  <div class="container3">
    <h4><b>Movies</b></h4> 
    <p>Raid</p> 
    <p>Hichki</p> 
    <p>more</p> 
  </div>
  </a>
</div>	
<div class="card4">
  <a href="Doctor.php" style="text-decoration: none;">
  <img src="images/Doctors.jpg" alt="Avatar" style="width:100%">
  <div class="container4">
    <h4><b>Doctors</b></h4> 
    <p>Dentists</p> 
    <p>Dermatologists</p> 
    <p>more</p> 
  </div>
</a>
</div>	
<div class="card5">
  <a href="travel.php" style="text-decoration: none;">
  <img src="images/travel.jpg" alt="Avatar" style="width:100%">
  <div class="container5">
    <h4><b>Travels</b></h4> 
    <p>Flights</p>
    <p>Bus</p>
    <p>more</p>
  </div>
</a>
  	<div class="card6">
      <a href="Repairs.php" style="text-decoration: none;">
  <img src="images/repairs.jpg" alt="Avatar" style="width:100%">
  <div class="container6">
    <h4><b>Repairs</b></h4> 
    <p>Ac</p> 
    <p>Mobiles</p> 
    <p>more</p> 
  </div>
</a>
<div class="card8">
  <a href="Demand_Service.php" style="text-decoration: none;">
  <img src="images/ondemand.jpg" alt="Avatar" style="width:100%">
  <div class="container8">
    <h4><b>On Demand Services</b></h4> 
    <p>Carpenters</p> 
    <p>Electrician</p> 
    <p>more</p> 
  </div>
</a>
</div>	

  	
</div>
<script type="text/javascript">
	function openNav()
	{
		document.getElementById("mySlidenav").style.width="250px";
	}
	function closeNav()
	{
		document.getElementById("mySlidenav").style.width="0";
	}
</script>
</body>
</html>