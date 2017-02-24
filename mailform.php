<?php 
	if(isset($_POST['flname'])) { $flname=$_POST['flname']; } else { $flname = ''; }
	if(isset($_POST['email'])) { $email=$_POST['email']; } else { $email = '';}
	if(isset($_POST['message'])) { $message=$_POST['message']; } else { $message = '';}
	if(isset($_POST['receiver-email'])) { $receiverEmail=$_POST['receiver-email']; } else { $receiverEmail = '';}
		// email fields: to, from, subject, and so on
		$subject ="Enquiry from : $flname"; 
		$message = "You have received a new message.\n\n".
					"Message: $message.\n\n".
					"From: $flname.\n".
					"Email: $email.\n";
		mail($receiverEmail, $subject, $message, "From: $email");
 ?>