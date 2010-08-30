<?php //netteCache[01]000238a:2:{s:4:"time";s:21:"0.73591000 1283188633";s:9:"callbacks";a:1:{i:0;a:3:{i:0;a:2:{i:0;s:5:"Cache";i:1;s:9:"checkFile";}i:1;s:83:"/home/jirka/Omnique/Omnique_shop/document_root/app/templates/Objednavka/zaver.phtml";i:2;i:1279039421;}}}?><?php
// file …/templates/Objednavka/zaver.phtml
//

$_cb = LatteMacros::initRuntime($template, true, 'c8f7a06d2e'); unset($_extends);


//
// block obsah
//
if (!function_exists($_cb->blocks['obsah'][] = '_cbb4d272596a5_obsah')) { function _cbb4d272596a5_obsah() { extract(func_get_arg(0))
?>

<div id="final-cont">
<h4>Objednávka byla úspěšně dokončena</h4>
<div class="split"></div>
<a href="#">o jejím průběhu vás budeme informovat na e-mail</a>
<div class="split"></div>
<p>Děkujeme za Váš nákup</p>
</div><?php
}}

//
// end of blocks
//

if ($_cb->extends) { ob_start(); }

if (SnippetHelper::$outputAllowed) {
$_cb->extends = "innerLayout.phtml" ; 
}

if ($_cb->extends) { ob_end_clean(); LatteMacros::includeTemplate($_cb->extends, get_defined_vars(), $template)->render(); }
