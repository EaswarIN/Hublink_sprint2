<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/blueprint/grid.css" type="text/css"/>
<link rel="stylesheet" href="css/main.css" type="text/css"/>
<script language="javascript" src="js/jquery-1.9.0.js"></script>
<script language="javascript" src="js/login.js"></script>
<title>sign in</title>
</head>
<body bgcolor="#F7F7F7">
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
      <li><a href="products.php" class="menu-products ">PRODUCTS</a>
      <li><a href="investors.php" class="menu-investors">INVESTORS</a>
      <li><a href="our_team.php" class="menu-our_team">OUR TEAM</a>
      <li><a href="contact_us.php" class="menu-contact_us">CONTACT US</a>
      <li><a href="sign_in.php" class="menu-sign_in menu-on">SIGN IN</a>
    </ul>
  </div>
  <div class="span-24 content">
    <h1>Sign In</h1><div id="errdiv"></div>
    <div align="center" class="content" style="padding-top:0px;">
      <form id="sign_in" name="sign_in">
        <div class="loginform">
<label>Username</label>
<input id="username" name ="username"  class="text_fields" type="text" />
<label>Password</label>
<input id="password" name="password" class="text_fields" type="password" />
<input id="sign_in_btn" type="submit" value="Sign in" title="Sign in" /> <input id="sign_in_cancel_btn" type="submit" value="Cancel" title="Cancel" />
<br />
<a href="pwd_recovery_page.php">Forgot your password?</a>
<a class="floatR" href="investors.php" >Not yet registered with us?</a>


		</div>

      </form>
    </div>
  </div>
  <div class="span-24 footer">
    <ul>
      <li><a href="index.php">Home</a></li>
      <font size="1.5">|</font>
      <li><a href="about_us.php">About Us</a></li>
      <font size="1.5">|</font>
      <li><a href="products.php">Products</a></li>
      <font size="1.5">|</font>
      <li><a href="investors.php">Investors</a></li>
      <font size="1.5">|</font>
      <li><a href="our_team.php">Our Team</a></li>
      <font size="1.5">|</font>
      <li><a href="contact_us.php">Contact Us</a></li>
    </ul>
  </div>
</div><div class="bgModel"></div>
</body>
</html>
