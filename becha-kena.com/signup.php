
<?php
include('config.php');
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

		if(empty($_POST['Password'])) {
			throw new Exception('<span style="font-size:22px;margin-left:570px;color:#FF3300;font-style:italic;font-family:Times New Roman">Password can not be empty</span>>Password can not be empty</span>');
		}
		
		$result = mysql_query("insert into user_information (UserName,Email,ContactNumber,Address,Password) values('$_POST[UserName]','$_POST[Email]','$_POST[ContactNumber]','$_POST[Address]','$_POST[Password]') ");
		
		$success_message = '<span style="font-size:22px;font-family:Times New Roman;margin-left:520px;font-style:italic;color:#FF3300">Account has been created successfully</span>';
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
<title>Create Account</title>
<link rel="icon" href="images/title.ico" type="image/x-icon">
<link href="signup.css" rel="stylesheet" type="text/css" />
</head>
<img style="padding-left:50px"src="images/logo.png"/>
<body>

<div id="wrapper">
        <form action="" method="post">
            <fieldset>
                <legend>Create Account</legend>
                <div>
                    <input type="text" name="UserName" placeholder="User Name"/>
                </div>
                <div>
                    <input type="email" name="Email" placeholder="E-mail"/>
                </div>
                <div>
                    <input type="number" name="ContactNumber" placeholder="Contact Number"/>
                </div>
                <div>
                    <div class="small">Give your detail address</div>
                    <textarea name="Address" placeholder="Address"></textarea>
                </div> 
                <div>
                    <input type="text" name="Password" placeholder="Password"/>
                </div>
                   
                <input type="submit" name="form1" value="Submit"/>
            </fieldset>    
        </form>
    </div>

<br>
<?php  
if(isset($error_message)) {echo $error_message;}
if(isset($success_message)) {echo $success_message;}
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