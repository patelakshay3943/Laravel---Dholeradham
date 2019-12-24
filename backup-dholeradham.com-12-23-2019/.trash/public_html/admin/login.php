<?php
require('conn.php');
if(isset($_POST['logina']))
{
	$un = $_POST['username'];
	$up = $_POST['password'];
/*	
	$username = stripcslashes($username);
	$password = stripcslashes($password);
	
	$username=mysql_real_escape_string($username);
	$password=mysql_real_escape_string($password);
	
	$result=mysql_query("select * from admin where username='$username' and password='$password'") or die("fail to Query Database".mysql_error());
	$row = mysql_fetch_array($result);	
	if($row['username'] == $username && $row['password']==$password)
	{
		session_start();
		$_SESSION["user_name"]= $username;	
		
		if(isset($_SESSION["user_name"]))
		{
		header("Location:http://www.dholeradham.com/admin/home.php");
		}
		else
		{
			echo "session is not starts";
		}
	}
	else
	{
		"Login Failed";
	}
	*/
	
	if($un==null && $un=="")
	{
		$unerror_msg = "Username must be required.";
	}
	if($up==null && $up=="")
	{
		$uperror_msg = "Password must be required.";	
	}
	if((!$un==null && !$un=="") && (!$up==null && !$up==""))
	{
		$q = "select username,password from admin";
		$qr = mysql_query($q) or die(mysql_error());
		
		$nor = mysql_num_rows($qr);
		
		for($i=1; $i<=$nor;$i++)
		{
			$rows = mysql_fetch_row($qr);
			if($un==$rows[0])
			{
				if($up==$rows[1])
				{
					SESSION_START();		
					$_SESSION["user_names"]= $un;
					if(isset($_SESSION["user_names"]))
					{
						header("Location:http://dholeradham.com/admin/home.php");
					}
					//header("Location:http://www.dholeradham.com/admin/home.php");
					
				}
				else
				{
					$error_msg = "<br> Invalid Password !";
				}
				break;
			} 
			else
			{
					$error_msg = "Invalid username and password !";
	 
			}
		}
	}
}
?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> -->
	<meta charset="UTF-8">
    <meta name="description" content="Dholeradham">
    <meta name="keywords" content="dholeradham.com,dholeradham">
    <meta name="author" content="P.P.Sadguru Shree Ramkrushnadasji Swami">
    
    <title>Dholeradham</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <script type='text/javascript' src="js/jquery.js"></script>
    <script type='text/javascript' src="js/bootstrap.js"></script>
    <script type='text/javascript' src="js/custom.js"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css" /> 
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/responsive.css" />
    <link rel="stylesheet" type="text/css" href="css/custom.css" />
</head>
<body>
<!-- Top header goes from here -->
<header class="top-header">
	<div class="container">
	<div class="row">
	<div class="col-sm-8">
	<nav>
		<ul>
			<li><a href="http://dholeradham.com/">Home</a></li>
			<li><a href="http://dholeradham.com/images/PHOTOS/AKSHAR%20ORADI-SIDE.jpg">Prasadi Place</a></li>
			<li><a href="http://dholeradham.com/Gallery.php">Gallery</a></li>
			<li class="active"><a href="http://dholeradham.com/contact.php">Contact</a></li>
		</ul>
	</nav>
	</div>
	<div class="col-sm-4">
	<div class="social-icons pull-right">
		<a href="#"><img src="images/facebook.png"></a>
		<a href="#"><img src="images/twitter.png"></a>
		<a href="#"><img src="images/google-plus.png"></a>
	</div>
	</div>
	</div>
	</div>
</header>
<div class="clear"></div>
<!-- Top header ends from here -->
<!-- Main header goes from here -->
<section class="main-header">
	<div class="container">
	<div class="row">
	<div class="col-sm-12">	
		<a href="#" class="logo"><img src="images/logo.png"></a>
		<h6 class="text-center">SHREE SWAMINARAYAN TEMPLE, DHOLERA-382455, Dist:AHMEDABAD</h6>
		<ul>
			<li><a href="http://dholeradham.com/images/PHOTOS/DHOLERADHAM-SIDE-22.jpg" target="_blank">TEMPLE</a></li>
			<li><a href="http://dholeradham.com/admin/daily.php" target="_blank">DAILY DARSHAN</a></li>
			<li><a href="http://dholeradham.com/images/PHOTOS/AKSHAR%20ORADI-SIDE.jpg" target="_blank">AKSHAR ORADI</a></li>
		</ul>
	</div>
	</div>	
</section>
<div class="clear"></div>
<!-- Main header ends from here -->
 
<section class="inner-content">
	<div class="container">
		<div class="row contact-content">
			<div class="col-sm-12">
				
				<div class="container">
				  <h2>Admin Login</h2>
				  <form action="" method="POST">
					<div class="form-group">
					  <label for="email">UserName :</label>
					  <input type="text" style="width:50%" class="form-control" name="username" id="email" placeholder="USERNAME">
					  <p style="color:red;">
							<?php 
							if(isset($unerror_msg)) 
								{
									echo $unerror_msg;
								}
	 						?>
							</p>
							
			<div>
					</div>
					<div class="form-group">
					  <label for="pwd">Password :</label>
					  <input type="password" style="width:50%" name="password" class="form-control" id="pwd" placeholder="PASSWORD">
					  <p style="color:red;">
						<?php
							if(isset($uperror_msg)) 
							{
								echo $uperror_msg;
							}
							if(isset($error_msg))
							{
								echo $error_msg;
							}
						?>
						</p>
					</div>
					
					<input type="submit" name="logina" class="btn btn-default"/>
				  </form>
				</div>
					
		</div>
	</div>
</section>
<div class="clear"></div>
<!-- Main content ends from here -->
<!-- Main footer goes from here -->
<footer class="main-footer">
	<dir class="container">
		<p class="text-center">© Copyright 2018. All rights reserved.</p>
	</dir>
</footer>
<div class="clear"></div>
<!-- Main footer ends fro here -->
</body>
</html>