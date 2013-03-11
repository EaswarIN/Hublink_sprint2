<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/blueprint/grid.css" type="text/css"/>
<link rel="stylesheet" href="css/main.css" type="text/css"/>
<script src="js/jquery-1.9.0.js"></script>
<script src="js/investors.js"></script>

<title>Investor Area</title>
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
      <li><a href="products.php" class="menu-products  ">PRODUCTS</a>
      <li><a href="investors.php" class="menu-investors menu-on">INVESTORS</a>
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
    <div class="span-24 content" >
	<table class="span-24 content">
		<tr>
		<td><h1>Investor Area</h1></td>
		<td><?php  echo "<h1 align='center'>Last login : "  . $_SESSION["lastlog"] . "  </h1>";  ?></td>
		<td align="right"><?Php 
      		echo "<h1 align='right'>Welcome " . (isset($_SESSION["username"])? $_SESSION["username"] : " Guest </h1>");
		?></td>
		</tr>
	</table>
	</div>
<div class="span-24 content">

    <div class="span-5" style="height: 300px; border: thin solid #295C69; margin: 0 10px 15px 15px">
    	<span style="font-family: Arial, Helvetica, sans-serif; font-size: medium; color: #7a7a7b; border-bottom: 1px solid";>Account Log</span>
    	<br /><br />
    	<p style="line-height:normal"> List of doduments that you recently viewed.</p><br />
    	<ul style="font-family:Arial, Helvetica, sans-serif; font-size:14px; margin:2px">
    		<li><a href="#">Quaterly statement</a></li>
    		<li><a href="#"> List of corporate clients</a></li>
    	</ul>
    </div>
    <div class="span-14" style="height: 300px; border: thin solid #295C69; margin-right: 10px">
    	<p class="large loud">Welcome to HubLink Networks. We are currently in stealth mode and are looking to release our first product prototype in Q1 2013.
      Please feel free to look around our website to find out more about who we are and what we are doing to improve the quality of professional network platforms on the web. At a time when quantity has outstripped quality as a goal of networking platforms, we have devised a solution that will address the networking needs of professionals and provide them with a networking platform where they can conduct business, saving time and money.</p>
    </div>
    <div class="span-5" style="height: 300px; border: thin solid #295C69">
    	<span style="font-family: Arial, Helvetica, sans-serif; font-size: medium; color: #7a7a7b; border-bottom: 1px solid";>Company Information</span> <br/> <br/>
    <p style="line-height:normal">Please find below a list of documents you might be interested in reading:</p>
    <br />
    <ul style="font-family:Arial, Helvetica, sans-serif; font-size:14px; margin:2px">
    <li><a href="docs/company_profile.pdf">Company overview</a></li>
    <li><a href="docs/exec_summary.pdf">Executive Summary</a><br /></li>
    <li><a href="docs/team_profile.pdf">Team Profile</a><br /></li>
    </ul>
    </div>
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