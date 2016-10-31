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
	
	$result = mysql_query("delete from tbl_contact where id='$id'");
		
	header('location: viewmsg.php');
}
else {
	header('location: viewmsg.php');
}