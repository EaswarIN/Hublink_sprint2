<?php
include ("Utility/DBUtility.php");
include ("common/usersession.php");

$username = $_POST["username"];
$activationcode = $_POST["activationcode"];
$password = $_POST["password"];
$role='';


if(empty($username) || empty($activationcode) || empty($password))
{
	echo "There was an error in processing your request. The username or password provided does not match our records.  Please check that your information was entered correctly and retry to sign in.";
}
else
{
	$dbcnx = new DBUtility();
	$result = $dbcnx->getData("select count(1) from user_credentials where username='" . $username . "' and password='" . $activationcode . "'");
	$row=mysql_fetch_array($result);
	if(empty($row)){
		echo "There was an error in processing your request. The username or password provided does not match our records.  Please check that your information was entered correctly and retry to sign in.";
	}
	else{
		session_start();
		$_SESSION["username"] = $username;
		$sql = "update user_credentials set password= '" . $password . "' where username='" . $username ."'";
		$dbcnx->save($sql);
		echo "register";
	}
}
?>
