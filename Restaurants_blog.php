<!DOCTYPE html>
<html>
<head>
<title>Restaurants Blog</title>
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
#picture
{
	height: 120px;
	width: 95%;
	position: relative;
	top: 400px;
	margin-left: 30px;
}
#block1
{
	height: 200px;
	width: 95%;
	background-color: white;
	position: relative;
	top: 420px;
	margin-left: 30px;
}
#image1
{
	height: 150px;
	width: 300px;
	position: relative;
	margin-left: 30px;
	top: 20px;
	border-radius: 10px;
}
#manu1
{
	height: 150px;width: 750px;background-color: white;position: relative;margin-left: 320px;top: -150px;
}
#block2
{
	height: 200px;
	width: 95%;
	background-color: white;
	position: relative;
	top: 440px;
	margin-left: 30px;
}
#image2
{
	height: 150px;
	width: 300px;
	position: relative;
	margin-left: 30px;
	top: 20px;
	border-radius: 10px;
}
#silver
{
	height: 150px;width: 750px;background-color: white;position: relative;margin-left: 320px;top: -150px;
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
	<div id="picture"><img src="images/restaurant_blog.jpg" style="width: 100%;"></div>
	<div id="block1">
		<div id="image1"><img src="images/manu.jpg" style="height: 150px;width: 300px;border-radius: 10px;">
			<div id="manu1">
				<p style="font-family: sans-serif;font-size: 20px;position: relative;top: -24px;"><b>Manu Family Restaurant</b></p><br>
				<i class="material-icons" style="position: relative;top: -55px;" >perm_phone_msg</i><p style="position: relative;top: -98px;margin-left: 30px;"">+(91)-9246892524</p>
				<i class="material-icons" style="position: relative;top: -100px;" >local_bar</i><p style="position: relative;top: -140px;margin-left: 30px;"">Shiva Paper Mart</p>
				<i class="material-icons" style="position: relative;top: -140px;" >chevron_right</i><p style="position: relative;top: -180px;margin-left: 30px;"">North Indian Restaurant</p>
				<a href="form_restaurant.php" style="text-decoration: none;"><input type="submit" name="book" value="BOOK" style="height: 60px;width: 100px;position: relative;top: -250px;margin-left: 600px;border-radius: 5px;background-color: green;box-shadow: none;color: white;"></a>

			</div>
		</div>
	</div>
	<div id="block2">
			<div id="image2"><img src="images/silver1.jpg" style="height: 150px;width: 300px;border-radius: 10px;">
			<div id="silver">
				<p style="font-family: sans-serif;font-size: 20px;position: relative;top: -24px;"><b>Manu Family Restaurant</b></p><br>
				<i class="material-icons" style="position: relative;top: -55px;" >perm_phone_msg</i><p style="position: relative;top: -98px;margin-left: 30px;"">+(91)-9246892524</p>
				<i class="material-icons" style="position: relative;top: -100px;" >local_bar</i><p style="position: relative;top: -140px;margin-left: 30px;"">Shiva Paper Mart</p>
				<i class="material-icons" style="position: relative;top: -140px;" >chevron_right</i><p style="position: relative;top: -180px;margin-left: 30px;"">North Indian Restaurant</p>
				<input type="submit" name="book" value="BOOK" style="height: 60px;width: 100px;position: relative;top: -250px;margin-left: 600px;border-radius: 5px;background-color: green;box-shadow: none;color: white;">

			</div>
		</div>	
	</div>
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