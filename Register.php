<?php include("connect.php");
?>
<?php
	// echo "<script>alert('done')</script>";
if(isset($_POST['register']))
{
	$username=$_POST['username'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$password=$_POST['password'];
	$c_password=$_POST['c_password'];
	$query="insert into register(name,email,phone,password,c_password)values('$username','$email','$phone','$password','$c_password')";
	$run=mysql_query($query);
	if($run)
	{
			$q="insert into login(email,password)values('$email','$password')";
			$run1=mysql_query($q);
			if($run1)
			{
				echo "<script>window.open('index.php?book=booking done','_self')</script>";
				exit();
			}
			else
			{
				echo "<script>alert('not inserted into login lable')</script>";
				exit();
			}
	}
	
    else{
	echo  "<script>alert('booking failed')</script>";
	exit();
     }
    
}

?>
<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.1.1/material.indigo-pink.min.css">
<script defer src="https://code.getmdl.io/1.1.1/material.min.js"></script>
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
	<div id="background3">
		<div class="mdl-grid">
<div class="mdl-layout mdl-js-layout mdl-color--grey-100" style="position: relative;top: 400px;margin-left: -8px;">
	<main class="mdl-layout__content" style="position: relative;top: 100px;margin-left: 400px;">
		<div class="mdl-card mdl-shadow--6dp">
			<div class="mdl-card__title mdl-color--primary mdl-color-text--white">
				<h2 class="mdl-card__title-text">Register</h2>
			</div>
	  	<div class="mdl-card__supporting-text">
				<form action="Register.php" method="post">
				    <div class="mdl-textfield mdl-js-textfield">
						<input class="mdl-textfield__input" type="text" id="name" name="username" required />
						<label class="mdl-textfield__label" for="name">Name</label>
					</div>
					<div class="mdl-textfield mdl-js-textfield">
						<input class="mdl-textfield__input" type="text" id="email" name="email" required />
						<label class="mdl-textfield__label" for="email">Email</label>
					</div>
					<div class="mdl-textfield mdl-js-textfield">
						<input class="mdl-textfield__input" type="text" id="phone" name="phone" required maxlength="10" />
						<label class="mdl-textfield__label" for="phone">Phone</label>
					</div>
					<div class="mdl-textfield mdl-js-textfield">
						<input class="mdl-textfield__input" type="password" id="userpass" name="password" maxlength="5" />
						<label class="mdl-textfield__label" for="userpass">Password</label>
					</div>
					<div class="mdl-textfield mdl-js-textfield">
						<input class="mdl-textfield__input" type="password" id="cnfuserpass" name="c_password" maxlength="5" />
						<label class="mdl-textfield__label" for="cnfuserpass">Confirm Password</label>
					</div>
			</div>
			<div class="mdl-card__actions mdl-card--border">
				<input class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" name="register" type="submit">
			</div>
							</form>
		</div>
	</main>
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
