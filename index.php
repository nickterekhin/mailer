<?php
/**
 * Created by PhpStorm.
 * User: Nick
 * Date: 26.07.17
 * Time: 11:55
 */

define("BASEDIR",dirname(__FILE__));

include_once BASEDIR.'/init/init.php';

$tpl = new Mailer_Template("template/standard");

if(!isset($_REQUEST['p']))
{
    $_REQUEST['p']='mailer';
}

$buffer = preg_replace('[^_a-zA-Z0-9]', '', $_REQUEST['p']);

if(!@include(BASEDIR . "/system/$buffer.php"))
{
    echo "Error module";
}

switch($buffer)
{
    case "mailer":$template="index.tpl";break;

    default:
        $template="index.tpl";
}

if (!$template) $template ='index.tpl';

    $out = $tpl->fetch($template);
    echo $out;