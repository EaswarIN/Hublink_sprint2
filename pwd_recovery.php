<?php

include ("Utility/DBUtility.php");
require 'class.phpmailer.php';

	resetPassword();

	function resetPassword(){
		$dbcnx = new DBUtility();

	   	$email = $_POST['email'];
		$activationcode = gen_activationcode();

	   	$query = "select count(1) from user_credentials ,investor_data invd where invd.id=investorid and username = '". $email . "' and invd.statuscode='APP'";
		$result = $dbcnx->getData($query);

		if($result){
			sendmail($email,$activationcode);
   		}
   		else
   		{
   			echo('Not a Registered User');
   		}
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
		$mail->IsSMTP();                                      // Set mailer to use SMTP

		//$mail->Host = 'smtp.gmail.com';  // Specify main and backup server
		$mail->Host = 'smtp.iway.ch';
		$mail->SMTPAuth = true;  // Enable SMTP authentication

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

		$mail->Subject = 'Hublink User check';
		$mail->Body    = "Hi <br><br> Thank you for contacting us. Your password has been reset.<br> Please create a new password by clicking
						 <a href ='http://hublinknetworks.com/register_user.php?username=" .$email."&code=".$activationcode."'>here</a>" ;

		if(!$mail->Send()) {
   			//echo 'Message could not be sent.';
   			echo 'Mailer Error: ' . $mail->ErrorInfo;
		}

		echo 'Password Reset Successful';
   }
?>