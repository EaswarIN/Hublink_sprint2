<?php
include 'Constant.php';
include ("Utility/DBUtility.php");

$email = $_POST['email'];
$comments = $_POST['comments'];

if(!(empty($email) || empty($comments)))
{
		$sql = "INSERT INTO contact_us ( first_name, 2nd_name, email, comments) VALUES ('". $_POST['first'] ."','". $_POST['last'] ."','". $_POST[ 	 	  		'email'] ."','". $_POST['comments'] ."')";


	$dbcnx = new DBUtility();
	$result = $dbcnx->save($sql);


	echo "CONTACT SUBMITTED";

}
else {
	echo "Please give your eamil and comments";
}


?>