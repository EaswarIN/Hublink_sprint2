<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/blueprint/grid.css" type="text/css"/>
<link rel="stylesheet" href="css/main.css" type="text/css"/>
<!--link rel="stylesheet" href="css/blueprint/ie.css" type="text/css" -->
<!--link rel="stylesheet" href="css/blueprint/typography.css" type="text/css"/-->
<script src="js/jquery-1.9.0.js"></script>
<script src="js/common.js"></script>
<script src="js/pwdrecovery.js"></script>
<style type="text/css">
form label { color: #295c69; font-family: Arial; font-size: small; font-weight:bold; }
</style>
<title>Password Recovery</title>
</head>
<body>
<?php
		session_start();
		if(isset($_SESSION["role"]))
		{
			if($_SESSION["role"]=="admin"){
				header("location: admin.php");
			}
			if($_SESSION["role"]=="investor"){
				header("location: investor_area.php");
			}
		}
?>
<div class="container">
  <div class=" span-24 top_logo">
    <table>
      <tr>
        <td><img src="images/banner.jpg" border="0"/></td>
      </tr>
    </table>
  </div>
  <div class="span-24  top_nav_bar">
    <ul>
      <li><a href="index.php" class="menu-home">HOME</a>
      <li><a href="about_us.php" class="menu-about_us">ABOUT US</a>
      <li><a href="products.php" class="menu-products  menu-on">PRODUCTS</a>
      <li><a href="investors.php" class="menu-investors">INVESTORS</a>
      <li><a href="our_team.php" class="menu-our_team">OUR TEAM</a>
      <li><a href="contact_us.php" class="menu-contact_us">CONTACT US</a>
      <li><a href="sign_in.php" class="menu-sign_in">SIGN IN</a>
    </ul>
  </div>
  <div class="span-24 content">

    <h1>Password Recovery</h1><div>
    <p class="large loud">If you are a registered user and need to recover your password, please enter your email Id; a temporary password will be mailed to your account after verification with our records. Thank You.</p>
    <div id="errdiv"></div>
    <form id="pwd_recovery" style="margin-left: 200px">
    	<table>
    		<tr>
    			<td>
    				<label>Email:</label>&nbsp;
    			</td>
    			<td>
    				<input id="email" type="email" style="width: 160px"/>
    			</td>
    		</tr>
    		<tr>
    			<td></td>
    			<td><input id="submit" type="submit"  value="Submit"/></td>
    		</tr>
    	</table>
    </form>

   </div></div>
  <div class="span-24 footer">
    <ul>
      <li><a href="index.php">Home</a></li><font size="1.5">|</font>
      <li><a href="about_us.php">About Us</a></li><font size="1.5">|</font>
      <li><a href="products.php">Products</a></li><font size="1.5">|</font>
      <li><a href="investors.php">Investors</a></li><font size="1.5">|</font>
      <li><a href="our_team.php">Our Team</a></li><font size="1.5">|</font>
      <li><a href="contact_us.php">Contact Us</a></li> </ul>
  </div>
</div>

</body>
</html>