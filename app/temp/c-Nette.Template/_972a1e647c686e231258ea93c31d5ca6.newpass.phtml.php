<?php //netteCache[01]000243a:2:{s:4:"time";s:21:"0.82856400 1279272318";s:9:"callbacks";a:1:{i:0;a:3:{i:0;a:2:{i:0;s:5:"Cache";i:1;s:9:"checkFile";}i:1;s:88:"/home/jirka/Omnique/Omnique_shop/document_root/../app/templates/Registrace/newpass.phtml";i:2;i:1279272316;}}}?><?php
// file …/templates/Registrace/newpass.phtml
//

$_cb = LatteMacros::initRuntime($template, NULL, '077001c429'); unset($_extends);


//
// block content
//
if (!function_exists($_cb->blocks['content'][] = '_cbbf5cfa58bdd_content')) { function _cbbf5cfa58bdd_content() { extract(func_get_arg(0))
?>
<div id="nahled">
<div id="final-cont">
<h4></h4>
<div class="split"></div>
<?php if ($stat): ?><a href="<?php echo TemplateHelpers::escapeHtml($control->link("genNewPass!", array('id' => $id, 'hash' => $hash))) ?>">Pro vygenerování nového hesla <strong></>klikněte zde.</></a><?php else: ?>Nesprávný klíč pro registraci. Opakujte žádost o nové heslo.<?php endif ?></a>
<div class="split"></div>
<p>Děkujeme za spolupráci</p>
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
