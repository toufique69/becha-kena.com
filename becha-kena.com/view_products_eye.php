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
<title>Eyewear</title>
<link rel="icon" href="images/title.ico" type="image/x-icon">
<link href="product_table_electrinics.css" rel="stylesheet" type="text/css" />
<link href="orderbutton.css" rel="stylesheet" type="text/css" />
<link href="button.css" rel="stylesheet" type="text/css" />
</head>
<p><img style="padding-left:50px"src="images/logo.png"/> 
<body>
</head>
<body>

<script>
		function confirm_delete() {
			return confirm('Do you want to delete this data?');
		}
</script>

<table class="table-fill">
	<tr>
		<th>Product Id</th>
		<th>Brand</th>
		<th>Model</th>
		<th>Image</th>
		<th>Description</th>
		<th>Price</th>
		<th>Action</th>
	</tr>
	<?php
	$i=0;
	$result = mysql_query("select * from product_eye");
	while($row=mysql_fetch_array($result)) 
	{
		$i++;
		?>
		<tr>
		<td><?php echo $row['ProductId']; ?></td>
		<td><?php echo $row['Brand']; ?></td>
		<td><?php echo $row['Model']; ?></td>
		<td><img src="<?= $row['Image'] ?>" width="150px" height="150px" border="" alt="No Image"/></td>
		<td><?php echo $row['Description']; ?></td>
		<td><?php echo $row['Price']; ?></td>
		<td class="text-left">
			<a href="edit_eye.php?id=<?php echo $row['EyeId']; ?>">Edit</a>&nbsp;|&nbsp;
			<a onclick="return confirm_delete();" href="delete_eye.php?id=<?php echo $row['EyeId']; ?>">Delete</a>
		</td>
		</tr>
		<?php
	}
	?>
</table>

<div class="container" style="padding-top:10px">
    <a href="view_product.php" style="margin-top:5px" class="button yellow">Back To Admin Panel</a><br>
</div>

</body>
</html>