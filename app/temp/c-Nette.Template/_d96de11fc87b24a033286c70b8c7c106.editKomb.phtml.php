<?php //netteCache[01]000241a:2:{s:4:"time";s:21:"0.41984300 1279219970";s:9:"callbacks";a:1:{i:0;a:3:{i:0;a:2:{i:0;s:5:"Cache";i:1;s:9:"checkFile";}i:1;s:86:"/home/jirka/Omnique/Omnique_shop/document_root/../app/templates/Manager/editKomb.phtml";i:2;i:1279219968;}}}?><?php
// file …/templates/Manager/editKomb.phtml
//

$_cb = LatteMacros::initRuntime($template, NULL, '0736f20cf3'); unset($_extends);


//
// block content
//
if (!function_exists($_cb->blocks['content'][] = '_cbb26f9f7bbb4_content')) { function _cbb26f9f7bbb4_content() { extract(func_get_arg(0))
?>
<div id="nahled">
    <div id="cCont">
        <h3><?php echo TemplateHelpers::escapeHtml($nadpis) ?> - </h3>
        <div id="nahledCont">
            <div class="formCont">
<?php $control->getWidget("editKomb")->render() ?>
            </div>
        </div>
    </div>
</div>
<?php
}}

//
// end of blocks
//

if ($_cb->extends) { ob_start(); }

if (SnippetHelper::$outputAllowed) {
if (!$_cb->extends) { call_user_func(reset($_cb->blocks['content']), get_defined_vars()); }  
}

if ($_cb->extends) { ob_end_clean(); LatteMacros::includeTemplate($_cb->extends, get_defined_vars(), $template)->render(); }
