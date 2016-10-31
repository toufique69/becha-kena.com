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
<title>View Order | Clothing</title>
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
		<th>Product Name</th>
		<th>Type</th>
		<th>Brand</th>
		<th>Size</th>
		<th>Quantity</th>
		<th>User Name</th>
		<th>Contact Number</th>
		<th>Delivary Address</th>
		<th>Action</th>
	</tr>
	<?php
	$i=0;
	$result = mysql_query("select * from order_clothing");
	while($row=mysql_fetch_array($result)) 
	{
		$i++;
		?>
		<tr>
		<td><?php echo $row['Name']; ?></td>
		<td><?php echo $row['Type']; ?></td>
		<td><?php echo $row['Brand']; ?></td>
		<td><?php echo $row['Size']; ?></td>
		<td><?php echo $row['Quantity']; ?></td>
		<td><?php echo $row['UserName']; ?></td>
		<td><?php echo $row['ContactNumber']; ?></td>
		<td><?php echo $row['DeliveryAddress']; ?></td>
		<td>
			<a onclick="return confirm_delete();" href="delete_order_clothing.php?id=<?php echo $row['ClothingOrderId']; ?>">Delete</a>
		</td>
		</tr>
		<?php
	}
	?>
</table>
	
</body>
</html>