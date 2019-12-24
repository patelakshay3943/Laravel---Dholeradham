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
			<li><a href="http://dholeradham.com/Gallery.html">Gallery</a></li>
			<li class="active"><a href="/contact">Contact</a></li>
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
			<li><a href="/dailydarshan" target="_blank">DAILY DARSHAN</a></li>
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

											<style>
												.log
												{
													text-decoration:none; 
													float:right;
													color:white;
													
													padding-bottom:5px;
													padding-right:5px;
													padding-left:5px;
													margin-right:5px;
													margin-top:5px;
												}
												.log:hover
												{
													text-decoration:none;
													color:#675521;
													background-color:white;
													
												}
											</style>
						<div style='background-color:#a98d3e;  color:#ffffff;  width:76%; height:45px;'>
						<h3 style='padding-top:5px;'>Admin Name : users_name <a class='log' href='http://dholeradham.com/admin/logout'>LOGOUT</a></h3>
						</div>
						
					<h1 align="center" style="width:76%; background-color:#a98d3e;color:white;" >Daily Darshan</h1>
					<!--<form action="#" method="POST" enctype="multipart/form-data">

					<input type="file" name="file_img[]" multiple>
						<input type="submit"  name="btn_upload" value="Add"/>
						<select name="Darshan">
							<option value="1">Shangar Darshan</option>
							<option value="2">Shayan Darshan</option>
						</select>
					</form>-->
					
									<form action="#" method="POST" enctype="multipart/form-data">
					
					<input type="file" style="font-size:25px; margin-left:50px;" name="" multiple><br>
					
					<input type="date" style="font-size:25px; margin-left:50px;" name="d"  value="" />

						<select name="Darshan" style="font-size:25px; margin-left:50px; padding-top:5px; padding-bottom:5px;">
							<option value="1">Shangar Darshan</option>
							<option value="2">Shayan Darshan</option>
						</select>

							<input type="submit" style="font-size:25px; margin-left:50px;"  name="btn_upload1" value="Add"/><br>

					</form>
					
					
				<!--===========================Start Gallery category page ================================-->
				
				<h1 align="center" style="width:76%; background-color:#a98d3e;color:white;" >Gallery Category</h1>
				<form action="#" method="POST" enctype="multipart/form-data">	
					<input type="file" style="font-size:25px; margin-left:50px;" name="file_img"><br>
					
					<input type="text" placeholder="New Category Name" style="font-size:25px; margin-left:50px;" name="cate" />
				<input type="submit" style="font-size:25px; margin-left:50px;"  name="gcates" value="Add Category"/><br>
				</form>
				
					
				<!--=========================== End Gallery category page ================================-->
				
				
				<!--===========================Start Gallery Image page ================================-->
				
				<h1 align="center" style="width:76%; background-color:#a98d3e;color:white;" >Gallery Upload</h1>
				<form action="#" method="POST" enctype="multipart/form-data">	
					<input type="file" style="font-size:25px; margin-left:50px;" name="" multiple><br>
					
					<select name="select" style="font-size:25px; margin-left:50px;">
						
						<option value=""></option>
							
					</select>
					
					
					
				<input type="submit" style="font-size:25px; margin-left:50px;"  name="gcatess" value="Gallery Upload"/><br>
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