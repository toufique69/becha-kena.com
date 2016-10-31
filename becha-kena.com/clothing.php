<?php include('config.php'); ?>
<!doctype html>
<html lang="en">
<head>
<title>Clothing</title>
<link rel="icon" href="images/title.ico" type="image/x-icon">
<link href="product_table.css" rel="stylesheet" type="text/css" />
</head>
<p><img style="padding-left:50px"src="images/logo.png"/> 
<body>
</head>
<body>

<table class="table-fill">
	<tr>
		<th>Name</th>
		<th>Type</th>
		<th>Brand</th>
		<th>Description</th>
		<th>Image</th>
		<th>Available Size</th>
		<th>Price</th>
		<th>Order</th>
	</tr>
	<?php
	$i=0;
	$result = mysql_query("select * from product_clothing");
	while($row=mysql_fetch_array($result)) 
	{
		$i++;
		?>
		<tr>
		<td><?php echo $row['Name']; ?></td>
		<td><?php echo $row['Type']; ?></td>
		<td><?php echo $row['Brand']; ?></td>
		<td><?php echo $row['Description']; ?></td>
		<td><img src="<?= $row['Image'] ?>" width="150px" height="150px" alt="No Image"/></td>
		<td><?php echo $row['AvailableSize']; ?></td>
		<td><?php echo $row['Price']; ?></td>
		<td>
			<p><input type="button" id="order" onClick="location.href='order_clothing.php?id=<?php echo $row['ClothingId']; ?>'"/></p>
		</td>
		</tr>
		
		<?php
	}
	?>
</table>
	
</body>
</html>