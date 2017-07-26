<?php
/**
 * Created by PhpStorm.
 * User: Nick
 * Date: 26.07.17
 * Time: 12:13
 */

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($HTTP_POST_VARS)) {
    $_POST     = $HTTP_POST_VARS;
    $_GET      = $HTTP_GET_VARS;
    $_REQUEST  = array_merge($_POST, $_GET);
    $_COOKIE   = $HTTP_COOKIE_VARS;
    $_SESSION  = $HTTP_SESSION_VARS;
}

include_once BASEDIR.'/init/tmpl_config.php';
require_once BASEDIR.'/init/mail_init.php';
include_once BASEDIR.'/helpers/fn.php';
