<?php
ob_start();
session_start();
if($_SESSION['name']!='bechakena')
{
	header('location: adminlogin.php');
}
?>


<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Panel | View Products</title>
<link rel="icon" href="images/title.ico" type="image/x-icon">
<link href="adminhome.css" rel="stylesheet" type="text/css" />
<link href="button.css" rel="stylesheet" type="text/css" />
</head>
<body>

<img style="padding-left:50px"src="images/logo.png"/>

<p style="font-family:Times New Roman;font-size:30px;color:#FF794D;margin-bottom:25;margin-top:20;margin-left:80px;font-weight:bold;font-style:italic"><u>View Products</u></p>

<ul style="font-size:22px;padding-left:120px;">
	<li style="padding-top:8px"><a href="view_products_clothing.php">Clothing</a></li>
	<li style="padding-top:8px"><a href="view_products_electronics.php">Electronics</a></li>
	<li style="padding-top:8px"><a href="view_products_eye.php">Eyewear</a></li>
	<li style="padding-top:8px"><a href="view_products_watch.php">Watches</a></li>
	<li style="padding-top:8px"><a href="view_products_shoes.php">Shoes</a></li>
	<li style="padding-top:8px"><a href="view_products_kid.php">Kid Corners</a></li>
	<li style="padding-top:8px"><a href="view_products_sports.php">Sports</a></li>
	<li style="padding-top:8px"><a href="view_products_bag.php">Bags & Luggage</a></li>
</ul>
	

<div class="container" style="">
    <a href="adminhome.php" style="margin-top:5px" class="button yellow">Back To Admin Panel</a><br>
</div>

<p style="color: #FFFFFF;
	background: url(images/footer.jpg) ;
	width: 1990px;
	height: 30px;
	margin: 0 auto;
	padding: 10px 0 0 0;
	font-family: Courier New;
	font-size: 15px;
	text-align: center;
	position:absolute;
	bottom:0;
	left:0;
	width:100%">
	Copyright &copy 2015 <a href="index.php">becha-kena.com</a></p>

</body>
</html>