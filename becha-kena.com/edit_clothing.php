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
	header('location: view_products_clothing.php');
}

if(isset($_POST['form1'])) {

	try {
    if(empty($_POST['Type'])) {
      throw new Exception('<span style="font-size:20px;margin-left:570px;color:#FF794D;text-align:center;;font-style:italic;font-family:Times New Roman;font-weight:bold">Type can not be empty</span>');
    }
    
    if(empty($_POST['Name'])) {
      throw new Exception('<span style="font-size:20px;font-weight:bold;margin-left:570px;color:#FF794D;font-style:italic;font-family:Times New Roman">Name can not be empty</span>');
    }
    
    if(empty($_POST['Brand'])) {
      throw new Exception('<span style="font-size:20px;font-weight:bold;margin-left:570px;color:#FF794D;font-style:italic;font-family:Times New Roman">Brand can not be empty</span>');
    }
    
    if(empty($_POST['Description'])) {
      throw new Exception('<span style="font-size:20px;font-weight:bold;margin-left:570px;color:#FF794D;font-style:italic;font-family:Times New Roman">Description can not be empty</span>');
    }

    if(empty($_POST['AvailableSize'])) {
      throw new Exception('<span style="font-size:20px;font-weight:bold;margin-left:570px;color:#FF794D;font-style:italic;font-family:Times New Roman">Available Size can not be empty</span>');
    }

    if(empty($_POST['Price'])) {
      throw new Exception('<span style="font-size:20px;font-weight:bold;margin-left:570px;color:#FF794D;font-style:italic;font-family:Times New Roman">Price can not be empty</span>');
    }
		
		$result = mysql_query("update product_clothing set Type='$_POST[Type]',Name='$_POST[Name]',Brand='$_POST[Brand]',Description='$_POST[Description]',AvailableSize='$_POST[AvailableSize]',Price='$_POST[Price]' where ClothingId='$id'");
			
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
<link href="products.css" rel="stylesheet" type="text/css" />
</head>
<img style="padding-left:50px"src="images/logo.png"/>
<body>

<br>

<?php

$result = mysql_query("select * from product_clothing where ClothingId='$id'");
while($row=mysql_fetch_array($result)) 
{
	$Type = $row['Type'];
	$Name = $row['Name'];
	$Brand = $row['Brand'];
	$Description = $row['Description'];
	$AvailableSize = $row['AvailableSize'];
	$Price = $row['Price'];
}

?>

<form action="" method="post">
      
        <h1 style="font-style:italic;font-size:22px">Product Update</h1>
        
        <fieldset>
          <label for="mail">Name:</label>
          <input type="text" name="Name" value="<?php echo $Name?>">

          <label for="name">Type:</label>
          <input type="text" name="Type" value="<?php echo $Type?>">

          <label for="mail">Brand:</label>
          <input type="text" name="Brand" value="<?php echo $Brand?>">

          <label for="bio">Description:</label>
          <textarea id="bio" style="height:70px" name="Description"> <?php echo $Description?></textarea>

          <label for="mail">Available Size:</label>
          <input type="text" name="AvailableSize" value="<?php echo $AvailableSize?>">

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
