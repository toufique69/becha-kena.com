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
	
	$result = mysql_query("delete from product_clothing where ClothingId='$id'");
		
	header('location: view_products_clothing.php');
}
else {
	header('location: view_product_clothing.php');
}