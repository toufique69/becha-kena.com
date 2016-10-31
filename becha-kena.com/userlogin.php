<?php
session_start();
if(isset($_POST['form_login'])) 
{
	
	try {
	
		
		if(empty($_POST['Email'])) {
			throw new Exception('E-mail can not be empty');
		}
		
		if(empty($_POST['Password'])) {
			throw new Exception('Password can not be empty');
		}
	
		include('config.php');
		$num=0;
		$result = mysql_query("select * from user_information where Email='$_POST[Email]' and Password='$_POST[Password]'");
		$num = mysql_num_rows($result);
		
		if($num>0) 
		{
			$_SESSION['name'] = "bechakena";
			$_SESSION['email'] = $_POST['Email'];
			header("location: index.php");
		}
		else
		{
			throw new Exception('<span style="font-size:22px;font-family:Times New Roman;margin-left:340px;color:#FF4719;font-style: italic;">Invalid Username or Password</span>');
		}
	
	}
	catch(Exception $e) {
		$error_message = $e->getMessage();
	}
	
}

?>


<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User | Login</title>
	<link rel="icon" href="images/title.ico" type="image/x-icon">
	<link href="userlogin.css" rel="stylesheet" type="text/css" />
</head>
<body>


<div class="main">
<div class="header">
<img src="images/logo.png"/>

</div>			
				<div class="login-form">
					<div class="head">
						<img src="images/login2.png" alt=""/>
					</div>
				<form action="" method="post">
					<li>
						<input type="text" name="Email" value="E-mail" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'USERNAME';}" ><a href="#" class=" icon user"></a>
					</li>
					<li>
						<input type="password" name="Password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}"><a href="#" class=" icon lock"></a>
					</li>
					<div class="p-container">
								<input type="submit" value="Sign In" name="form_login" >
					<div class="clear"></div>
					</div>
				</form>
</div>

<?php
if(isset($error_message))
{
	echo $error_message;
}
?>

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