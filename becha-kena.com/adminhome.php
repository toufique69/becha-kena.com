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
	<title>Admin Panel</title>
<link rel="icon" href="images/title.ico" type="image/x-icon">
<link href="adminhome.css" rel="stylesheet" type="text/css" />
<link href="button.css" rel="stylesheet" type="text/css" />
</head>
<body>

<img style="padding-left:50px"src="images/logo.png"/>

<p style="font-family:Times New Roman;font-size:30px;color:#FF794D;margin-bottom:25;margin-top:20px;margin-left:80px;font-weight:bold;font-style:italic"><u>Select Options</u></p>

<ul style="font-size:12px;padding-left:120px;">
	<li><p><input type="button" id="add_product" onClick="location.href='add_product.php'"/></p></li>
	<li><p><input type="button" id="view_products" onClick="location.href='view_product.php'"/></p></li>
	<li><p><input type="button" id="view_order" onClick="location.href='view_order.php'"/></p></li>
	<li><p><input type="button" id="add_user" onClick="location.href='signup.php'"/></p></li>
	<li><p><input type="button" id="view_users" onClick="location.href='viewusers.php'"/></p></li>
	<li><p><input type="button" id="view_msgs" onClick="location.href='viewmsg.php'"/></p></li>
	<li><p><input type="button" id="change_password" onClick="location.href='admin_password_change.php'"/></p></li>
	<li><p><input type="button" id="log_out" onClick="location.href='adminlogout.php'"/></p></li>
</ul>
	
<!--<div class="container">
    <a href="index.php" class="button yellow">Back To Home</a><br>
</div>-->

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