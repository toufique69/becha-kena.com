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

if(isset($_POST['form1'])) {
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
/*if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}*/
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        /*echo "The file ". basename( $_FILES["fileToUpload"]["name"]). "has been uploaded.";*/
    } /*else {
        echo "Sorry, there was an error uploading your file.";
    }*/
}

  try {
    if(empty($_POST['Type'])) {
      throw new Exception('<span style="font-size:20px;margin-left:570px;color:#FF794D;text-align:center;;font-style:italic;font-family:Times New Roman;font-weight:bold">Type can not be empty</span>');
    }
    
    if(empty($_POST['Name'])) {
      throw new Exception('<span style="font-size:20px;font-weight:bold;margin-left:570px;color:#FF794D;font-style:italic;font-family:Times New Roman">Name can not be empty</span>');
    }
    
    if(empty($_POST['Brand'])) {
      throw new Exception('<span style="font-size:20px;font-weight:bold;margin-left:570px;color:#FF794D;font-style:italic;font-family:Times New Roman">Brand can not be empty</span>');
    }
    
    if(empty($_POST['Description'])) {
      throw new Exception('<span style="font-size:20px;font-weight:bold;margin-left:570px;color:#FF794D;font-style:italic;font-family:Times New Roman">Description can not be empty</span>');
    }

    if(empty($_POST['AvailableSize'])) {
      throw new Exception('<span style="font-size:20px;font-weight:bold;margin-left:570px;color:#FF794D;font-style:italic;font-family:Times New Roman">Available Size can not be empty</span>');
    }

    if(empty($_POST['Price'])) {
      throw new Exception('<span style="font-size:20px;font-weight:bold;margin-left:570px;color:#FF794D;font-style:italic;font-family:Times New Roman">Price can not be empty</span>');
    }
    
    $result = mysql_query("insert into product_clothing (Type,Name,Brand,Description,Image,AvailableSize,Price) values('$_POST[Type]','$_POST[Name]','$_POST[Brand]','$_POST[Description]','$target_file','$_POST[AvailableSize]','$_POST[Price]') ");
    
    $success_message = '<span style="font-size:20px;font-family:Times New Roman;margin-left:520px;font-weight:bold;font-style:italic;color:#FF794D">Product has been added successfully</span>';
  }
  
  catch(Exception $e) {
    $error_message = $e->getMessage();
  }
}
?>



  <!doctype html>
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add Products</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/main.css">
        <link href="products.css" rel="stylesheet" type="text/css" />
        <link rel="icon" href="images/title.ico" type="image/x-icon">
  </head>
  <body>
      
      <form action="" method="post" enctype="multipart/form-data">
      
        <h1 style="font-style:italic;font-size:22px">Products Entry: Clothing</h1>
        
        <fieldset>
        <label for="mail">Name:</label>
          <input type="text" id="mail" name="Name">

          <label for="name">Type:</label>
          <input type="text" id="name" name="Type">

          <label for="mail">Brand:</label>
          <input type="text" id="mail" name="Brand">

          <label for="bio">Description:</label>
          <textarea id="bio" style="height:70px" name="Description"></textarea>

          <label for="bio">Image:</label>
          <input type="file" name="fileToUpload" id="fileToUpload">

          <label><br>Available Size:</label>
          <input type="text" id="mail" name="AvailableSize">
       
          <label for="mail">Price:</label>
          <input type="text" id="mail" name="Price">
        </fieldset>
        <button type="submit" name="form1">Submit</button>
        <p style="text-align:center;font-style:italic;"><a style="color:#2E2E2E;font-weight:bold;font-size:20px" href="add_product.php">Back To Admin Panel</a></p>
      </form>
   
<?php
if(isset($error_message)) {echo $error_message;}
if(isset($success_message)) {echo $success_message;}
?>

  <p style="color: #FFFFFF;
  background: #272525 url(images/footer.jpg) ;
  width: 1990px;
  height: 35px;
  position: absolute;
  margin: 0 auto;
  padding: 10px 0 0 0;
  font-family: Courier New;
  font-size: 15px;
  text-align: center;
  bottom:0;
  left:0;
  width:100%">
  Copyright &copy 2015 <a href="index.php">becha-kena.com</a></p>


</body>
</html>