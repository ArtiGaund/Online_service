<!DOCTYPE html>
<html>
<head>
<title>Movies</title>
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
	width: 81.5%;
	background-color: #E6E6FA;
	position: relative;
	bottom: 486px;
	margin-left: 130px;
}
#content
{
	width: 100%;
	height: 80px;
	position: relative;
	top: 400px;
}

.tab {
    overflow: auto;
    width: 100%;
    background-color: #f0f0f0;
	border-radius:5px;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    width: 50%;
    outline: none;
    cursor: pointer;
   	color: blue;
    padding: 14px 16px;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    color: red;
}

/* Create an active/current tablink class */
.tab button.active {
    color: green;
    background-color: #ffffff;
    border-bottom: none;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border-left: 2px solid grey;
    border-right: 2px solid grey;
    border-bottom: 2px solid grey;
	border-radius:5px;
}
#view
{
	width: 350px;
	height: 75px;
	background-color: #2F4F4F;
	position: relative;
	top: -700px;
	margin-left: 410px;
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
      <input type="text" placeholder="Movies.." name="search" style="position: relative;margin-left: 120px;
      top: -20px;width:250px;height: 20px;">
      <button type="submit" style="position: relative;margin-left: -5px;top: -15px;height: 25px;width: 15px;"><i class="fa fa-search"></i></button>
    </form>
	<ul style=" position: relative; width: 26%; float: right;">
		<li><a href="login.php">Login</a></li>
		<li><a href="Register.php">Register</a></li>
		<li><a href="#home">Home</a></li>
	</ul>
</div>
<div id="background2">
	<div id="content" ><h2 style="position: relative;margin-left: 30px;top: 25px;">Currently Showing Movies Near You</h2></div>
	<div id="selectBox" style="width: 300px;height: 300px;background-color: white;position: relative;top: 400px;margin-left: 40px;">
		<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')"><img src="images/Multimedia.png" style="width: 70px;height: 50px;">
  Features</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')"><img src="images/icon.png" style="width: 70px;height: 50px;">Details</button>
</div>

<div id="London" class="tabcontent">
  <p>Lenovo,iphone,etc.</p>
</div>

<div id="Paris" class="tabcontent">
  <p>Hardware and Software Configuration</p> 
</div>
	</div>
	<div id="hindi" style="width: 300px;height: 300px;background-color: white;position: relative;top: 100px;margin-left: 440px;"><img src="images/mumbai.jpg" style="height: 150px;width: 255px;position: relative;top: 20px;margin-left: 23px"><h1 style="font-size: 18px;position: relative;margin-left: 20px;color:#2F4F4F;top:17px;">Bhaagi 2(Hindi Movie)</h1><div style="height: 30px;width: 60px;background-color: #228B22;position: relative;margin-left: 220px;top: -15px;border-radius: 2px;"><p style="color: white;top: 5px;position: relative;" align="center">BOOK</p></div>
	<div style="height: 40px;width: 300px;background-color: #7FFFD4;position: relative;bottom: -28px;opacity: 0.5;top:12px;">
		<p style="position: relative;top: 8px;color:blue;" align="center"><b>Login to view more options</b></p>
	</div>
</div>
<div id="telgu" style="width: 300px;height: 300px;background-color: white;position: relative;top: -200px;margin-left: 850px;"><img src="images/english.jpg" style="height: 150px;width: 255px;position: relative;top: 20px;margin-left: 23px"><h1 style="font-size: 18px;position: relative;margin-left: 20px;color:#2F4F4F;top:17px;">Pacific Rim Uprising<br>(English Movie)</h1><div style="height: 30px;width: 60px;background-color: #228B22;position: relative;margin-left: 220px;top: -35px;border-radius: 2px;"><p style="color: white;top: 5px;position: relative;" align="center">BOOK</p></div>
	<div style="height: 40px;width: 300px;background-color: #7FFFD4;position: relative;bottom: -38px;opacity: 0.5;top:-8px;">
		<p style="position: relative;top: 8px;color:blue;" align="center"><b>Login to view more options</b></p>
	</div>
</div>
<div id="english" style="width: 300px;height: 300px;background-color: white;position: relative;top: -150px;margin-left: 40px;"><img src="images/telgu.jpg" style="height: 150px;width: 255px;position: relative;top: 20px;margin-left: 23px"><h1 style="font-size: 18px;position: relative;margin-left: 20px;color:#2F4F4F;top:17px;">Thole Prema(Telgu <br>Movie)</h1><div style="height: 30px;width: 60px;background-color: #228B22;position: relative;margin-left: 220px;top: -35px;border-radius: 2px;"><p style="color: white;top: 5px;position: relative;" align="center">BOOK</p></div>
	<div style="height: 40px;width: 300px;background-color: #7FFFD4;position: relative;bottom: -28px;opacity: 0.5;top:-10px;">
		<p style="position: relative;top: 8px;color:blue;" align="center"><b>Login to view more options</b></p>
	</div>
</div>
<div id="korean" style="width: 300px;height: 300px;background-color: white;position: relative;top: -450px;margin-left: 440px;"><img src="images/korean.jpg" style="height: 150px;width: 255px;position: relative;top: 20px;margin-left: 23px"><h1 style="font-size: 18px;position: relative;margin-left: 20px;color:#2F4F4F;top:17px;">The Intruder(Korean <br>Movie)</h1><div style="height: 30px;width: 60px;background-color: #228B22;position: relative;margin-left: 220px;top: -35px;border-radius: 2px;"><p style="color: white;top: 5px;position: relative;" align="center">BOOK</p></div>
	<div style="height: 40px;width: 300px;background-color: #7FFFD4;position: relative;bottom: -28px;opacity: 0.5;top:-10px;">
		<p style="position: relative;top: 8px;color:blue;" align="center"><b>Login to view more options</b></p>
	</div>
</div>
<div id="" style="width: 300px;height: 300px;background-color: white;position: relative;top: -750px;margin-left: 850px;"><img src="images/hichki.jpg" style="height: 150px;width: 255px;position: relative;top: 20px;margin-left: 23px"><h1 style="font-size: 18px;position: relative;margin-left: 20px;color:#2F4F4F;top:17px;">Hichki (Hindi Movie)</h1><div style="height: 30px;width: 60px;background-color: #228B22;position: relative;margin-left: 220px;top: -15px;border-radius: 2px;"><p style="color: white;top: 5px;position: relative;" align="center">BOOK</p></div>
	<div style="height: 40px;width: 300px;background-color: #7FFFD4;position: relative;bottom: -28px;opacity: 0.5;top:12px;">
		<p style="position: relative;top: 8px;color:blue;" align="center"><b>Login to view more options</b></p>
	</div>
</div>
	<div id="view"><h1 align="center" style="position: relative;top: 15px;color: white;">View All Categories</h1></div>
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
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>

</body>
</html>s