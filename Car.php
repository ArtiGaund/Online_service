<?php include("connect.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>Car</title>
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
#ac
{
	height: 40px;
	width: 150px;
	position: relative;
	top: 420px;
}
#line
{
	height: 7px;
	width: 125px;
	background-color: red;
	position: relative;
	top: 420px;
	margin-left: 15px;
}
#line1
{
	height: 6px;
	width: 97%;
	background-color: red;
	position: relative;
	top: 420px;
	margin-left: 15px;
}
#im
{
	height: 350px;
	width: 580px;
	background-color: white;
	position: relative;
	top: 450px;
	margin-left: 50px;
	border-radius: 5px;
}
#service
{
	height: 50px;
	width:150px;
	position: relative;
	top: 80px;
	margin-left: 670px;
}
#line3
{
	height: 6px;
	width: 125px;
	background-color: red;
	position: relative;
	left: 690px;
	top: 70px;
} 
#line4
{
	height: 6px;
	width: 490px;
	background-color: red;
	position: relative;
	margin-left: 690px;
	top: 70px;
}
#price
{
	height: 270px;
	width: 450px;
	background-color: white	;
	position: relative;
	margin-left: 690px;
	top: 100px;
	overflow-y: scroll;
}
#data
{
	height: 400px;
	width: 600px;
	background-color: #E6E6FA;
	position: relative;
	top:430px;
	margin-left: 100px;
}
#scroll
{
	height: 400px;
	width: 450px;
	background-color: white;
	position: relative;
	top: -300px;
	margin-left: 700px;
	overflow-y: scroll;
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
	<div id="ac"><h2 style="color: red;position: relative;margin-left: 15px;top: 5px;font-family: sans-serif;">Car Repair</h2></div>
	<div id="line"></div>
	<div id="line1"></div>
	<div id="im"><img src="images/CAR_REPAIR.jpeg" style="height: 250px;width:550px;position: relative;top: 14px;margin-left: 14px; ">
		<p style="position: relative;margin-left: 10px;font-family: sans-serif;">Ensure long life of your air conditioners. Getting it regularly serviced by our experienced professionals, who are well trained to undertake work on both window as well as split air conditioners Services offered: • AC servicing • AC repair • AC gas refilling</p>
	</div>
	<div id="service"><h3 style="position: relative;top: 15px;margin-left: 20px;font-family: sans-serif;color: red;">Service price</h3></div>
	<div id="line3"></div>
	<div id="line4"></div>
	<div id="data">
		<form method="post" action="Car.php">
			<table style="position: relative;margin-left: 150px;top: 40px;" align="center">
				<tr><td><label style="font-family: sans-serif;font-size: 20px;">Selected City</label></td>
					<td><select style="width: 170px;height: 30px;font-size: 15px;" name="select_city">
						<option value="delhi" >Delhi</option>
						<option value="mumbai">Mumbai</option>
						<option value="Banglore">Banglore</option>
						<option value="up">U.P.</option>
						<option value="mp">M.P.</option>
						<option value="Rajesthan">Rajesthan</option>
						<option value="Gujarat">Gujarat</option>
					</select></td></tr>
				<tr><td><label style="font-family: sans-serif;font-size: 20px;">Desired Service</label></td><td><label style="font-family: sans-serif;font-size: 15px;">AC Repair</label></td></tr>
				<tr><td><label style="font-family: sans-serif;font-size: 20px;">Enter Area Pin code</label></td><td><input type="text" name="pin_code" style="width: 170px;height: 30px;font-size: 15px;"></td></tr>
				<tr><td><label style="font-family: sans-serif;font-size: 20px;">Desired Area</label></td><td><input type="text" name="area" style="width: 170px;height: 30px;font-size: 15px;"></td></tr>
				<tr><td><label style="font-family: sans-serif;font-size: 20px;">Select date</label></td><td><input type="text" name="date" style="width: 170px;height: 30px;font-size: 15px;"></td></tr>
				<tr><td><label style="font-family: sans-serif;font-size: 20px;">Problem Description</label></td><td><input type="textarea" name="problem" style="width: 170px;height: 30px;font-size: 15px;"></td></tr>
			</table>
			<input type="checkbox" name="yes" style="position: relative;top: 60px;margin-left: 150px;"><label style="position: relative;top: 60px;font-size: 18px;">I agree to terms and conditions</label><br>
			<input type="submit" name="submit" value="Submit" style="position: relative;top: 70px;margin-left: 250px;width: 150px;background-color: white;">
		</form>
	</div>
	<div id="scroll">
		<table style="position: relative;top: 0px;">
			<tr><td>AC Stabilizer Installation</td><td>RS. 180/-</td></tr>
			<tr><td>AC Switch Installation</td><td>RS. 180/-</td></tr>
			<tr><td>Cassate AC gas refilling @Rs.1499/-per tonn</td><td>RS. 1499/-</td></tr>
			<tr><td>Cassate AC gas refilling @Rs.999/-per tonn</td><td>RS. 999/-</td></tr>
			<tr><td>Cassate AC servicing @Rs.799/-</td><td>RS. 799/-</td></tr>
			<tr><td>Cassate AC servicing @Rs.999/-</td><td>RS. 999/-</td></tr>
			<tr><td>Split AC  Fitting</td><td>RS. 1700/-</td></tr>
			<tr><td>Split AC Gas filling-1 ton</td><td>RS. 1499/-</td></tr>
			<tr><td>Split AC Gas filling-1.5 ton</td><td>RS. 1999/-</td></tr>
			<tr><td>Split AC Gas filling-2 ton</td><td>RS. 1999/-</td></tr>
			<tr><td>Split AC Gas filling-2.5 ton</td><td>RS. 2500/-</td></tr>
			<tr><td>Split AC Removal</td><td>RS. 800/-</td></tr>
			<tr><td>Split AC Servicing</td><td>RS. 199/-</td></tr>
			<tr><td>Window AC Fitting</td><td>RS. 400/-</td></tr>
			<tr><td>Window AC Fitting-With skirting</td><td>RS. 700/-</td></tr>
			<tr><td>Window AC Fitting-With skirting and Material</td><td>RS. 1000/-</td></tr>
			<tr><td>Window AC Fitting-1 ton</td><td>RS. 1499/-</td></tr>
			<tr><td>Window AC Fitting-1.5 ton</td><td>RS. 1499/-</td></tr>
			<tr><td>Window AC Fitting-2 ton</td><td>RS. 1499/-</td></tr>
			<tr><td>Window AC Fitting-2.5 ton</td><td>RS. 1999/-</td></tr>
			<tr><td>Window AC Removal</td><td>RS. 250/-</td></tr>
			<tr><td>Window AC Servicing</td><td>RS. 180/-</td></tr>
		</table>
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
<?php
if(isset($_POST['submit']))
{
	$city=$_POST['select_city'];
	$pin=$_POST['pin_code'];
	$area=$_POST['area'];
	$date=$_POST['date'];
	$problem=$_POST['problem'];
	$query="insert into car(select_city,area_pin,area,date,problem)values('$city','$pin','$area','$date','$problem')";
	$run=mysql_query($query);
	if($run)
	{
		echo "<script>window.open('index.php?booking=booking completed!','_self')</script>";
	exit();
	}
	
    else{
	echo  "<script>alert('booking failed')</script>";
	exit();
     }
}

?>