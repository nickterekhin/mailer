$(document).ready(function(){

    AddCKEditorToTextArea();

});

function AddCKEditorToTextArea()
{
    if($('textarea:not(".without-ckeditor")').size()>0)
    {
        $('textarea').ckeditor({
            customConfig: "mailer_config.js"
        });
    }
}