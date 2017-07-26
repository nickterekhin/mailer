<?php

/**
 * Created by PhpStorm.
 * User: Nick
 * Date: 26.07.17
 * Time: 12:45
 */
include_once(BASEDIR . '/class/Class.BaseSystem.php');
include_once(BASEDIR . '/services/MailerService.php');
class Mailer extends BaseSystem
{
    private $mailer;

    function __construct()
    {
        parent::__construct();
        $this->mailer = new MailerService();
    }

    function show()
    {

        try {
            if (isset($_POST['send-message']) && $_POST['send-message'] == 1) {

                if(!isset($_POST['mail-from']) || empty($_REQUEST['mail-from']))
                {
                    $this->warn[] = "Please set From Address";
                }
                if(empty($this->warn)) {
                    $attachment = array();
                    $index = 0;
                    if (isset($_FILES['attachment'])) {
                        foreach ($_FILES['attachment']['name'] as $key => $file) {
                            $attachment[$index]['name'] = $file;
                            $attachment[$index]['tmp_name'] = $_FILES['attachment']['tmp_name'][$key];
                            $index++;
                        }
                    }

                    if ($this->mailer->sendHtml($_REQUEST['mail-to'], $_REQUEST['mail-subject'], $_REQUEST['mail-body'], $attachment)) {
                        $this->success[] = "Message sent successfully";
                    } else {
                        $this->warn[] = "Message was not sent";
                    }
                }
            }
        }catch (phpmailerException $ex)
        {
            $this->warn[] = $ex->errorMessage();
        }
        $this->tmpl->assign("warn",$this->warn);
        $this->tmpl->assign("success",$this->warn);
        $this->tmpl->assign("from",$this->mailer->From);


        $this->tmpl->assign("content", parse_page("cont/outin", $this->tmpl->fetch('pages/mailer.tpl'),"template/standard"));
    }
    function sendMail()
    {

    }
}

function main_mailer (Mailer $obj)
{

    $_REQUEST['sub'] = (isset($_REQUEST['sub']) && !empty($_REQUEST['sub'])) ? $_REQUEST['sub'] : 'show';
    switch($_REQUEST['sub'])
    {
        case 'show':
            $obj->show();
            break;

        case 'send':
            $obj->sendMail();
            break;

    }
}