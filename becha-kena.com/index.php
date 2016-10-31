<?php session_start(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>becha-kena.com</title>
<link rel="icon" href="images/title.ico" type="image/x-icon">
<link href="style.css" rel="stylesheet" type="text/css" />

<script language="javascript" src="slider.js" type="text/javascript"></script>
<script language="javascript" type="text/javascript">

function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<style type="text/css">
<!--
.style2 {font-size: 21px}
-->
</style>
</head>
<body>
<div id="templatemo_wrapper_outer">
<div id="templatemo_wrapper_inner">
  
    <div id="slider">
           <script type="text/javascript">
       //new fadeshow(IMAGES_ARRAY_NAME, slideshow_width, slideshow_height, borderwidth, delay, pause (0=no, 1=yes), optionalRandomOrder)
         new fadeshow(fadeimages, 980, 300, 4000, 1, "R")
       </script>
    </div>
    
    <div id="wrap">
      <ul class="navbar">
       <li style="border-left: 1px solid #505050;"><a href="index.php">Home</a></li>
       <li><a href="safely.php">Shop Safely</a></li>
       <li><a href="#">Help</a>
                    <ul>
                    <li style="border-top: 1px solid #fff;"><a href="faq.php">FAQ</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    </ul>    
             </li>      
       <li><a href="#">Terms of Use</a>
                    <ul>
                    <li style="border-top: 1px solid #fff;"><a href="privacy.php">Privacy Policy</a></li>
                    <li style="border-top: 1px solid #fff;"><a href="terms and condition.php">Terms and Condition</a></li>
                    </ul>    
             </li>   
       <li><a href="#">About Us</a>
        <ul>
           <li style="border-top: 1px solid #fff;"><a href="about_bechakena.php">Becha-kena.com</a></li>
           <li><a href="developers.php">Developers</a></li>
        </ul>         
       </li>
       <li><a href="#">Account</a>
        
        <?php
        
        if(!isset($_SESSION['email']))
        	{
        	echo '<ul>
           	<li style="border-top: 1px solid #fff;"><a href="userlogin.php">Sign In</a></li>
           		<li><a href="signup.php">Sign Up</a></li>
           </ul>';
           }
           else if(isset($_SESSION['email']))
           {	echo '<ul>
           		<li><a href="userlogout.php">Sign Out</a></li>
        		</ul> ';    
           }

          ?>   
       
      </ul>
</div> <!-- end of menu -->
    
    <div id="templatemo_content_wrapper">
      <div class="templatemo_side_bar margin_right_10">
            <div class="header_01">&#171 ALL CATEGORIES &#187</div>
              <ul>
                  <li><a href="clothing.php">Cloting</a></li>
                    <li><a href="electronics.php">Electronics</a></li>
                    <li><a href="eye.php">Eyewear</a></li>
                    <li><a href="watch.php">Watches</a></li>
                    <li><a href="shoes.php">Shoes</a></li>
                    <li><a href="kid.php">Kid Corners</a></li>
                    <li><a href="sports.php">Sports</a></li>
                    <li><a href="bag.php">Bags & Luggage</a></li>
                </ul>
            <div class="margin_bottom_20 horizontal_divider"></div> 
      <div class="margin_bottom_20"></div>

      <div class="header_01">Becha-kena.com Videos</div>
            <div class="latest_news">
              <div title="Check out the latest videos of products, features deals and special offers"class="image_wrapper_02"><span></span><a href="https://www.youtube.com/" target="_blank"><img src="images/video.jpg" alt="video" /></a></div>
               <div class="margin_bottom_10 horizontal_divider"></div> 
               <div class="margin_bottom_20"></div>
               <div class="margin_bottom_20"></div>
               <div class="margin_bottom_10"></div>
              <div id="client_logos">
        <a href="https://www.facebook.com/" target="_blank"><img style="display: inline; margin: 0 5px;padding-left:12px;padding-top:2px" src="images/f.png" alt="" width="40" height="40" />
        <a href="https://www.twitter.com/" target="_blank"><img style="display: inline; margin: 0 5px;" src="images/twit.png" alt="" width="40" height="40" />
        <a href="https://www.instagram.com/" target="_blank"><img style="display: inline; margin: 0 5px;" src="images/ins.png" alt="" width="40" height="40" />
        </div>
          </div>
        </div> <!-- end of left side bar -->
        
        <div class="templatemo_content margin_right_10">

          <div class="content_section">
              <div class="header_02">Welcome to Becha-kena.com</div>
              <div class="image_wrapper_01"><img src="images/bechakena.png" alt="image" /></div>
                <p><a href="index.php">Becha-kena.com</a> is a leading Business to Consumer e-commerce site. It is an online retail that enables anyone from anywhere in Bangladesh and from around the world to purchase different products through online.</p>
              <div class="margin_bottom_5"></div>
              <div class="cleaner"></div>
            </div>
            
          <div class="margin_bottom_20 horizontal_divider"></div> 
            <div class="margin_bottom_20"></div>

            <div class="content_section">
              <div class="header_02">Our Mission</div>
              <div class="image_wrapper_01"><img src="images/mission.png" alt="image" /></div>
                <p>Our target is to create online market and increase sales of our merchants and create wonderful buying experience for our consumers. We create happiness for both our merchants and consumers.</p>

               <div class="margin_bottom_20 horizontal_divider"></div> 
               <div class="margin_bottom_20 horizontal_divider"></div> 
        <div class="margin_bottom_20"></div>

        <div class="content_section">
              <div class="image_wrapper_1"><img src="images/1.png"  alt="image"/><img style="padding-left:13px" src="images/2.png"  alt="image"/><img style="padding-left:13px" src="images/3.png"  alt="image"/></div>

        <div class="margin_bottom_5"></div>
              <div class="cleaner"></div>              
            </div>
              <div class="cleaner"></div>              
            </div>
          <div class="margin_bottom_40"></div>
        </div> <!-- end of content -->
        
        <div class="templatemo_side_bar">
            <div class="header_01">&#9749 Featured Deals </div>
            <div class="latest_news border_bottom">
                <div class="header_03"><a href="">Polo T-shirt (Green Stripe)</a></div>
                <div class="header_03"><a href="">Samsung Galaxy S4</a></div>
                <div class="header_03"><a href="">Original Fastrack Watch</a></div>
                <div class="header_03"><a href="">Ninja Bike Helmet</a></div>
        </div>

      <div class="header_01" style="padding-top:8px">&#9749 Best Deals </div>
            <div class="latest_news border_bottom">
                <div class="header_03"><a href="">Chelsea Premium Jersey</a></div>
                <div class="header_03"><a href="">Curren 1250 Watch</a></div>
                <div class="header_03"><a href="">Lotto Lifestyle Shoe</a></div>
                <div class="header_03"><a href="">Nike Football gloves</a></div>
      </div>
                        
            <div class="margin_bottom_8"></div>
            <div class="header_01" style="padding-top:8px">&#9749 Special Offers</div>
      <div class="latest_news">
            <div class="header_03"><a href="">Backpack Bag</a></div>
            <div class="header_03"><a href="">Freshlook contact lenses</a></div>
            <div class="header_03"><a href="">Havit MS691 Mouse</a></div>
      </div>
      </div> 
        <div class="card-container">
        <div class="card">
            <div class="side"><img src="images/left1.png" alt="Becha-kena.com"></div>
            <div class="side back"</div>
        </div>
        </div><!-- end of right side bar -->
        <div class="cleaner"></div>   
    </div> <!-- end of content wrapper -->
</div>
</div>

 <div id="templatemo_footer">
        Copyright © 2015 <a href="index.php">becha-kena.com</a> || <a href="adminhome.php">Admin Panel</a>
 </div> <!-- end of footer -->

</body>
</html>