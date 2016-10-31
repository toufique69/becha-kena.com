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
<title>Users Messages</title>
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

<p style="padding-left:80px;font-size:30px;color:#FF794D;margin-top:10px;text-align:center;font-style:italic"><u><b>Users Messages</u></b></p>

<table class="table-fill">
	<tr>
		<th>Serial No</th>
		<th>User Name</th>
		<th>Email</th>
		<th>Comments</th>
		<th>Action</th>
	</tr>
	<?php
	$i=0;
	$result = mysql_query("select * from tbl_contact");
	while($row=mysql_fetch_array($result)) 
	{
		$i++;
		?>
		
		<tr>
		<td><?php echo $i; ?></td>
		<td><?php echo $row['name']; ?></td>
		<td><?php echo $row['email']; ?></td>
		<td><?php echo $row['comment']; ?></td>
		<td>
			<a onclick="return confirm_delete();" href="deletemsg.php?id=<?php echo $row['id']; ?>">Delete</a>
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