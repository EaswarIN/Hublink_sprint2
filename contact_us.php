<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/blueprint/grid.css" type="text/css"/>
<link rel="stylesheet" href="css/main.css" type="text/css"/>
<!--link rel="stylesheet" href="css/blueprint/ie.css" type="text/css" -->
<!--link rel="stylesheet" href="css/blueprint/typography.css" type="text/css"/-->
<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script src="js/Contactus.js"></script>
<script src="js/common.js"></script>
<style type="text/css">
form label { color: #295c69; font-family: Arial; font-size: small; font-weight:bold; }
</style>
<title>Contact Us</title>
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
      <li><a href="our_team.php" class="menu-our_team">OUR TEAM</a>
      <li><a href="contact_us.php" class="menu-contact_us  menu-on">CONTACT US</a>
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
    <div class="span-10 content" ><h1>Contact Us</h1></div>
		  <?Php 
      		echo "<div class='span-10 content' style='width:615px;text-align:right'><h1>Welcome " . (isset($_SESSION["username"])? $_SESSION["username"] : " Guest </h1></div>");
		?>
	</div>

<div class="span-24 content">
    <p class="large loud">Get in touch with us by mail, phone or through our fast contact form below.We will get back to you as fast as we can!</p>
	      <div id="errdiv" style="color:#FF0000;width:500px;"></div>
    <table align="center">
      <tr>
        <td width="450px"><form id="contact_us">
            <label>Name:</label>
            <br />
            <input id="first_name" style="width:160px;" type="text"/>
            <input id="last_name" style="width:165px;" type="text"/>
            <br />
            <label>Email:</label>
            <br />
            <input id="email" type="text" />
            <br />
            <label>Comments:</label>
            <br />
            <textarea id="comments" rows="5"></textarea>
            <br />
            <br />
            <input id="submit" type="submit" value="Submit"/>
            <!--a href="#" class="submit_btn">submit</a-->
          </form></td>
        <td valign="top" ><span style="color: #295c69;font-family: Arial;font-size: small;font-weight: bold;">Contact Information:</span><br />
          <span style="font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#7a7a7b;">HubLink Networks</span><br>
          <span style="line-height:1.2;font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#7a7a7b">Irgendwoweg 45,<br />
            CH-9020 Irgendwostadt<br />
            Switzerland<br />
            Tel: +41 77 777 77 77<br />
            Email: info@irgendwo.com</span>
          </br></td>
      </tr>
    </table>
   
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
