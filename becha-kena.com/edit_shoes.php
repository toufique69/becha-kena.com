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
	header('location: view_products_shoes.php');
}

if(isset($_POST['form1'])) {

	try {
    if(empty($_POST['ProductId'])) {
      throw new Exception('<span style="font-size:20px;margin-left:570px;color:#FF794D;text-align:center;;font-style:italic;font-family:Times New Roman;font-weight:bold">Product Id can not be empty</span>');
    }
    
    if(empty($_POST['Model'])) {
      throw new Exception('<span style="font-size:20px;font-weight:bold;margin-left:570px;color:#FF794D;font-style:italic;font-family:Times New Roman">Model can not be empty</span>');
    }
    
    if(empty($_POST['Size'])) {
      throw new Exception('<span style="font-size:20px;font-weight:bold;margin-left:570px;color:#FF794D;font-style:italic;font-family:Times New Roman">Size can not be empty</span>');
    }
    
    if(empty($_POST['Description'])) {
      throw new Exception('<span style="font-size:20px;font-weight:bold;margin-left:570px;color:#FF794D;font-style:italic;font-family:Times New Roman">Description can not be empty</span>');
    }

    if(empty($_POST['Price'])) {
      throw new Exception('<span style="font-size:20px;font-weight:bold;margin-left:570px;color:#FF794D;font-style:italic;font-family:Times New Roman">Price can not be empty</span>');
    }
		
		$result = mysql_query("update product_shoes set ProductId='$_POST[ProductId]',Model='$_POST[Model]',Size='$_POST[Size]',Description='$_POST[Description]',Price='$_POST[Price]' where ShoesId='$id'");
			
		$success_message = '<span style="font-size:20px;font-family:Times New Roman;margin-left:520px;font-weight:bold;font-style:italic;color:#FF794D">Product has been updated successfully</span>';
		
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
<title>Update Products</title>
<link rel="icon" href="images/title.ico" type="image/x-icon">
<link href="products_electronics.css" rel="stylesheet" type="text/css" />
</head>
<img style="padding-left:50px"src="images/logo.png"/>
<body>

<br>

<?php

$result = mysql_query("select * from product_shoes where ShoesId='$id'");
while($row=mysql_fetch_array($result)) 
{
	$ProductId = $row['ProductId'];
	$Model = $row['Model'];
	$Size = $row['Size'];
	$Description = $row['Description'];
	$Price = $row['Price'];
}

?>

<form action="" method="post">
      
        <h1 style="font-style:italic;font-size:22px">Product Update</h1>
        
        <fieldset>
          <label for="mail">Product Id:</label>
          <input type="text" name="ProductId" value="<?php echo $ProductId?>">

          <label for="name">Model:</label>
          <input type="text" name="Model" value="<?php echo $Model?>">

          <label for="mail">Size:</label>
          <input type="text" name="Size" value="<?php echo $Size?>">

          <label for="bio">Description:</label>
          <textarea id="bio" style="height:70px" name="Description"> <?php echo $Description?></textarea>

          <label for="mail">Price:</label>
          <input type="text" name="Price" value="<?php echo $Price?>">
        </fieldset>

        <button type="submit" name="form1">Update</button>

      </form>

<br>
<?php  
if(isset($error_message)) {echo $error_message;}
if(isset($success_message)) {echo $success_message;}
?>
</br>

<p style="text-align:center"><input type="button" id="search_button" onClick="location.href='view_product.php'"/></p>

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
