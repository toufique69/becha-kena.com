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
<title>View Order | Electronics</title>
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

<p style="padding-left:80px;font-size:30px;color:#FF794D;margin-top:10px;text-align:center;font-style:italic"><u><b>Orders</u></b></p>

<table class="table-fill">
	<tr>
		<th>Product Id</th>
		<th>Brand</th>
		<th>Model</th>
		<th>Quantity</th>
		<th>User Name</th>
		<th>Contact Number</th>
		<th>Delivary Address</th>
		<th>Action</th>
	</tr>
	<?php
	$i=0;
	$result = mysql_query("select * from order_electronics");
	while($row=mysql_fetch_array($result)) 
	{
		$i++;
		?>
		<tr>
		<td><?php echo $row['ProductId']; ?></td>
		<td><?php echo $row['Brand']; ?></td>
		<td><?php echo $row['Model']; ?></td>
		<td><?php echo $row['Quantity']; ?></td>
		<td><?php echo $row['UserName']; ?></td>
		<td><?php echo $row['ContactNumber']; ?></td>
		<td><?php echo $row['DeliveryAddress']; ?></td>
		<td>
			<a onclick="return confirm_delete();" href="delete_order_electronics.php?id=<?php echo $row['PId']; ?>">Delete</a>
		</td>
		</tr>
		<?php
	}
	?>
</table>
	
</body>
</html>