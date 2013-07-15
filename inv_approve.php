<?php

include ("Utility/DBUtility.php");
require 'class.phpmailer.php';


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
		$activationcode = gen_activationcode();

	   	$query1 = "update investor_data set statusCode = 'APP' where id=" . $invId ;
	   	$query2 = "INSERT INTO user_credentials (username, password, role, investorid) VALUES ('". $email ."','". $activationcode ."','investor','". $invId ."')";
		$result1 = $dbcnx->save($query1);
	   	$result2 = $dbcnx->save($query2);

		if($result1 && $result2 ){
			sendmail($email,$activationcode);
   		}
	}
	function reject($invId,$dbcnx){
			   	$query = "update investor_data set statusCode = 'REJ' where id=" . $invId ;
				$result = $dbcnx->save($query);
	}

   function get_activation()
{
$chain="";
$arra_codesASCII=array();
for($i=ord(0);$i<=ord(9);$i++) $arra_codesASCII[]=chr($i);
for($i=ord("a");$i<=ord("z");$i++) $arra_codesASCII[]=chr($i);
for($i=ord("A");$i<=ord("Z");$i++) $arra_codesASCII[]=chr($i);
for($i=0;$i!=128;$i++) $chain.=$arra_codesASCII[array_rand($arra_codesASCII)];

return $chain;
}


   function gen_activationcode()
   {
   		$acode = '';
		$chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		for ($i=0; $i<8; $i++)
		$acode .= $chars[mt_rand(0, strlen($chars)-1)];
		return $acode;
   }
   function sendmail($email,$activationcode){

   		$admin = "admin@hublinksnetwork.com";

		//mail($admin, $subject, $message, $headers);
		//mail($email, $subject, $message, $headers);

		$mail = new PHPMailer;

		$mail->IsSMTP();
		// Set mailer to use SMTP
		$mail->Host = 'smtp.iway.ch';

		//$mail->Host = 'smtp.gmail.com';  // Specify main and backup server
		$mail->SMTPAuth = true;
		// Enable SMTP authentication
		$mail->Username = 'admin@hublinknetworks.com';                            // SMTP username
		$mail->Password = 'cA4dVug5';

		//$mail->Username = 'mailtohublink@gmail.com';                            // SMTP username
		//$mail->Password = 'hmmemckjemyzdjpz';                           // SMTP password for Application access
		$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

		$mail->From = 'admin@hublinknetworks.com';
		$mail->FromName = 'Hublink Admin';
		$mail->AddAddress($email);               // Name is optional

		$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
		$mail->IsHTML(true);                                  // Set email format to HTML

		$mail->Subject = 'Welcome to Hublink';
		$mail->Body    = "Dear ".$_SESSION["username"] ."<br><br> Thank you for contacting us. Your request has been processed and approved.<br><br> Please set-up your password and enter the investor area where you can find out some more detailed information about HubLink Networks and the EnergyLink project.
To setup your password please click <a href ='http://www.hublinknetworks.com/hublink/register_user.php?username=" .$email."&code=".$activationcode."'>here</a>".
"<br><br> A member of our management team will be in contact with you shortly to answer any questions you might have.
<br><br>Your Hublink Networks Team ";

		$mail->AltBody =  "Dear ".$_SESSION["username"] ."<br><br> Thank you for contacting us. Your request has been processed and approved.<br><br> Please set-up your password and enter the investor area where you can find out some more detailed information about HubLink Networks and the EnergyLink project.
To setup your password please click <a href ='http://www.hublinknetworks.com/hublink/register_user.php?username=" .$email."&code=".$activationcode."'>here</a>".
"<br><br> A member of our management team will be in contact with you shortly to answer any questions you might have.
<br><br>Your Hublink Team ";


		if(!$mail->Send()) {
   			//echo 'Message could not be sent.';
   			//echo 'Mailer Error: ' . $mail->ErrorInfo;

		}

		//echo 'Message has been sent';
   }
?>