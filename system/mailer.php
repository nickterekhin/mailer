<?php
/**
 * Created by PhpStorm.
 * User: Nick
 * Date: 26.07.17
 * Time: 12:36
 */

include_once(BASEDIR . '/class/Class.Mailer.php');
$obj=new Mailer();
main_mailer($obj);