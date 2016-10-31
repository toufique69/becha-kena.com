<?php
ob_start();
session_start();
if($_SESSION['name']!='bechakena')
{
	header('location: userlogin.php');
}
?>



<?php
include('config.php');

if(isset($_REQUEST['id'])) {
	$id = $_REQUEST['id'];
}
else {
	header('location: eye.php');
}

if(isset($_POST['form1'])) {

	try {

		if(empty($_POST['ProductId'])) {
			throw new Exception('<span style="font-size:20px;margin-left:570px;color:#FF794D;text-align:center;;font-style:italic;font-family:Times New Roman;font-weight:bold">Product Id can not be empty</span>');
		}
		
		if(empty($_POST['Brand'])) {
			throw new Exception('<span style="font-size:20px;margin-left:570px;color:#FF794D;text-align:center;;font-style:italic;font-family:Times New Roman;font-weight:bold">Brand can not be empty</span>');
		}
		
		if(empty($_POST['Model'])) {
			throw new Exception('<span style="font-size:20px;margin-left:570px;color:#FF794D;text-align:center;;font-style:italic;font-family:Times New Roman;font-weight:bold">Model can not be empty</span>');
		}
		
		if(empty($_POST['Quantity'])) {
			throw new Exception('<span style="font-size:20px;margin-left:570px;color:#FF794D;text-align:center;;font-style:italic;font-family:Times New Roman;font-weight:bold">Quantity can not be empty</span>');
		}

		if(empty($_POST['UserName'])) {
			throw new Exception('<span style="font-size:20px;margin-left:570px;color:#FF794D;text-align:center;;font-style:italic;font-family:Times New Roman;font-weight:bold">User Name can not be empty</span>');
		}

		if(empty($_POST['ContactNumber'])) {
			throw new Exception('<span style="font-size:20px;margin-left:570px;color:#FF794D;text-align:center;;font-style:italic;font-family:Times New Roman;font-weight:bold">Contact Number can not be empty</span>');
		}

		if(empty($_POST['DeliveryAddress'])) {
			throw new Exception('<span style="font-size:20px;margin-left:570px;color:#FF794D;text-align:center;;font-style:italic;font-family:Times New Roman;font-weight:bold">Delivery Address can not be empty</span>');
		}
		
		$result = mysql_query("insert into order_eye (ProductId,Brand,Model,Quantity,UserName,ContactNumber,DeliveryAddress) values('$_POST[ProductId]','$_POST[Brand]','$_POST[Model]','$_POST[Quantity]','$_POST[UserName]','$_POST[ContactNumber]','$_POST[DeliveryAddress]') ");
			
		$success_message = '<span style="font-size:20px;font-family:Times New Roman;margin-left:250px;font-weight:bold;font-style:italic;color:#FF794D"">Order has been taken, We will contact with you soon. If you have any question dial at +8801711334455</span>';
		
	}
	catch(Exception $e) {
		$error_message = $e->getMessage();
	}
	
}
?>


<!doctype html>
<head>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Orders</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/main.css">
        <link href="products1.css" rel="stylesheet" type="text/css" />
        <link rel="icon" href="images/title.ico" type="image/x-icon">
</head>
<body>

<?php

$result = mysql_query("select * from product_eye where EyeId='$id'");
while($row=mysql_fetch_array($result)) 
{
	$ProductId = $row['ProductId'];
	$Brand = $row['Brand'];
	$Model = $row['Model'];
}

?>
      <form action="" method="post">
      
        <h1 style="font-style:italic;font-size:22px">Order Form</h1>
        
        <fieldset>
          <label for="mail">Product Id:</label>
          <input type="text" name="ProductId" value="<?php echo $ProductId?>">

          <label for="name">Brand:</label>
          <input type="text" name="Brand" value="<?php echo $Brand?>">

          <label for="mail">Model:</label>
          <input type="text" name="Model" value="<?php echo $Model?>">

          <label for="mail">Quantity:</label>
          <input type="number" id="mail" name="Quantity">

          <label for="mail">User Name:</label>
          <input type="text" id="mail" name="UserName">

          <label for="mail">Contact Number:</label>
          <input type="text" id="mail" name="ContactNumber">

          <label for="bio">Delivery Address ( please give your detail address ):</label>
          <textarea id="bio" style="height:70px" name="DeliveryAddress"></textarea>
        </fieldset>

        <button type="submit" name="form1">Order</button>

      </form>


<?php  
if(isset($error_message)) {echo $error_message;}
if(isset($success_message)) {echo $success_message;}
?>
<br>
<p style="color: #FFFFFF;
	background: url(images/footer.jpg) ;
	width: 1990px;
	height: 35px;
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