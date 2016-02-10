<?php

// CHANGE THE VALUES BELOW, YOUR EMAIL AND MESSAGE SUBJECT
$adminEmail = "youremail@example.com";
$emailSubject = "Newsletter signup";


// -------------- DON'T EDIT BELOW --------- //
$email = $_POST["emailnews"];
//Check to make sure sure that a valid email address is submitted
	if(trim($_POST['emailnews']) == '')  {
		$hasError = true;
	} else if (!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", trim($_POST['emailnews']))) {
		$hasError = true;
	} else {
		$email = trim($_POST['emailnews']);
	}
	//If there is no error, send the email
	if(!isset($hasError)) {
		$headers = 'From: <'.$email.'>' . '\r\nContent-type: text/html; charset=utf-8\r\nReply-To: ' . $email . '\r\n';
		$body = "Od: Restaurante\r\nEmail: " . $email . "\r\n";
		// an email to site admin
		mail($adminEmail, $emailSubject, $body, $headers);
		$emailSent = true;
		echo "OK";
	} else {
		echo "ERROR";
		}
?>