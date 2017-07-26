<?php
/**
 * Created by PhpStorm.
 * User: Nick
 * Date: 26.07.17
 * Time: 11:53
 */
define("SMARTY_DIR",BASEDIR."/class/tmpl/");

include_once SMARTY_DIR.'/Smarty.class.php';

class Mailer_Template extends Smarty
{
    function __construct($template_dir)
    {
        parent::__construct();

        $this->template_dir = $template_dir;
        $this->cache_dir = BASEDIR.'/cache';
        $this->compile_dir = BASEDIR.'/template_c';
        $this->assign('css_path', $template_dir."/content/css/");
        $this->assign('js_path', $template_dir."/content/js/");
        $this->assign('img_path', $template_dir."content/images/");
        $this->assign('base', BASEDIR);
        $this->assign('main_template_path', BASEDIR . "/".$template_dir);

        $this->assign('app_name','Mailer');
    }
}