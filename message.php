<?php
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $visitor_phone = $_POST['phone'];
  $message = $_POST['message'];
  $email_from = 'reply-flamechargers.com';

	$email_subject = "New Quary Submission";

	$email_body = "You have received a new message from the user $name.\n".
                            "Email ID:$visitor_email".
                            "Here is his/her phone number:$visitor_phone".
                            "Here is the message:\n $message"
    $to = "Smokescreen8572@gmail.com";

                            $headers = "From: $email_from \r\n";
                          
                            $headers .= "Reply-To: $visitor_email \r\n";
                          
                            mail($to,$email_subject,$email_body,$headers);                          

?>