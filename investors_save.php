<?php
include ("Utility/DBUtility.php");
require 'class.phpmailer.php';

	$email = $_POST['email'];
	$dbcnx = new DBUtility();

	$query=$dbcnx->getData("select email from investor_data where email='" . $email . "'");

	if(mysql_num_rows($query)>0){
		//EMail already exists//
		echo('EMail ID already Exists');
	}
	else{

		$sql = "insert into investor_data (prefix, first_name, second_name, pro_title, company, street_address, 2nd_street_address, zip, town, country, work_ph, mobile_ph, email, web_page, investor_area,state,statuscode) values('". $_POST['prefix'] ."','". $_POST['first']."','". $_POST['last']."','". $_POST['title']."','". $_POST['company']."','". $_POST['street']."','". $_POST['second_street']."','". $_POST['zip']."','". $_POST['town']."','". $_POST['country']."','". $_POST['work_phone'].$_POST['work_ph']."','". $_POST['mobile_ph']."','". $_POST['email']."','". $_POST['web_page']."','". $_POST['inv_area']."','". $_POST['state']. "','PFA' )";
		$result = $dbcnx->save($sql);

		if($result)
		{
			sendMail();//exit;
		}
	}
	//mysql_free_result($query);

	//send mail new
	function sendMail(){

   		$admin = "admin@hublinknetworks.com";


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

		$mail->From = $admin ;
		$mail->FromName = 'Hublink Admin';
		$mail->AddAddress('admin@hublinknetworks.com');

		//$mail->AddAddress('nswjonsson@gmail.com');               // Name is optional

		$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
		$mail->IsHTML(true);                                  // Set email format to HTML

		$mail->Subject = 'New Investor';
		$mail->Body   ="Please find below the details of a person who has expressed interest in investing in Hublink\n\n". "Name: ". $_POST['prefix'] ." ". $_POST['first'] ." ". $_POST['last'] ."\n".
"Title: ". $_POST['title'] ."\n". "company: ". $_POST['company'] ."\n". "street: ". $_POST['street'] ."\n". "Second Street: ". $_POST['second_street'] ."\n". "Town: ". $_POST['town'] ."\n";

		$mail->AltBody = "Please find below the details of a person who has expressed interest in investing in Hublink\n\n". "Name: ". $_POST['prefix'] ." ". $_POST['first'] ." ". $_POST['last'] ."\n".
"Title: ". $_POST['title'] ."\n". "company: ". $_POST['company'] ."\n". "street: ". $_POST['street'] ."\n". "Second Street: ". $_POST['second_street'] ."\n". "Town: ". $_POST['town'] ."\n";

		if(!$mail->Send()) {
   			//echo 'Message could not be sent.';
   			//echo 'Mailer Error: ' . $mail->ErrorInfo;
		}
	}
?>