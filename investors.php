<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/blueprint/grid.css" type="text/css"/>
<link rel="stylesheet" href="css/main.css" type="text/css"/>
<script src="js/jquery-1.9.0.js"></script>
<script src="js/investors.js"></script>
<script src="js/common.js"></script>
<style type="text/css">
.crf_form { border: thin solid #9A9A9A; width:500px; padding: 10px; }
form label { color: #295c69; font-family: Arial; font-size: small; display: block; text-align: left; width: 140px; float: left; font-weight:bold; }
</style>
<title>Investors</title>
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
      <li><a href="products.php" class="menu-products">PRODUCTS</a>
      <li><a href="investors.php" class="menu-investors  menu-on">INVESTORS</a>
      <li><a href="our_team.php" class="menu-our_team">OUR TEAM</a>
      <li><a href="contact_us.php" class="menu-contact_us">CONTACT US</a>
      <?Php 

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
    <div class="span-10 content" ><h1>Investors</h1></div>
		  <?Php 
      		echo "<div class='span-10 content' style='width:615px;text-align:right'><h1>Welcome " . (isset($_SESSION["username"])? $_SESSION["username"] : " Guest </h1></div>");
		?>
	</div>

<div class="span-24 content">
       <p class="large loud">To enable us to finalize our platform prototype, enter into beta testing and the eventual launch of our platform, HubLink is seeking seed financing of up to CHF 500,000.
      If you are an interested investor and would like to know more about this game changing new network platform for professionals and industry, please fill out the below contact request form and we will get in touch with you to further discuss this investment opportunity.</p>

    <h1 style="font-size:16px">Registration Form:</h1>
    <form id="investors"  class="form_investor crf_form" style="border:0">
      <div id="errdiv" style="color:#FF0000;width:500px;"></div>
	  <table width="580">
        <tr>
          <td width="145"><label>Prefix:</label></td>
          <td ><select id="prefix" name="Prefix">
              <option>Select One</option>
              <option>Mr.</option>
              <option>Mrs.</option>
            </select></td>
        </tr>
        <tr>
          <td><label>First Name<span style="color:#CC0000; font-weight:bold">*</span>:</label></td>
          <td><input id="First" type="text" style="width: 200px"></td>
        </tr>
        <tr>
          <td><label>Last Name<span style="color:#CC0000; font-weight:bold">*</span>:</label></td>
          <td><input id="Last" type="text" style="width: 200px"></td>
        </tr>
        <tr>
          <td><label>Professional Title:</label></td>
          <td><input id="title" style="width: 200px" type="text"/></td>
        </tr>
        <tr>
          <td><label>Company<span style="color:#CC0000; font-weight:bold">*</span>:</label></td>
          <td><input id="company" style="width: 200px" type="text"/></td>
        </tr>
        <tr>
          <td><label>Street Address<span style="color:#CC0000; font-weight:bold">*</span>:</label></td>
          <td><input id="Street" style="width: 200px" type="text"/></td>
        </tr>
        <tr>
          <td><label>2nd Street Address:</label></td>
          <td><input id="2nd_street"  style="width: 200px" type="text"/></td>
        </tr>
        <tr>
          <td><label>ZIP code <span style="color:#CC0000; font-weight:bold">*</span>:</label></td>
          <td><input id="ZIP" type="text"  style="width: 90px"/>
	</td>
        </tr>
	<tr>
		<td><label>Town<span style="color:#cc0000; fon-weight:bold">*</span>:</label></td>
		<td><input id="town" type="text" style="width: 100px"/></td>
	</tr>
        <tr>
          <td><label>Country<span style="color:#CC0000; font-weight:bold">*</span>:</label></td>
          <td><select id="country" name="country">
              <option selected="selected">Australia</option>
              <option>Austria</option>
              <option>China</option>
              <option>Finland</option>
              <option>France</option>
              <option>Germany</option>
              <option>India</option>
              <option>Italy</option>
              <option>Switzerland</option>
              <option>Sweden</option>
              <option>Spain</option>
              <option>USA</option>
              <option>UK</option>
            </select></td>
        </tr>
		        <tr>
          <td><label>State:</label></td>
          <td><input type="text" id="txtstate" /></td>
        </tr>
        <tr>
          <td><label>Work phone<span style="color:#CC0000; font-weight:bold">*</span>:</label></td>
          <td><select id="isd_code" name="work_phone">
              <option>+61</option>
            </select>
            <input id="work_ph" type="text" style="width: 142px"/></td>
        <tr>
          <td><label>Mobile phone:</label></td>
          <td><select name="mobile_phone">
              <option>+61</option>
            </select>
            <input id="mobile_ph" type="text" style="width: 142px"/></td>
        </tr>
        <tr>
          <td><label>Business Email<span style="color:#CC0000; font-weight:bold">*</span>:</label></td>
          <td><input id="email" style="width: 200px" type="text"/></td>
        </tr>
        <tr>
          <td><label>Web Page:</label></td>
          <td><input id="web_page" style="width: 200px" type="text" /></td>
        </tr>
        <tr>
          <td><label>Investment Area<span style="color:#CC0000; font-weight:bold">*</span>:</label></td>
          <td><select id="inv_area" name="Investment Area:*">
              <option value ="0" id="0">Select one or more:</option>
              <option value ="1" id="1">Software</option>
              <option value ="2" id="2">cleantech</option>
            </select></td>
        </tr>
        <tr><td>&nbsp;</td><td><input id="sub" type="submit" value="Submit"/></td></tr>
      </table>
  </form>
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

 </div>
</body>
</html>