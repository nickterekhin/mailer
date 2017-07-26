<?php
/* Smarty version 3.1.30, created on 2017-07-26 13:11:43
  from "/Volumes/Data/htdocs/mailer/template/standard/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59786adf0e26f7_55901192',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '675d3305ca3b357ebe1423ebfc6011fc8866a783' => 
    array (
      0 => '/Volumes/Data/htdocs/mailer/template/standard/index.tpl',
      1 => 1501063838,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59786adf0e26f7_55901192 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mail System</title>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['main_template_path']->value)."/other/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

</head>
<body>


    <div class="container" id="main-content">
         <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

    </div>

</body>
</html><?php }
}
