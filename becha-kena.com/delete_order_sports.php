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
	
	$result = mysql_query("delete from order_sports where PId='$id'");
		
	header('location: view_order_sports.php');
}
else {
	header('location: view_order_sports.php');
}