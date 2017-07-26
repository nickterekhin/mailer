<?php

/**
 * Date: 26.07.17
 * Time: 18:23
 */

include_once BASEDIR.'/class/mailer_lib/class.phpmailer.php';
include_once BASEDIR.'/class/mailer_lib/class.smtp.php';

class MailerService extends PHPMailer
{
    private $mail_from;

    function __construct()
    {
        parent::__construct();
        global $mail_init;

        $this->Host = $mail_init['smtp_host'];
        $this->Port = $mail_init['smtp_port'];
        $this->Username = $mail_init['smtp_username'];
        $this->Password = $mail_init['smtp_password'];
        $this->SMTPAuth = $mail_init['smtp_auth'];
        $this->Mailer = $mail_init['smtp_mailer'];
        $this->setFrom($mail_init['from_email'],$mail_init['from_name']);

    }

    function sendHtml($to, $subject,$content,$attache=[])
    {

            $this->Subject = $subject;
            $this->addAddress($to);
            $this->msgHTML("" . $content);
            if (count($attache) > 0) {
                foreach ($attache as $k => $v) {
                    $this->addAttachment($v['tmp_name'], $v['name']);
                }
            }

          return $this->Send();

    }



}