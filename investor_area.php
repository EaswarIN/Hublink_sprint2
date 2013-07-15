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
  <div class="span-24 content">

  		  <?Php
        		echo "<h1><span class='fleft'>Investors Area</span><span class='fright'> Welcome"   . (isset($_SESSION["username"])? ", " . $_SESSION["firstname"] .  " " . $_SESSION["lastname"] . "!  <i style='font-size:12px;margin:0 0 0 5px'><strong>Last login:</strong> "  . $_SESSION["lastlog"] . " </i></span></h1>" :  "</span></h1> ");
  		?>
	</div>

  <!--<div class="span-24 content" >
    <table class="span-24 title">
      <tr>
        <td><h1>Investor Area</h1></td>
        <td align="right">
          <?Php
      		echo "<h1 style='font-size:15px;font-weight:normal'>Welcome " . (isset($_SESSION["username"])? $_SESSION["username"] : "  </h1>");		?><?php  echo "<h1  style='font-size:15px'>Last login : "  . $_SESSION["lastlog"] . "  </h1>";  ?>
        </td>
      </tr>
    </table>
  </div>-->

  <div class="span-24 content" style="margin:10px 0 ">
    <div class="span-20" style="height: 300px; border: thin solid #295C69; margin-right:10px">
      <p class="large loud">Thank you for registering with us and welcome to HubLink Networks investor area. On your right hand side you will find some documents that will provide you with a bit more detail about our start-up project and our team.
        <br><br>If we have not already spoken with you, we will be reaching out to you in the near future. At that time we can arrange to provide you with our complete business plan and set up a time to meet for an in-depth discussion of our project.</p>
    </div>
    <div class="span-5 companyInfo"> <span style="color: #7a7a7b; border-bottom: 1px solid;">Company Information</span> <br/>
      <p style="line-height:normal">Please find below a list of documents you might be interested in reading:</p>
      <ul>
        <!--li><a href="docs/company_profile.pdf">Company overview</a></li>-->
        <li><a target="_blank" href="docs/EnergyLink Executive Summary.pdf">Executive Summary</a><br />
        </li>
        <li><a  target="_blank" href="docs/The HubLink Team.pdf">Team Profile</a><br />
        </li>
      </ul>
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
</div>
</body>
</html>
