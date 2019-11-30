<!DOCTYPE html>
<html>
<head>
<title>Restauants</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<style>
#background
{
	height: 1200px;
	width: 100%;
	background-color: #DCDCDC;
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
#image
{
	width:80%;
	height: 200px;
	position: relative;
	margin-left: 130px;
	top: -79px;
}
#content
{
	width:80%;
	height: 60px;
	position: relative;
	top:-350px;
	margin-left: 120px;
}
#table
{
	height: 200px;
	width: 350px;
	z-index: 5;
	position: relative;
	background-color: #FF7F50;
	margin-left: 230px;
	bottom: 30px;
}
#trend
{
	height: 200px;
	width: 350px;
	z-index: 5;
	position: relative;
	background-color: #696969;
	margin-left: 580px;
	bottom: 230px;
}
#order
{
	height: 200px;
	width: 350px;
	z-index: 5;
	position: relative;
	background-color: #FF7F50;
	margin-left: 930px;
	bottom: 430px;
}
#background2
{
	height: 700px;
	width: 80%;
	background-color: #E6E6FA;
	position: relative;
	bottom: 486px;
	margin-left: 130px;
}
#Indian
{
	width: 260px;
	height: 300px;
	background-color: white;
	position: relative;
	margin-left: 20px;
	top: 75px;
}
#global
{
	width: 260px;
	height: 300px;
	background-color: white;
	position: relative;
	margin-left: 320px;
	top: -225px;
}
#nightlife
{
	width: 260px;
	height: 300px;
	background-color: white;
	position: relative;
	margin-left: 620px;
	top: -524px;
}
#sweet
{
	width: 260px;
	height: 300px;
	background-color: white;
	position: relative;
	margin-left: 925px;
	top: -825px;
}
#view
{
	width: 350px;
	height: 75px;
	background-color: #2F4F4F;
	position: relative;
	bottom: 750px;
	margin-left: 400px;
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
      <input type="text" placeholder="Restaurants.." name="search" style="position: relative;margin-left: 120px;
      top: -20px;width:250px;height: 20px;">
      <button type="submit" style="position: relative;margin-left: -5px;top: -15px;height: 25px;width: 15px;"><i class="fa fa-search"></i></button>
    </form>
	<ul style=" position: relative; width: 26%; float: right;">
		<li><a href="login.php">Login</a></li>
		<li><a href="Register.php">Register</a></li>
		<li><a href="index.php">Home</a></li>
	</ul>
</div>
<a href="Restaurants_blog.php" style="text-decoration: none;">
<div id="image"><img  src="images/Resto_Banner@1x.jpg" width="100%">
<div id="content"><h1 style="position: relative;color: white;margin-left: 50px;font-size: 60px;">IT'S ALL ABOUT GOOD FOOD</h1></div>
</div>
</a>
<a href="Restaurants_blog.php" style="text-decoration: none;">
<div id="table"><img src="images/bar-icon.png" style="height: 100px;width: 100px;position: relative;margin-left: 120px;top: 15px;">
	<h1 style="color: white;font-size: 25px;font-family: sans-serif;position: relative;margin-left: 90px;">BOOK TABLE</h1>
	<h5 style="position: relative;color: white;margin-left: 95px;font-size: 15px;top:-19px;">MAKE RESERVATION</h5>
</div></a>
<a href="Restaurants_blog.php" style="text-decoration: none;">
<div id="trend"><img src="images/icon3.png" style="height: 100px;width: 100px;position: relative;margin-left: 120px;top: 15px;">
	<h1 style="color: white;font-size: 25px;font-family: sans-serif;position: relative;margin-left: 50px;">WHAT'S TRENDING?</h1>
	<h5 style="position: relative;color: white;margin-left: 95px;font-size: 15px;top:-19px;">TRY IT YOURSELF</h5></div></a>
	<a href="Restaurants_blog.php" style="text-decoration: none;">
<div id="order">
	<img src="images/abc.png" style="height: 100px;width: 100px;position: relative;margin-left: 120px;top: 15px;">
	<h1 style="color: white;font-size: 25px;font-family: sans-serif;position: relative;margin-left: 90px;">ORDER FOOD</h1>
	
</div>
</a>

<div id="background2">
	<a href="Restaurants_blog.php" style="text-decoration: none;">
	<div id="Indian"><img src="images/i_indianflavours.jpg" style="height: 130px;width: 260px;position: relative;">
		<h1 style="font-size: 20px;position: relative;margin-left: 10px;">Indian Food</h1>
		<h5 style="position: relative;font-size: 15px;position: relative;margin-left: 10px;">Pure Veg</h5><h5 style="position: relative;font-size: 15px;position: relative;margin-left: 10px;">Veg</h5><h5 style="position: relative;font-size: 15px;position: relative;margin-left: 10px;">more..</h5>
	</div>
</a>
<a href="Restaurants_blog.php" style="text-decoration: none;">
	<div id="global"><img src="images/i_globalcuisines.jpg" style="height: 130px;width: 260px;position: relative;">
		<h1 style="font-size: 20px;position: relative;margin-left: 10px;">Global Cuisines</h1>
		<h5 style="position: relative;font-size: 15px;position: relative;margin-left: 10px;">Chinese</h5><h5 style="position: relative;font-size: 15px;position: relative;margin-left: 10px;">Italian</h5><h5 style="position: relative;font-size: 15px;position: relative;margin-left: 10px;">more..</h5>
	</div></a>
	<a href="Restaurants_blog.php" style="text-decoration: none;">
	<div id="nightlife"><img src="images/i_nightlife.jpg" style="height: 130px;width: 260px;position: relative;">
		<h1 style="font-size: 20px;position: relative;margin-left: 10px;">NightLife</h1>
		<h5 style="position: relative;font-size: 15px;position: relative;margin-left: 10px;">Restaurants and bars</h5><h5 style="position: relative;font-size: 15px;position: relative;margin-left: 10px;">Night Clubs</h5><h5 style="position: relative;font-size: 15px;position: relative;margin-left: 10px;">more..</h5>
	</div></a>
	<a href="Restaurants_blog.php" style="text-decoration: none;">
	<div id="sweet"><img src="images/i_sweettooth.jpg" style="height: 130px;width: 260px;position: relative;">
<h1 style="font-size: 20px;position: relative;margin-left: 10px;">Sweet Tooth</h1>
		<h5 style="position: relative;font-size: 15px;position: relative;margin-left: 10px;">Cake Shop</h5><h5 style="position: relative;font-size: 15px;position: relative;margin-left: 10px;">Pastry Shop</h5>
	</div>

</a>
<a href="Restaurants_blog.php" style="text-decoration: none;">
	<div id="view"><h1 align="center" style="position: relative;top: 15px;color: white;">View All Categories</h1></div>
</div>
</a>
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