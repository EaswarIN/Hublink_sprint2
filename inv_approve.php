<?php
   
include ("Utility/DBUtility.php");

$dbcnx = new DBUtility();


	$invId = $_POST['invId'];
	$action = $_POST['action'];

	switch($action){
		case 'a':
			approve($invId,$dbcnx);
			echo "success";
			break;
		case 'r':
			reject($invId,$dbcnx);
			echo "success";
			break;
		default:
			echo "failed:" . $action;
	}

	function approve($invId,$dbcnx){
	   	$email = $_POST['email'];
		$password = gen_password();
	   	$query1 = "update investor_data set statusCode = 'APP' where id=" . $invId ;
	   	$query2 = "INSERT INTO user_credentials (username, password, role) VALUES ('". $email ."','". $password ."','investor')"; 
	   	$result1 = $dbcnx->save($query1);
	   	$result2 = $dbcnx->save($query2);
		
		if($result1 && $result2 ){
			sendmail($email,$password);
   		}
	}
	function reject($invId,$dbcnx){
			   	$query = "update investor_data set statusCode = 'REJ' where id=" . $invId ;
				$result = $dbcnx->save($query);
	}

   function gen_password()
   {
   		$pwd = '';
		$chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		for ($i=0; $i<8; $i++)
		$pwd .= $chars[mt_rand(0, strlen($chars)-1)];
		return $pwd;
   }
   function sendmail($email,$password){
   
   		$admin = "sarathy_mv@hotmail.com;sarathymv77@gmail.com";
			$subject = "Hublink login details";
			$headers = "From:" . "admin@hublink.com";
			$message = "You have been approved as an investor for Hublink. Please find below your login details.\n\n Username: " . $email .       
			"\npassword: " . $password ."\n\n Thank You !!";
			mail($admin, $subject, $message, $headers);
			mail($email, $subject, $message, $headers);
   }
?>	