<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/blueprint/grid.css" type="text/css"/>
<link rel="stylesheet" href="css/main.css" type="text/css"/>
<script src="js/jquery-1.9.0.js"></script>
<script src="js/investorApprove.js"></script>

<title>Admin</title>
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
    <div class="span-10 content" ><h1>Admin</h1></div>
		  <?Php 
		  include ("Utility/DBUtility.php");
      		echo "<div class='span-10 content' style='width:615px;text-align:right'><h1>Welcome " . (isset($_SESSION["username"])? $_SESSION["username"] : " Guest </h1></div>");
		?>
	</div>

<div class="span-24 content">
	<div><form id="frmSearch">
		<table>
			<tr>
				<td>Investor Staus</td><td>:</td><td><select id="invStatus"><option value="0" id="0">select</option><option value="PFA" id="PFA" >Pending For Approval</option><option value="APP" id="APP">Approved</option></select></td>
			</tr>
		</table></form>
	</div>

	<?php
   	$dbcnx = new DBUtility();
	$status = isset($_GET['statuscode']) ? $_GET['statuscode'] : "PFA";
		$result = $dbcnx->getData("select * from investor_data where statuscode='" . $status . "'");
		if($result){
			//table header
			 echo   "<p class='large loud'>Please find below the list of new potential investors.</p><br />";
			$table_code = '<table id="inv_data" ><tr><th>Name</th><th>Title</th><th>Company</th><th>Address</th><th>Work Phone</th><th>	 	  		Mobile phone</th><th>Email</th><th>Web Page</th><th>Investment Area</th>';
			if($status=='PFA') $table_code .= '<th>Approve</th><th>Reject</th>';
			$table_code .= '</tr>';
			echo $table_code;
			//looping throught the result set and building the table
			while($row = mysql_fetch_array($result, MYSQL_NUM))
			{
				echo '<tr id=' . $row[0] . '>';
				#echo '<td>' . '<input type="checkbox" id="' . $row[0] . '" />' . '</td>';
				echo '<td>' . $row[1] .' '. $row[2] .' '. $row[3] . '</td>'; 
				echo '<td>' . $row[4] .'</td>';
				echo '<td>' . $row[5] .'</td>';
				echo '<td>' . $row[6] .',<br/> '. $row[7] .',<br/>'. $row[8] .',<br/>'. $row[9] .',<br/>'. $row[10] .'</td>';
				echo '<td>' . $row[11] .'</td>';
				echo '<td>' . $row[12] .'</td>';
				echo '<td>' . $row[13] .'</td>';
				echo '<td>' . $row[14] .'</td>';
				echo '<td>' . $row[15] .'</td>';

				if($status =='PFA'){
					echo '<td><img src=./images/approve.png class="imgapprove"/></td>';
					echo '<td><img src=./images/reject.png class="imgreject"/></td>';
				}
				echo '</tr>';
			}
			echo '</table><br />';
		}
		else{
			echo "<div style='text-align:center;color:green'><h2>No Record Found</h2></div>";
		}
		mysql_free_result($result);
		?>
    <!--input id="app_investor" type="button" value="Approve"/-->
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
			