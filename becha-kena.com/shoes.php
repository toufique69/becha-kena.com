<?php include('config.php'); ?>
<!doctype html>
<html lang="en">
<head>
<title>Shoes</title>
<link rel="icon" href="images/title.ico" type="image/x-icon">
<link href="product_table_electrinics.css" rel="stylesheet" type="text/css" />
<link href="orderbutton.css" rel="stylesheet" type="text/css" />
</head>
<p><img style="padding-left:50px"src="images/logo.png"/> 
<body>
</head>
<body>

<table class="table-fill">
	<tr>
		<th>Product Id</th>
		<th>Model</th>
		<th>Size</th>
		<th>Image</th>
		<th>Description</th>
		<th>Price</th>
		<th>Order</th>
	</tr>
	<?php
	$i=0;
	$result = mysql_query("select * from product_shoes");
	while($row=mysql_fetch_array($result)) 
	{
		$i++;
		?>
		<tr>
		<td><?php echo $row['ProductId']; ?></td>
		<td><?php echo $row['Model']; ?></td>
		<td><?php echo $row['Size']; ?></td>
		<td><img src="<?= $row['Image'] ?>" width="150px" height="150px" border="" alt="No Image"/></td>
		<td><?php echo $row['Description']; ?></td>
		<td><?php echo $row['Price']; ?></td>
		<td>
			<p><input type="button" id="order" onClick="location.href='order_shoes.php?id=<?php echo $row['ShoesId']; ?>'"/></p>
		</td>
		</tr>
		<?php
	}
	?>
</table>

</body>
</html>