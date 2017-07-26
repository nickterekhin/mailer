<?php
/**
 * Created by PhpStorm.
 * User: Nick
 * Date: 26.07.17
 * Time: 12:40
 */

function parse_page($template, $in,$template_dir)
{

    $tpl=new Mailer_Template($template_dir);

    $tpl->assign('content', $in);
    $theerg = $tpl->fetch($template . '.tpl');
    return $theerg;
}