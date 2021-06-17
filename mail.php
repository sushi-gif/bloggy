<?php 
function send_mail($sender,$mailer,$sub,$body){
$mailSub = $sub;
$mailMsg = "Da ".$mailer." :<br> ".$body;

 require 'PHPMailer-master/PHPMailerAutoload.php';
 $mail = new PHPMailer();
 $mail ->IsSmtp();
 $mail ->SMTPDebug = 2; // non funzionera' su altervista in quanto non e' abilitato openssl
 $mail ->SMTPAuth = true;
 $mail ->SMTPSecure = 'ssl';
 $mail ->Host = "smtp.gmail.com";
 $mail ->Port = 465; // or 587
 $mail ->IsHTML(true);
 $mail ->Username = "_email_";
 $mail ->Password = "_password_";
 $mail ->SetFrom($mailer);
 $mail ->Subject = $mailSub;
 $mail ->Body = $mailMsg;
 $mail ->AddAddress($sender);
 $mail ->send();
}
?>
