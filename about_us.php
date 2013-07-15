<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/blueprint/grid.css" type="text/css"/>
<link rel="stylesheet" href="css/main.css" type="text/css"/>
<!--link rel="stylesheet" href="css/blueprint/ie.css" type="text/css" -->
<!--link rel="stylesheet" href="css/blueprint/typography.css" type="text/css"/-->
<title>About Us</title>
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
      <li><a href="about_us.php" class="menu-about_us  menu-on">ABOUT US</a>
      <li><a href="products.php" class="menu-products">PRODUCTS</a>
      <li><a href="investors.php" class="menu-investors">INVESTORS</a>
      <li><a href="our_team.php" class="menu-our_team">OUR TEAM</a>
      <li><a href="contact_us.php" class="menu-contact_us">CONTACT US</a>
<?PHP
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
      <?Php
          echo "<h1><span class='fleft'> About Us</span><span class='fright'> Welcome"   . (isset($_SESSION["username"])? ", " . $_SESSION["firstname"] .  " " . $_SESSION["lastname"] . "!</span></h1>" :  "</span></h1> ");
    ?>
  </div>

<div class="span-24 content">
    <p class="large loud">HubLink Networks is a Swiss company started by experienced and committed entrepreneurs. After having used existing solutions for a long time, frustration with the lack of generating real business, data quality and wasting too much time without seeing real results came to a boil. So we decided there has to be a better solution.</p>
    <P>We at HubLink Networks believe that for a professional networking platform to be effective and to generate business for its members, the platform has to be industry focused, have a high level of data quality and provide tools to facilitate business deals. We are changing how professionals can interact and do business on a networking platform.</p>
</div>
<div class="span-24 footer">
    <ul>
      <li><a href="index.php">Home</a></li><font size="1.5">|</font>
      <li><a href="about_us.php">About Us</a></li><font size="1.5">|</font>
      <li><a href="products.php">Products</a></li><font size="1.5">|</font>
      <li><a href="investors.php">Investors</a></li><font size="1.5">|</font>
      <li><a href="our_team.php">Our Team</a></li><font size="1.5">|</font>
      <li><a href="contact_us.php">Contact Us</a></li> </ul>
  </div></div>
</body>
</html>
