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

if(isset($_REQUEST['id'])) {
	$id = $_REQUEST['id'];
}
else {
	header('location: viewusers.php');
}

if(isset($_POST['form1'])) {

	try {
	
	
		if(empty($_POST['UserName'])) {
			throw new Exception('<span style="font-size:22px;margin-left:570px;color:#FF3300;font-style:italic;font-family:Times New Roman">User Name can not be empty</span>');
		}
		
		if(empty($_POST['Email'])) {
			throw new Exception('<span style="font-size:22px;margin-left:570px;color:#FF3300;font-style:italic;font-family:Times New Roman">E-mail can not be empty</span>');
		}
		
		if(empty($_POST['ContactNumber'])) {
			throw new Exception('<span style="font-size:22px;margin-left:570px;color:#FF3300;font-style:italic;font-family:Times New Roman">Contact Number can not be empty</span>');
		}
		
		if(empty($_POST['Address'])) {
			throw new Exception('<span style="font-size:22px;margin-left:570px;color:#FF3300;font-style:italic;font-family:Times New Roman">Address can not be empty</span>');
		}
		
		$result = mysql_query("update user_information set UserName='$_POST[UserName]',Email='$_POST[Email]',ContactNumber='$_POST[ContactNumber]',Address='$_POST[Address]' where UserId='$id'");
			
		$success_message = '<span style="font-size:22px;font-family:Times New Roman;margin-left:520px;font-style:italic;color:#FF3300">Account has been updated successfully</span>';
		
	}
	catch(Exception $e) {
		$error_message = $e->getMessage();
	}
	
}
?>

<!doctype html>
<head>
<style>
  body {background-color:#272525}
</style>
<title>Update Account</title>
<link rel="icon" href="images/title.ico" type="image/x-icon">
<link href="updateusers.css" rel="stylesheet" type="text/css" />
</head>
<img style="padding-left:50px"src="images/logo.png"/>
<body>

<br>

<?php

$result = mysql_query("select * from user_information where UserId='$id'");
while($row=mysql_fetch_array($result)) 
{
	$UserName = $row['UserName'];
	$Email = $row['Email'];
	$ContactNumber = $row['ContactNumber'];
	$Address = $row['Address'];
}

?>

<div id="wrapper">
<form action="" method="post">
<fieldset>
     <legend>Update Account</legend>
<table>
	<tr>
	<div class="small">User Name</div>
		<div><input type="text" name="UserName" value="<?php echo $UserName; ?>"></div>
	</tr>
	<tr>
	    <div class="small">E-mail</div>
		<div><input type="email" name="Email" value="<?php echo $Email; ?>"></div>
	</tr>
	<tr>
		<div class="small">Contact Number</div>
		<div><input type="number" name="ContactNumber" value="<?php echo $ContactNumber; ?>"></div>
	</tr>
	<tr>
	    <div class="small">Give your detail address</div>
		<textarea name="Address"><?php echo $Address; ?></textarea>
	</tr>
	<tr>
		<td><input type="submit" value="Update" name="form1"></td>
	</tr>
</table>
<input type="hidden" name="id" value="<?php echo $id; ?>">
</fieldset>
</form>
</div>


<br>
<?php  
if(isset($error_message)) {echo $error_message;}
if(isset($success_message)) {echo $success_message;}
?>
</br>

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
	bottom:50;
	left:0;
	width:100%">
	Copyright &copy 2015 <a href="index.php">becha-kena.com</a></p>
	
</body>
</html>
