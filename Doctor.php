<!DOCTYPE html>
<html>
<head>
<title>Doctor</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<style>
#background
{
	height: 1200px;
	width: 100%;
	background-color: grey;
}
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
	top: -60px;
	margin-right: 1px;
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
#background2
{
	height: 1500px;
	width: 80%;
	background-color: #E6E6FA;
	position: relative;
	bottom: 486px;
	margin-left: 130px;
}
#im
{
	height: 250px;
	width: 100%;
	position: relative;
	top: 405px;
}
#container
{
	height: 600px;
	width: 50%;
	background-color: white;
	position: relative;
	top:500px;
	margin-left: 300px;
	border-radius: 10px;

}
#ac
{
	height: 75px;
	width: 80%;
	background-color: #E6E6FA;
	position: relative;
	top: 20px;
	margin-left: 60px;
	border-radius: 5px;
}
h4:hover
{
	color: #D2691E;
	cursor: pointer;
	font-family: sans-serif;
}
#car
{
	height: 75px;
	width: 80%;
	background-color: white;
	position: relative;
	top: 20px;
	margin-left: 60px;
	border-radius: 5px;
}
#computer
{
	height: 75px;
	width: 80%;
	background-color: #E6E6FA;
	position: relative;
	top: 20px;
	margin-left: 60px;
	border-radius: 5px;
}
#mobile
{
	height: 75px;
	width: 80%;
	background-color: white;
	position: relative;
	top: 20px;
	margin-left: 60px;
	border-radius: 5px;
}
#motorcycle
{
	height: 75px;
	width: 80%;
	background-color: #E6E6FA;
	position: relative;
	top: 20px;
	margin-left: 60px;
	border-radius: 5px;
}
#refrigrator
{
	height: 75px;
	width: 80%;
	background-color:white;
	position: relative;
	top: 20px;
	margin-left: 60px;
	border-radius: 5px;
}
#washing
{
	height: 75px;
	width: 80%;
	background-color:  #E6E6FA;
	position: relative;
	top: 20px;
	margin-left: 60px;
	border-radius: 5px;
}

</style>
</head>
<body>
	<div id="background">
<div id="menu" style="width:1200px;height:80px;background-color: white;position: relative;margin-left: 130px;">
	<div id="mySlidenav" class="sidenav" style="background-attachment: fixed;">
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	<a href="#"><i class="material-icons">local_airport</i>Air Tickets</a>
	<a href="#"><i class="material-icons"></i>Apply for Loans</a>
	<a href="#"><i class="material-icons">directions_car</i>Auto care</a>
	<a href="#"><i class="material-icons"></i>Book Hotel</a>
	<a href="#"><i class="material-icons"></i>Books</a>

	</div>
<span style="font-size: 30px;cursor: pointer; background-attachment: fixed;position: relative;top:15px;
" onclick="openNav()">&#9776;Home</span>
	<form action="">
      <input type="text" placeholder="Search.." name="search" style="position: relative;margin-left: 120px;
      top: -20px;width:250px;height: 20px;">
      <button type="submit" style="position: relative;margin-left: -5px;top: -15px;height: 25px;width: 15px;"><i class="fa fa-search"></i></button>
    </form>
	<ul style=" position: relative; width: 26%; float: right;">
		<li><a href="login.php">Login</a></li>
		<li><a href="Register.php">Register</a></li>
		<li><a href="index.php">Home</a></li>
	</ul>
</div>
<div id="background2">
	<div id="im"><img src="images/b_57.jpg" style="width: 100%;"></div>
	<div id="container">
		<a href="Doctor_Service.php" style="text-decoration: none;">
		<div id="ac"><img src="images/ayurvedic.png" style="height: 80px;width: 80px;position: relative;margin-left: 5px;"><h4 style="position: relative;top: -90px;margin-left: 100px;font-size: 20px;font-family: sans-serif;">Ayurvedic Doctor</h4><i class="material-icons" style="position: relative;margin-left: 430px;top: -145px;font-size: 50px;color: grey;">chevron_right</i></div></a>
		<a href="Doctor_Service.php" style="text-decoration: none;">
		<div id="car"><img src="images/bus.png" style="height: 70px;width: 80px;position: relative;margin-left: 5px;"><h4 style="position: relative;top: -75px;margin-left: 100px;font-size: 20px;font-family: sans-serif;">Cardiologists</h4><i class="material-icons" style="position: relative;margin-left: 430px;top: -135px;font-size: 50px;color: grey;">chevron_right</i></div></a>
		<a href="Doctor_Service.php" style="text-decoration: none;">
		<div id="computer"><img src="images/cabs.png" style="height: 70px;width: 80px;position: relative;margin-left: 5px;"><h4 style="position: relative;top: -75px;margin-left: 100px;font-size: 20px;font-family: sans-serif;">Chest Specialists</h4><i class="material-icons" style="position: relative;margin-left: 430px;top: -135px;font-size: 50px;color: grey;">chevron_right</i></div></a>
		<a href="Doctor_Service.php" style="text-decoration: none;">
		<div id="mobile"><img src="images/train.png" style="height: 70px;width: 80px;position: relative;margin-left: 5px;"><h4 style="position: relative;top: -75px;margin-left: 100px;font-size: 20px;font-family: sans-serif;">Dentists</h4><i class="material-icons" style="position: relative;margin-left: 430px;top: -135px;font-size: 50px;color: grey;">chevron_right</i></div></a>
		<a href="Doctor_Service.php" style="text-decoration: none;">
		<div id="motorcycle"><img src="images/hotel.png" style="height: 70px;width: 80px;position: relative;margin-left: 5px;"><h4 style="position: relative;top: -75px;margin-left: 100px;font-size: 20px;font-family: sans-serif;">Dermatologists</h4><i class="material-icons" style="position: relative;margin-left: 430px;top: -135px;font-size: 50px;color: grey;">chevron_right</i></div></a>
		<a href="Doctor_Service.php" style="text-decoration: none;">
		<div id="refrigrator"><img src="images/meal.png" style="height: 70px;width: 80px;position: relative;margin-left: 5px;"><h4 style="position: relative;top: -75px;margin-left: 100px;font-size: 20px;font-family: sans-serif;">Diabetologists</h4><i class="material-icons" style="position: relative;margin-left: 430px;top: -135px;font-size: 50px;color: grey;">chevron_right</i></div></a>
		<a href="Doctor_Service.php" style="text-decoration: none;">
		<div id="washing"><img src="images/tour.png" style="height: 70px;width: 80px;position: relative;margin-left: 5px;"><h4 style="position: relative;top: -75px;margin-left: 100px;font-size: 20px;font-family: sans-serif;">Eye Specialists</h4><i class="material-icons" style="position: relative;margin-left: 430px;top: -135px;font-size: 50px;color: grey;">chevron_right</i></div>
		</a>
	</div>
	<div></div>
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