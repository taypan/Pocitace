<?php //netteCache[01]000244a:2:{s:4:"time";s:21:"0.16992300 1283102217";s:9:"callbacks";a:1:{i:0;a:3:{i:0;a:2:{i:0;s:5:"Cache";i:1;s:9:"checkFile";}i:1;s:89:"/home/jirka/Omnique/Omnique_shop/document_root/app/templates/Objednavka/innerLayout.phtml";i:2;i:1279794668;}}}?><?php
// file …/templates/Objednavka/innerLayout.phtml
//

$_cb = LatteMacros::initRuntime($template, true, '94fafbd443'); unset($_extends);


//
// block subheader_img
//
if (!function_exists($_cb->blocks['subheader_img'][] = '_cbb4b69dcf205_subheader_img')) { function _cbb4b69dcf205_subheader_img() { extract(func_get_arg(0))
;echo TemplateHelpers::escapeHtml($basePath) ?>/css/images/<?php echo TemplateHelpers::escapeHtml($typ) ?>_<?php echo TemplateHelpers::escapeHtml($id) ?>_sub.jpg<?php
}}


//
// block buttonZrusit
//
if (!function_exists($_cb->blocks['buttonZrusit'][] = '_cbb600cf97eea_buttonZrusit')) { function _cbb600cf97eea_buttonZrusit() { extract(func_get_arg(0))
?>
<a onClick="if(confirm('Opravdu nezvratně odstranit věškeré informace o  objednávce?')) location.href = <?php echo TemplateHelpers::escapeHtmlJs($control->link("cancel!")) ?>;">
<span class="button-grey-mini button-mini-right">zrušit</span>
</a>
<?php
}}


//
// block sidebar
//
if (!function_exists($_cb->blocks['sidebar'][] = '_cbbd8d97564f5_sidebar')) { function _cbbd8d97564f5_sidebar() { extract(func_get_arg(0))
?>
<div id="sidebar-config-float">
<div id="sidebar-config-small">
<div class="side-config">Aktuální cena</div>
 <div class="price-nahledCont">
      <div class="price-nahledDPH">S DPH</div>
      <div class="price-nahledPrice" id="price-nahledPrice"><?php echo TemplateHelpers::escapeHtml($template->number($cena*$dph, 0, ',', ' ')) ?>, - Kč</div></div>
      <div class="price-nahledCont">
      <div class="price-nahledNoDPH">bez DPH</div>
      <div class="price-nahledNoDPHprice" id="price-nahledNoDPHprice"><?php echo TemplateHelpers::escapeHtml($template->number($cena, 0, ',', ' ')) ?>, - Kč</div></div>
      </div>
<div id="sidebar-config">
<div class="side-config">Aktuální konfigurace:</div>
<ul id="side-config-detail">
                            <li id="side-config-detail-default">
                                Počítač: <span class="side-config-detail-value">25 000</span>,- Kč
                            </li>
                        </ul>
<ul>
<?php if (isset($sideitems)): foreach ($iterator = $_cb->its[] = new SmartCachingIterator($sideitems) as $sideitem): ?>
<li><?php echo TemplateHelpers::escapeHtml($sideitem) ?></li>
<?php endforeach; array_pop($_cb->its); $iterator = end($_cb->its) ;endif ?>
</ul>
<div id="dovoz-cont">+ dovoz</div>
</div>
</div>
<?php
}}


//
// block content
//
if (!function_exists($_cb->blocks['content'][] = '_cbb745f15d4ed_content')) { function _cbb745f15d4ed_content() { extract(func_get_arg(0))
?>
<div id="nahled">
<h3 class="prubeh">Průběh objednávky - <?php echo TemplateHelpers::escapeHtml($currstep) ?>/6</h3>

<a href="<?php echo TemplateHelpers::escapeHtml($control->link("Objednavka:Konfigurace", array('typ' => $typ,'id' => $id))) ?>"><span class="<?php try { $presenter->link("Objednavka:konfigurace"); } catch (InvalidLinkException $e) {}; if ($presenter->getLastCreatedRequestFlag("current")): ?>button-postup-green<?php else: ?>button-postup-grey<?php endif ?> button-postup-left">Konfigurace</span></a>
<a href="<?php echo TemplateHelpers::escapeHtml($control->link("Objednavka:Doprava", array('typ' => $typ,'id' => $id))) ?>"><span class="<?php try { $presenter->link("Objednavka:doprava"); } catch (InvalidLinkException $e) {}; if ($presenter->getLastCreatedRequestFlag("current")): ?>button-postup-green<?php else: ?>button-postup-grey<?php endif ?>">Doprava</span></a>
<a href="<?php echo TemplateHelpers::escapeHtml($control->link("Objednavka:Kosik", array('typ' => $typ,'id' => $id))) ?>"><span class="<?php try { $presenter->link("Objednavka:kosik"); } catch (InvalidLinkException $e) {}; if ($presenter->getLastCreatedRequestFlag("current")): ?>button-postup-green<?php else: ?>button-postup-grey<?php endif ?>">Košík</span></a>	
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
if (!$_cb->extends) { call_user_func(reset($_cb->blocks['subheader_img']), get_defined_vars()); } ?>

<?php $_cb->extends = "../@layout.phtml"  ?>

<?php
}

if ($_cb->extends) { ob_end_clean(); LatteMacros::includeTemplate($_cb->extends, get_defined_vars(), $template)->render(); }
