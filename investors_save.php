<?php
include ("Utility/DBUtility.php");

$sql = "insert into investor_data (prefix, first_name, second_name, pro_title, company, street_address, 2nd_street_address, zip, town, country, work_ph, mobile_ph, email, web_page, investor_area,state,statuscode) values('". $_POST['prefix'] ."','". $_POST['first']."','". $_POST['last']."','". $_POST['title']."','". $_POST['company']."','". $_POST['street']."','". $_POST['second_street']."','". $_POST['zip']."','". $_POST['town']."','". $_POST['country']."','". $_POST['work_ph']."','". $_POST['mobile_ph']."','". $_POST['email']."','". $_POST['web_page']."','". $_POST['inv_area']."','". $_POST['state']. "','PFA' )";

$dbcnx = new DBUtility();
$result = $dbcnx->save($sql);

if($result)
{
//echo $message;
sendMail();
echo "Investor data submitted and email sent to Hublink !!";
exit;
}
else echo $sql . " .Recheck the email id that you entered. It is already registered.";

#Send mail function
function sendMail(){
$message ="Please find below the details of a person who has expressed interest in investing in Hublink\n\n". "Name: ". $_POST['prefix'] ." ". $_POST['first'] ." ". $_POST['last'] ."\n". 
"Title: ". $_POST['title'] ."\n". "company: ". $_POST['company'] ."\n". "street: ". $_POST['street'] ."\n". "Second Street: ". $_POST['second_street'] ."\n". "Town: ". $_POST['town'] ."\n". "ZIP: ". $_POST['zip'] ."\n". "Country: " . $_POST['country']. "\nState: " . $_POST['state'] ."\nWork Phone: ". $_POST['work_ph']."\nMobile: ". $_POST['mobile_ph']."\nEmail: ". $_POST['email']. "\nWeb Page: ". $_POST['web_page']."\nInvestment Area: ". $_POST['inv_area'] ;
$to_1 = "sarathy_mv@hotmail.com";
$to_2 = "easwar@juhomi.com";
$subject = "New Investor";
$headers = "From:" . "admin@hublink.com";
mail($to_1,$subject,$message,$headers);
mail($to_2,$subject,$message,$headers);
return true;
}
?>
