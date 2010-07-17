<?php //netteCache[01]000245a:2:{s:4:"time";s:21:"0.02123000 1279285044";s:9:"callbacks";a:1:{i:0;a:3:{i:0;a:2:{i:0;s:5:"Cache";i:1;s:9:"checkFile";}i:1;s:90:"/home/jirka/Omnique/Omnique_shop/document_root/../app/templates/Manager/addkomponent.phtml";i:2;i:1279285039;}}}?><?php
// file …/templates/Manager/addkomponent.phtml
//

$_cb = LatteMacros::initRuntime($template, NULL, '96bfab80f2'); unset($_extends);


//
// block content
//
if (!function_exists($_cb->blocks['content'][] = '_cbb500cf3e818_content')) { function _cbb500cf3e818_content() { extract(func_get_arg(0))
?>
<div id="nahled">
<div id="cCont">
	<h3><?php echo TemplateHelpers::escapeHtml($nadpis) ?></h3>
	<div id="nahledCont">
	<div class="formCont">
	<div class="formContText">
<?php $control->getWidget("addkomp")->render() ?>
	 </div>
	 </div>
    </div>
    </div>
     
</div><?php
}}

//
// end of blocks
//

if ($_cb->extends) { ob_start(); }

if (SnippetHelper::$outputAllowed) {
if (!$_cb->extends) { call_user_func(reset($_cb->blocks['content']), get_defined_vars()); }  
}

if ($_cb->extends) { ob_end_clean(); LatteMacros::includeTemplate($_cb->extends, get_defined_vars(), $template)->render(); }
