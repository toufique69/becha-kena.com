<?php
ob_start();
session_start();
if($_SESSION['name']!='bechakena')
{
	header('location: adminlogin.php');
}
?>

<?php include('config.php'); ?>
<!doctype html>
<html lang="en">
<head>
<title>Users Informtion</title>
<link rel="icon" href="images/title.ico" type="image/x-icon">
<link href="table.css" rel="stylesheet" type="text/css" />
</head>
<img style="padding-left:50px"src="images/logo.png"/>
<body>
	
	<script>
		function confirm_delete() {
			return confirm('Do you want to delete this data?');
		}
	</script>
</head>
<body>

<p style="padding-left:80px;font-size:30px;color:#FF794D;margin-top:10px;text-align:center;font-style:italic"><u><b>Users Informtion</u></b></p>

<table class="table-fill">
	<tr>
		<th class="text-left">Serial No</th>
		<th class="text-left">User Name</th>
		<th class="text-left">E-mail</th>
		<th class="text-left">Contact Number</th>
		<th class="text-left">Address</th>
		<th class="text-left">Action</th>
	</tr>
	<?php
	$i=0;
	$result = mysql_query("select * from user_information");
	while($row=mysql_fetch_array($result)) 
	{
		$i++;
		?>
		<tr>
		<td class="text-left"><?php echo $i; ?></td>
		<td class="text-left"><?php echo $row['UserName']; ?></td>
		<td class="text-left"><?php echo $row['Email']; ?></td>
		<td class="text-left"><?php echo $row['ContactNumber']; ?></td>
		<td class="text-left"><?php echo $row['Address']; ?></td>
		<td class="text-left">
			<a href="updateusers.php?id=<?php echo $row['UserId']; ?>">Edit</a>&nbsp;|&nbsp;
			<a onclick="return confirm_delete();" href="deleteusers.php?id=<?php echo $row['UserId']; ?>">Delete</a>
		</td>
		</tr>
		<?php
	}
	?>
</table>
	
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