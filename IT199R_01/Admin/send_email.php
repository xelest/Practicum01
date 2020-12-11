<?php

$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "wizardscloudhive@gmail.com";
$mail->Password = "wizardscloudhive2016180067";
$mail->SetFrom("wizardscloudhive@gmail.com");
$mail->Subject = "Test";
$mail->Body = "hello";
$mail->AddAddress("mavhernandez@live.mcl.edu.ph");

 if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
    echo "Message has been sent";
 }

?>