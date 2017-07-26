# mailer
This solution using PHPMailer lib
https://github.com/PHPMailer/PHPMailer


To config mailer please use this file /init/mail_init.php


$mail_init["smtp_host"]='smtp.gmail.com';

$mail_init['smtp_port']= '587';

$mail_init['smtp_username']='your SMTP userName';

$mail_init['smtp_password']='SMTP password';

$mail_init['smtp_auth']=true;

$mail_init['smtp_mailer']='smtp'; could be 'mail' it will be use standart PHP mail() function to send messages 

$mail_init['from_name']=''; Sender Full Name

$mail_init['from_email']=''; Sender email address
