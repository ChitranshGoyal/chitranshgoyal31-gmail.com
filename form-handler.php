<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['messages'];

$email_from = ['chitransh@bestuniversity.io'];

$email_subject = 'New Form';

$email_body = "User Name: $name\n".
              "User Email: $visitor_email\n".
              "User Subject: $subject\n".
              "User Message: $message\n";

              $to = 'chitranshgoyal31@gmail.com';
              $headers = "From: $email_from \r\n"   
              $headers .= "Reply-To: $visitor_email"
              
              mail ($to,$email_subject,$email_body)

              header("Location: contact.html");
?>