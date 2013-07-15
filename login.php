<?php
include ("Utility/DBUtility.php");
include ("common/usersession.php");

$uname = $_POST["username"];
$pw = $_POST["password"];
$systemDateTime = $_POST["dateandtime"];
$role='';
if(empty($uname) || empty($pw))
{
	echo "There was an error in processing your request. The username or password provided does not match our records.  Please check that your information was entered correctly and retry to sign in.";
}
else
{
	$dbcnx = new DBUtility();
	$result = $dbcnx->getData("select * from user_credentials, investor_data invd where investorid=invd.id and username='" . $_POST["username"] . "' and password='" . $_POST["password"] . "' and (statuscode='APP' or role='admin')");
	$row=mysql_fetch_array($result);
	if(empty($row)){
		echo "There was an error in processing your request. The username or password provided does not match our records or your account is disabled.  Please check that your information was entered correctly and retry to sign in.";
	}
	else{
		session_start();
		$date = strtotime($systemDateTime);
		$date = date('y-m-d H:i:s',$date);
		$_SESSION['lastlog'] =  date('M d, Y',strtotime($row[4])) . " <i style=text-transform:lowercase> at </i>  " . date(' g:i A',strtotime($row[4]));
		#$_SESSION['lastlog'] =  date('M d, Y',strtotime($row[4]));
		$sql = "update user_credentials set lastlogin = '" . $date . "' where username='" . $uname ."'";
		$dbcnx->save($sql);
		$role= $row[3];
		$_SESSION["username"] = $uname;
		$investerdetails = $dbcnx->getData("select * from  investor_data where id='" . $row[5] . "'");
		$investerrow=mysql_fetch_array($investerdetails);
		$_SESSION["firstname"] = $investerrow[2];
		$_SESSION["lastname"] = $investerrow[3];
		$_SESSION['role'] = $row[3];

		echo $row[3];
	}
	#echo "called";
}
?>
