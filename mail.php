<?php $name = $_POST['name'];
$email = $_POST['email'];
$phoneno = $_POST['phoneno'];
$message = $_POST['message'];

$subject = "Contact Form";
$email_body = "User Name: $name.\n".
                "User Email: $email.\n".
                "User Message:$message.\n".
                "User Phoneno:$phoneno.\n";
$to = "himanshudidwaniyajsk@gmail.com";
$headers = "From: $email \r\n";
$headers .="Reply-To:$email \r\n"; 
mail($to, $subject, $email_body, $headers);
header("Location:index.html");
?>
