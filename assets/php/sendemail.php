<?php

	$name = @trim(stripslashes($_GET['name'])); 
	$email = @trim(stripslashes($_GET['email']));  
	$subject = @trim(stripslashes($_GET['subject']));  
	$message = @trim(stripslashes($_GET['message'])); 

	$email_from = $email;
	$email_to = 'pixelciosa@outlook.com'; //replace with your email

	$body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $subject . "\n\n" . 'Message: ' . $message;

	$success = @mail($email_to, $body, 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $subject . "\n\n" . 'Message: ' . $message);
	
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<script>alert("Thank you for contact us. As early as possible  we will contact you.");</script>
	<meta HTTP-EQUIV="REFRESH" content="0; url=http://pixelciosa.github.io"> 
</head>