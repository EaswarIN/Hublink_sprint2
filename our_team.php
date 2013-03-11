<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/blueprint/grid.css" type="text/css"/>
<link rel="stylesheet" href="css/main.css" type="text/css"/>
<!--link rel="stylesheet" href="css/blueprint/ie.css" type="text/css" -->
<!--link rel="stylesheet" href="css/blueprint/typography.css" type="text/css"/-->
<title>Our Team</title>
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
      <li><a href="index.php" class="menu-home">HOME</a>
      <li><a href="about_us.php" class="menu-about_us">ABOUT US</a>
      <li><a href="products.php" class="menu-products">PRODUCTS</a>
      <li><a href="investors.php" class="menu-investors">INVESTORS</a>
      <li><a href="our_team.php" class="menu-our_team  menu-on">OUR TEAM</a>
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
    <div class="span-10 content" ><h1>Our Team</h1></div>
		  <?Php 
      		echo "<div class='span-10 content' style='width:615px;text-align:right'><h1>Welcome " . (isset($_SESSION["username"])? $_SESSION["username"] : " Guest </h1></div>");
		?>
	</div>

<div class="span-24 content">
    <p class="large loud">We are backed by experienced advisors and our executive team has many years of experience in building successful companies from the start-up phase through the exit, having worked within Start-ups to Fortune 500 companies.</p>
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
