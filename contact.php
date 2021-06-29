<?php
  $name = $_POST['name'];
   $visitor_email = $_POST['email'];
   $message = $_POST['message'];


   $email_from = 'hatimneralwala@gmail.com';

   $email_subject = "new inquiry!!";

   $email_body = "user name: $name.\n".
                   "User Email: $visitor_email.\n".
                       "User Message: $message.\n";



$to = "hatimneral@gmail.com";

$headers = "Form: $email_from\r\n";

$headers .= "Reply-To: $visitor_email\r\n";

mail($to,$email_subject,$email_body,$headers);

header("location: contact.html");






?>
