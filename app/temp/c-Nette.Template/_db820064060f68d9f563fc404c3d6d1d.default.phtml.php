<?php //netteCache[01]000238a:2:{s:4:"time";s:21:"0.60548900 1279371457";s:9:"callbacks";a:1:{i:0;a:3:{i:0;a:2:{i:0;s:5:"Cache";i:1;s:9:"checkFile";}i:1;s:83:"/home/jirka/Omnique/Omnique_shop/document_root/../app/templates/Texty/default.phtml";i:2;i:1279371448;}}}?><?php
// file …/templates/Texty/default.phtml
//

$_cb = LatteMacros::initRuntime($template, NULL, '925d427c34'); unset($_extends);


//
// block content
//
if (!function_exists($_cb->blocks['content'][] = '_cbb09b2dba8a0_content')) { function _cbb09b2dba8a0_content() { extract(func_get_arg(0))
?>
<div id="nahled">
<div id="textCont">
	<h3><?php echo TemplateHelpers::escapeHtml($text->nadpis) ?></h3>
	<p><?php echo TemplateHelpers::escapeHtml($text->text) ?></p>
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
