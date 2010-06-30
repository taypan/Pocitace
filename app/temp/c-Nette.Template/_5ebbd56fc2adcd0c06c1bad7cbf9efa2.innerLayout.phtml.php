<?php //netteCache[01]000247a:2:{s:4:"time";s:21:"0.04055400 1277895568";s:9:"callbacks";a:1:{i:0;a:3:{i:0;a:2:{i:0;s:5:"Cache";i:1;s:9:"checkFile";}i:1;s:92:"/home/jirka/Omnique/Omnique_shop/document_root/../app/templates/Objednavka/innerLayout.phtml";i:2;i:1277895562;}}}?><?php
// file …/templates/Objednavka/innerLayout.phtml
//

$_cb = LatteMacros::initRuntime($template, true, 'f2ec7ce899'); unset($_extends);


//
// block buttonZrusit
//
if (!function_exists($_cb->blocks['buttonZrusit'][] = '_cbbda55fb63f6_buttonZrusit')) { function _cbbda55fb63f6_buttonZrusit() { extract(func_get_arg(0))
?>
<a onClick="if(confirm('Opravdu?')) location.href = <?php echo TemplateHelpers::escapeHtmlJs($control->link("cancel!")) ?>;">
<span class="button-grey-mini button-mini-right">Zrušit</span>
</a>
<?php
}}


//
// block sidebar
//
if (!function_exists($_cb->blocks['sidebar'][] = '_cbbb526b8da3c_sidebar')) { function _cbbb526b8da3c_sidebar() { extract(func_get_arg(0))
?>
<div id="sidebar-config-small">
<div class="side-config">Aktuální cena</div>
 <div class="price-nahledCont">
      <div class="price-nahledDPH">S DPH</div>
      <div class="price-nahledPrice">25 000, - Kč</div></div>
      <div class="price-nahledCont">
      <div class="price-nahledNoDPH">bez DPH</div>
      <div class="price-nahledNoDPHprice">25 000, - Kč</div></div></div>
<div id="sidebar-config">
<div class="side-config">Aktuální konfigurace:</div>
<ul>
<?php foreach ($iterator = $_cb->its[] = new SmartCachingIterator($sideitems) as $sideitem): ?>
<li><?php echo TemplateHelpers::escapeHtml($sideitem) ?></li>
<?php endforeach; array_pop($_cb->its); $iterator = end($_cb->its) ?>
</ul>
<div id="dovoz-cont">+ dovoz</div>
</div>	
<?php
}}


//
// block content
//
if (!function_exists($_cb->blocks['content'][] = '_cbb7543b5e31d_content')) { function _cbb7543b5e31d_content() { extract(func_get_arg(0))
?>
<div id="nahled">
<h3 class="prubeh">Průběh objednávky - <?php echo TemplateHelpers::escapeHtml($step) ?> - <?php echo TemplateHelpers::escapeHtml($currstep) ?></h3>
<a href="<?php echo TemplateHelpers::escapeHtml($control->link("Objednavka:Konfigurace", array('typ' => $typ,'id' => $id))) ?>"><span class="<?php try { $presenter->link("Objednavka:konfigurace"); } catch (InvalidLinkException $e) {}; if ($presenter->getLastCreatedRequestFlag("current")): ?>button-postup-green<?php else: ?>button-postup-grey<?php endif ?> button-postup-left">Konfigurace</span></a>
<a href="<?php echo TemplateHelpers::escapeHtml($control->link("Objednavka:Kosik", array('typ' => $typ,'id' => $id))) ?>"><span class="<?php try { $presenter->link("Objednavka:kosik"); } catch (InvalidLinkException $e) {}; if ($presenter->getLastCreatedRequestFlag("current")): ?>button-postup-green<?php else: ?>button-postup-grey<?php endif ?>">Košík</span></a>
<a href="<?php echo TemplateHelpers::escapeHtml($control->link("Objednavka:Doprava", array('typ' => $typ,'id' => $id))) ?>"><span class="<?php try { $presenter->link("Objednavka:doprava"); } catch (InvalidLinkException $e) {}; if ($presenter->getLastCreatedRequestFlag("current")): ?>button-postup-green<?php else: ?>button-postup-grey<?php endif ?>">Doprava</span></a>	
<a href="<?php echo TemplateHelpers::escapeHtml($control->link("Objednavka:Podminky", array('typ' => $typ,'id' => $id))) ?>"><span class="<?php try { $presenter->link("Objednavka:podminky"); } catch (InvalidLinkException $e) {}; if ($presenter->getLastCreatedRequestFlag("current")): ?>button-postup-green<?php else: ?>button-postup-grey<?php endif ?>">Podmínky</span></a>	
<a href="<?php echo TemplateHelpers::escapeHtml($control->link("Objednavka:Potvrzeni", array('typ' => $typ,'id' => $id))) ?>"><span class="<?php try { $presenter->link("Objednavka:potvrzeni"); } catch (InvalidLinkException $e) {}; if ($presenter->getLastCreatedRequestFlag("current")): ?>button-postup-green<?php else: ?>button-postup-grey<?php endif ?>">Potvrzení</span></a>	
<a href="<?php echo TemplateHelpers::escapeHtml($control->link("Objednavka:Zaver", array('typ' => $typ,'id' => $id))) ?>"><span class="<?php try { $presenter->link("Objednavka:zaver"); } catch (InvalidLinkException $e) {}; if ($presenter->getLastCreatedRequestFlag("current")): ?>button-postup-green<?php else: ?>button-postup-grey<?php endif ?>">Závěr</span></a>	
<?php LatteMacros::callBlock($_cb->blocks, 'obsah', get_defined_vars()) ?>
</div><?php
}}

//
// end of blocks
//

if ($_cb->extends) { ob_start(); }

if (SnippetHelper::$outputAllowed) {
$_cb->extends = "../@layout.phtml"  ?>

<?php
}

if ($_cb->extends) { ob_end_clean(); LatteMacros::includeTemplate($_cb->extends, get_defined_vars(), $template)->render(); }
