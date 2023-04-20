<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'mailer/autoload.php';


$mail = new PHPMailer(true);
                     
$mail->isSMTP();                                            
$mail->Host       = 'smtp.gmail.com';                    
$mail->SMTPAuth   = true;                                   
$mail->Password   = 'zvhhuofwwiaqzqpi';                         
$mail->SMTPSecure = 'ssl';           
$mail->Port       = 465;   


 $mail->isHTML(true);
 $mail->Charset = "UTF-8";
?>

