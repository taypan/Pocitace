<?php //netteCache[01]000240a:2:{s:4:"time";s:21:"0.12193400 1277833397";s:9:"callbacks";a:1:{i:0;a:3:{i:0;a:2:{i:0;s:5:"Cache";i:1;s:9:"checkFile";}i:1;s:85:"/home/jirka/Omnique/Omnique_shop/document_root/../app/templates/Sestavy/default.phtml";i:2;i:1277572509;}}}?><?php
// file …/templates/Sestavy/default.phtml
//

$_cb = LatteMacros::initRuntime($template, NULL, '42b5249a58'); unset($_extends);


//
// block item
//
if (!function_exists($_cb->blocks['item'][] = '_cbb39cb89bcfb_item')) { function _cbb39cb89bcfb_item() { extract(func_get_arg(0))
?>
<div id="pc<?php echo TemplateHelpers::escapeHtml($i) ?>">
    <a href="<?php echo TemplateHelpers::escapeHtml($control->link("Detail:", array('typ' => $typ, 'id' => $i))) ?>"><img id="nopadding" src="<?php echo TemplateHelpers::escapeHtml($basePath) ?>/images/<?php echo TemplateHelpers::escapeHtml($typ) ?>_0<?php echo TemplateHelpers::escapeHtml($i) ?>.jpg" alt="" width="247" height="174" /></a><a href="<?php echo TemplateHelpers::escapeHtml($control->link("Detail:", array('typ' => $typ, 'id' => $i))) ?>" class="nazev"><?php if (isset($sestavy[$i]->nazev)): ?>

        <?php echo TemplateHelpers::escapeHtml($sestavy[$i]->nazev) ?>

        <?php endif ?></a>
    <p>
<?php if (isset($komponenty[$i])): foreach ($iterator = $_cb->its[] = new SmartCachingIterator($komponenty[$i]) as $komponenta): ?>
        <?php echo TemplateHelpers::escapeHtml($komponenta->jmeno) ?>

        <br/>
<?php endforeach; array_pop($_cb->its); $iterator = end($_cb->its) ;endif ?>
    </p>
    <div class="priceLeft">
    </div>
    <div class="priceBody">
<?php if (isset($sestavy[$i]->cena)): ?>
        <?php echo TemplateHelpers::escapeHtml($template->number($sestavy[$i]->cena*$dph, 0, ',', ' ')) ?>

        <?php endif ?> s dph
    </div>
    <a href="<?php echo TemplateHelpers::escapeHtml($control->link("Detail:", array('typ' => $typ, 'id' => $i))) ?>"><span class="button-<?php echo TemplateHelpers::escapeHtml($color) ?>">konfiguruj</span></a>
</div>
<?php
}}


//
// block content
//
if (!function_exists($_cb->blocks['content'][] = '_cbba7f6922f56_content')) { function _cbba7f6922f56_content() { extract(func_get_arg(0))
?>
<div id="zbozi">
<?php foreach ($iterator = $_cb->its[] = new SmartCachingIterator($iterace) as $i): call_user_func(reset($_cb->blocks['item']), get_defined_vars()) ;endforeach; array_pop($_cb->its); $iterator = end($_cb->its) ?>
</div>
<?php
}}

//
// end of blocks
//

if ($_cb->extends) { ob_start(); }

if (SnippetHelper::$outputAllowed) {
if (!$_cb->extends) { call_user_func(reset($_cb->blocks['item']), get_defined_vars()); }  if (!$_cb->extends) { call_user_func(reset($_cb->blocks['content']), get_defined_vars()); }  
}

if ($_cb->extends) { ob_end_clean(); LatteMacros::includeTemplate($_cb->extends, get_defined_vars(), $template)->render(); }
