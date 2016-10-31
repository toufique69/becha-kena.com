<?php
ob_start();
session_start();
if($_SESSION['name']!='bechakena')
{
	header('location: userlogin.php');
}
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Successfull</title>
<link rel="icon" href="images/title.ico" type="image/x-icon">
<link href="userhome.css" rel="stylesheet" type="text/css" />
<link href="button.css" rel="stylesheet" type="text/css" />
</head>
<body>

<img style="padding-left:50px"src="images/logo.png"/>
<br>
<img src="images/congrats.gif" style="padding-top:80px;padding-left:580px;" >

<h1 style="font-family:Times New Roman;font-size:40px;text-align:center;font-style:bold;font-style:italic;">Log In Successfull !</h1>

<div class="container">
    <a href="index.php" class="button yellow">Back To Home</a><br>
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