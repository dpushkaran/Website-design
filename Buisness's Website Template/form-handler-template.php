<?php

$name = $_POST['name'];
$vistor_tel = $_POST['tel'];
$vistor_email = $_POST['email'];
$address = $_POST['address'];
$message = $_POST['message'];

$email_from = "file:///C:/Users/Deva%20Pushkaran/Desktop/Mo's%20Moving%20Website/contact-template.html";/* Domain name */

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
                "User email: $vistor_email.\n".
                 "User Phone: $vistor_tel.\n".
                  "User Address: $address.\n".
                   "User Message: $message.\n";

$to = 'dddpushkaran@gmail.com'; /* Your email address*/
$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $vistor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact-template.html")
?>