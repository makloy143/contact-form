<?php 
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$message=$_POST['message']


$email_from='marklouie143@gmail.com';
$email_subject ='New contact make submission';
$email_body="User Name: $name.\n";

          "user email: $visitor_email.\n";
        "user Message: $message.\n";

$to ='marklouie143@gmail.com';
$headers="from: $email_from \r\n";
$headers="Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header('Location: index.html');


?>