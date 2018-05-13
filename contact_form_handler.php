<?php
	$name = $_Post['name'];
	$visitor_email = $_Post['email'];
	$telephone = $_Post['telephone'];
	$message = $_Post['message'];
	
	$email_from = 'amitgala4@gmail.com';
	$email_subject = "New Form Submission";
	$email_body = "User Name: $name.\n".
					"User Email: $visitor_emailemail.\n".
					"User Number: $telephone.\n".
					"User Message: $message.\n";
					
	$to = "jproadsideassistance@gmail.com";

	$headers = "From: $email_from \r\n";
	$headers = "Reply-To:$visitor_email \r\n;
	mail($to,$email_subject,$email_body,$headers);
	header("Location: index.html");
	
	
	?>
