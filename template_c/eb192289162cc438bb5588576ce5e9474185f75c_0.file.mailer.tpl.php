<?php
/* Smarty version 3.1.30, created on 2017-07-26 20:31:19
  from "/Volumes/Data/htdocs/mailer/template/standard/pages/mailer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5978d1e79a8e76_49800037',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb192289162cc438bb5588576ce5e9474185f75c' => 
    array (
      0 => '/Volumes/Data/htdocs/mailer/template/standard/pages/mailer.tpl',
      1 => 1501090278,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5978d1e79a8e76_49800037 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
    var qty =0;
    $(document).ready(function(){

        $(".file-action-add").click(function(){
            var bodyId = $(this).attr("data-upload-body");

             qty += 1;
            fileUploadElement(qty).appendTo($("#"+bodyId));
            $(".file-action-del").click(function(){
                $(this).parent().remove();
            });
            $(".file-upload").change(function(){
                var inputId = $(this).parent().parent().attr("id");
                var value = $(this).val();
                value = /([^\\]+)$/.exec(value)[1];
                $("#file-name-text-"+inputId).text(value);
                $(this).parent().removeClass("btn-primary");
                $(this).parent().addClass("btn-info");

            });
        });
    });

    function fileUploadElement(index)
    {
        var element = "<div class='file-item' id="+index+">";
            element+="<span class='btn btn-primary btn-file'>";
            element +="<i class='fa fa-upload'></i>Upload File 1<input type='file' id='file-upload-"+index+"' name='attachment["+index+"]' class='file-upload' data-action-id='file-action-"+index+"'>";
            element+= "</span>";
            element+= "<span id='file-name-text-"+index+"' class='file-name-text'>";
            element+="</span>";
            element+="<span class='file-action file-action-del pull-right' data-id="+index+">";
            element+="<i class='fa fa-minus'></i>";
            element+="</span>";
            element+="</div>";
        return $(element);
    }
<?php echo '</script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['warn']->value) {?>
    <div class="alert alert-danger">
        <ul id="warn_list">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['warn']->value, 'reg_error');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['reg_error']->value) {
?>
                <li><?php echo $_smarty_tpl->tpl_vars['reg_error']->value;?>
</li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </ul>
    </div>
<?php }
if ($_smarty_tpl->tpl_vars['success']->value) {?>
    <div class="alert alert-success">
        <ul id="success_list">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['success']->value, 'reg_error');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['reg_error']->value) {
?>
                <li><?php echo $_smarty_tpl->tpl_vars['reg_error']->value;?>
</li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </ul>
    </div>
<?php }?>
<form class="form-horizontal mailer-form" action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" value="1" name="send-message">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="col-sm-2 control-label" for="mail-to">To:</label>
                <div class="col-sm-10 input-field">
                    <input type="text" name="mail-to" id="mail-to" class="form-control" required value=""/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="mail-from">from:</label>
                <div class="col-sm-10 input-field">
                    <input type="text" name="mail-from" id="mail-from" class="form-control" required value="<?php echo $_smarty_tpl->tpl_vars['from']->value;?>
" readonly="readonly"/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="mail-subject">Subject:</label>
                <div class="col-sm-10 input-field">
                    <input type="text" name="mail-subject" id="mail-subject" class="form-control" required value=""/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="mail-body">To:</label>
                <div class="col-sm-10 input-field">
                    <textarea name="mail-body" id="mail-body" class="form-control" rows="7" required maxlength="600" ></textarea>
                </div>
            </div>
            <div class="row">
                <div class="panel panel-attach col-sm-10 col-sm-offset-2" data-item-qty="0">
                    <div class="panel-heading">
                        <h4 class="panel-title">Attachment
                            <span class="file-action file-action-add pull-right" data-upload-body="file-upload-body"><i class="fa fa-plus"></i></span>
                        </h4>
                    </div>
                    <div class="panel-body" id="file-upload-body">

                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-12 text-right">
            <button type="submit" class="btn btn-success btn-md"><i class="fa fa-envelope"></i>Send Message</button>
                    </div>
                </div>
        </div>
    </div>
</form>
<?php }
}
