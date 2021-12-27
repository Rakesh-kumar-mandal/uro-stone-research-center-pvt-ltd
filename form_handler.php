<?php
$name=$_POST['name'];
$visitor_email=$_POST['number'];
$message=$_POST['email'];

$email_form = 'rakeshmandal484@gmail.com';
$email_subject="New Booking";
$email_body = "User Name: $name.\n".
               "User Number: $number.\n".
               "User Email: $visitor_email.\n";

               $to = "iaminflunecer616@gmail.com";
               $headers="From": $email_from \r\n";
               $headers .= "Reply-To: $visitor_email\r\n";

               mail($to,$email_subject,$email_body,$headers);
               header("Location: index.html");
               ?>
