<?php

/**
 * Created by PhpStorm.
 * User: Nick
 * Date: 26.07.17
 * Time: 12:49
 */
class BaseSystem
{
    /**
     * @var Mailer_Template
     */
    protected $tmpl;
    protected $warn;
    protected $success;

    function __construct()
    {
        global $tpl;
        $this->tmpl = $tpl;
    }

}