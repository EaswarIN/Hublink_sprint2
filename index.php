<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/blueprint/grid.css" type="text/css"/>
<link rel="stylesheet" href="css/main.css" type="text/css"/>
<!--link rel="stylesheet" href="css/blueprint/ie.css" type="text/css" -->
<!--link rel="stylesheet" href="css/blueprint/typography.css" type="text/css"/-->
<title>Home</title>
</head>
<body>
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
      <li><a href="index.php" class="menu-home menu-on">HOME</a>
      <li><a href="about_us.php" class="menu-about_us">ABOUT US</a>
      <li><a href="products.php" class="menu-products">PRODUCTS</a>
      <li><a href="investors.php" class="menu-investors">INVESTORS</a>
      <li><a href="our_team.php" class="menu-our_team">OUR TEAM</a>
      <li><a href="contact_us.php" class="menu-contact_us">CONTACT US</a>
      <?Php 
		session_start();
  		if(isset($_SESSION["username"]))
		{
      		echo "<li><a href='sign_out.php' class='menu-sign_out'>SIGN OUT</a>";
		}
		else
		{
			echo "<li><a href='sign_in.php' class='menu-sign_in'>SIGN IN</a>";
		}
?>
    </ul>
  </div>
    <div class="span-24 content">
    <h1>Home</h1>
<div>
    <p class="large loud">Welcome to HubLink Networks. We are currently in stealth mode and are looking to release our first product prototype in Q1 2013.
      Please feel free to look around our website to find out more about who we are and what we are doing to improve the quality of professional network platforms on the web. At a time when quantity has outstripped quality as a goal of networking platforms, we have devised a solution that will address the networking needs of professionals and provide them with a networking platform where they can conduct business, saving time and money.</p></div>
  </div>
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
