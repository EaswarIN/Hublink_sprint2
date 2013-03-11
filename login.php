<?php
include ("Utility/DBUtility.php");
include ("common/usersession.php");

$uname = $_POST["username"];
$pw = $_POST["password"];
$role='';
if(empty($uname) || empty($pw))
{
	echo "Please enter valid username and password";
}
else
{
	$dbcnx = new DBUtility();
	$result = $dbcnx->getData("select * from user_credentials where username='" . $_POST["username"] . "' and password='" . $_POST["password"] . "'");
	$row=mysql_fetch_array($result);
	if(empty($row)){
		echo " “There was an error in processing your request. The username or password provided does not match our records.  Please check that your 	 				information was entered correctly and retry to sign in.";
	}
	else{
		session_start();
		$_SESSION["username"] = $uname;
		$sql = "update user_credentials set lastlogin = '" .  date('D-M-Y h:i:s: A') . "' where username='" . $_POST["username"] ."'";
		$dbcnx->save($sql);
		$role= $row[3];
		$_SESSION['role'] = $row[3];
		$_SESSION['lastlog'] =date('D-M-Y h:i:s: A');
			echo $row[3];
	}
	#echo "called";
}
?>
