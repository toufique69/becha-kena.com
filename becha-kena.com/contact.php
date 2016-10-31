<?php
include('config.php');
if(isset($_POST['form1'])) {

	try {
	
		if(empty($_POST['name'])) {
			throw new Exception('<span style="font-size:30px;font-family:Times New Roman;margin-left:800px;font-style:italic;color:#FF794D;font-weight: bold;">User Name can not be empty!</span>');
		}
		
		if(empty($_POST['email'])) {
			throw new Exception('<span style="font-size:30px;font-family:Times New Roman;margin-left:800px;font-style:italic;color:#FF794D;font-weight: bold;">E-mail can not be empty!</span>');
		}
		
		if(empty($_POST['comment'])) {
			throw new Exception('<span style="font-size:30px;font-family:Times New Roman;margin-left:800px;font-style:italic;color:#FF794D;font-weight: bold;">Please leave some comments...</span>');
		}
		
		$result = mysql_query("insert into tbl_contact (name,email,comment) values('$_POST[name]','$_POST[email]','$_POST[comment]') ");
		
		$success_message = '<span style="font-size:30px;font-family:Times New Roman;margin-left:800px;font-style:italic;color:#FF794D;font-weight: bold;">Thank You for your message...</span>';
	}
	
	catch(Exception $e) {
		$error_message = $e->getMessage();
	}
	
}
?>

<html>
<head>
<style>
  body {background-color:#272525}
</style>
<title>Contact Us</title>
<link rel="icon" href="images/title.ico" type="image/x-icon">
<link href="styleanother.css" rel="stylesheet" type="text/css" />
</head>

<body>

<link href="contact.css" rel="stylesheet" type="text/css" />

<div id="form-main">  
      <img style="padding-left:50px" src="images/logo.png"/>
  
  <div id="form-div">
      <p style="font-size:30px;text-align:center;font-style:italic;font-weight: bold;">keep in touch...</p>
    
    <form class="form" id="form1" action="" method="post">
      
      <p class="name">
        <input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Name" id="name" />
      </p>
      
      <p class="email">
        <input name="email" type="email" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Email" />
      </p>
      
      <p class="text">
        <textarea name="comment" class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="Comment"></textarea>
      </p>
      
      
      <div class="submit">
        <input type="submit" value="SEND" id="button-blue" name="form1"/>
        <div class="ease"></div>
      </div>
    </form>
  </div>

<p style="padding-left:740px;padding-top:100px;font-family:Times New Roman;font-size:25px;color:#FFFFFF;">For any kind of queries or questions, contact us&#160&#9787</p>

<p style="padding-left:840px;font-family:Times New Roman;font-size:20px;color:#FFFFFF;"><br>&#9742&#160Phone: +88 017 47 21 13 77<br>&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160+88 017 29 66 43 45</br></p>

<p style="padding-left:865px;font-family:Times New Roman;font-size:20px;color:#FFFFFF;">E-mail: info@becha-kena.com</p>

<?php  
if(isset($error_message)) {echo $error_message;}
if(isset($success_message)) {echo $success_message;}
?>

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