<?php
ob_start();
session_start();
if($_SESSION['name']!='bechakena')
{
	header('location: adminlogin.php');
}
?>

<?php
include('config.php');
if(isset($_POST['form1'])) {

	try {
	
		if(empty($_POST['old_Password'])) {
			throw new Exception("Old Password field can not be empty");
		}
		
		if(empty($_POST['new_Password'])) {
			throw new Exception("New Password field can not be empty");
		}
		
		if(empty($_POST['confirm_Password'])) {
			throw new Exception("Confirm Password field can not be empty");
		}
		
		// Checking old password
		$Password = $_POST['old_Password'];
		$Password = md5($Password);
		
		$num=0;
		$result = mysql_query("select * from admin_information where Password='$Password'");
		$num = mysql_num_rows($result);

		if($num==0) {
			throw new Exception('<span style="font-size:20px;font-family:Times New Roman;margin-left:380px;color:#FF4719;font-style: italic;">Wrong Old Password !</span>');
		}
		
		
		if($_POST['new_Password'] != $_POST['confirm_Password']) {
			throw new Exception('<span style="font-size:20px;font-family:Times New Roman;margin-left:350px;color:#FF4719;font-style: italic;">New Password doesn`t match !</span>');
		}
		
		$new_Password = $_POST['new_Password'];
		$new_Password = md5($new_Password);
		
		$result = mysql_query("update admin_information set Password='$new_Password' where AdminId=1");
		
		$success_message ='<span style="font-size:20px;font-family:Times New Roman;margin-left:340px;color:#FF4719;font-style: italic;">Password is updated successfully</span>';
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
	<title>Change Password</title>
	<link rel="icon" href="images/title.ico" type="image/x-icon">
	<link href="admin_password_change.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div class="main">
<div class="header">
<img src="images/logo.png"/>

</div>			
				<div class="login-form">
					<div class="head">
						<img src="images/login1.png" alt=""/>
					</div>
				<form action="" method="post">
					<li>
						<input type="password" name="old_Password" placeholder="Old Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Old Password';}"><a href="#" class=" icon lock"></a>
					</li>
					<li>
						<input type="password" name="new_Password" placeholder="New Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'New Password';}"><a href="#" class=" icon lock"></a>
					</li>
					<li>
						<input type="password" name="confirm_Password" placeholder="Confirm Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Confirm Password';}"><a href="#" class=" icon lock"></a>
					</li>
					<div class="p-container">
								<input type="submit" value="Update" name="form1" >
					<div class="clear"></div>
					</div>
				</form>
</div>
	
<?php  
if(isset($error_message)) {echo $error_message;}
if(isset($success_message)) {echo $success_message;}
?>
<br>
<br>

<p style="text-align:center"><input type="button" id="search_button" onClick="location.href='adminhome.php'"/></p>

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