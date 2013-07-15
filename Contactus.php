<?php
include 'Constant.php';
include ("Utility/DBUtility.php");
require 'class.phpmailer.php';

$email = $_POST['email'];
$comments = $_POST['comments'];
$first_name = $_POST['first'];
$contact_phone= $_POST['ct_phone'];


if(!empty($email) && !empty($first_name) && !empty($comments))
{
	$sql = "INSERT INTO contact_us ( first_name, 2nd_name, email, Contact_phone, comments) VALUES ('". $_POST['first'] ."','". $_POST['last'] ."','". $_POST['email'] ."','". $_POST['ct_phone'] ."','". $_POST['comments'] ."')";

	$dbcnx = new DBUtility();
	$result = $dbcnx->save($sql);

	sendMail();
	echo "Thank you for the comments";
}
else {
	echo "Input Required - First Name, Email and Comments ";
}

function sendMail(){

   		$mailid = "info@hublinknetworks.com";

		//mail($admin, $subject, $message, $headers);
		//mail($email, $subject, $message, $headers);

		$mail = new PHPMailer;
		$mail->IsSMTP();

		// Set mailer to use SMTP
		$mail->Host = 'smtp.iway.ch';

		//$mail->Host = 'smtp.gmail.com';  // Specify main and backup server
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		//$mail->Username = 'info@hublinknetworks.com';                            // SMTP username
		//$mail->Username = 'mailtohublink@gmail.com';                            // SMTP username
		//$mail->Password = 'hmmemckjemyzdjpz';
		// SMTP password for Application access


		$mail->Username = 'info@hublinknetworks.com';                            // SMTP username
		$mail->Password = 'wtj5gMXy';

		$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

		$mail->From = $mailid;
		$mail->FromName = 'Hublink Admin';
		$mail->AddAddress('info@hublinknetworks.com');
		//$mail->AddAddress('nswjonsson@gmail.com');               // Name is opted ional
		//$mail->AddAddress('pal.eash@gmail.com');               // Name is opted ional

		$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
		$mail->IsHTML(true);                                  // Set email format to HTML

		$mail->Subject = 'New Comment';
		$mail->Body = "Comment added in HubLink.\n\nName " . $_POST['first'] . "\nEMail " . $_POST['email'] . "\nContact Phone " . $_POST['ct_phone'] . "\nComment " . $_POST['comments'] ;
		$mail->AltBody = "Comment added in HubLink.\n\nName " . $_POST['first'] . "\nEMail " . $_POST['email'] . "\nContact Phone " . $_POST['ct_phone'] . "\nComment " . $_POST['comments'] ;
		if(!$mail->Send()) {
   			echo 'Message could not be sent.';
   			//echo 'Mailer Error: ' . $mail->ErrorInfo;
		}
	}

?>