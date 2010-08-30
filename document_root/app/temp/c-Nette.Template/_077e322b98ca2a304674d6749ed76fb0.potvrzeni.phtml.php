<?php //netteCache[01]000242a:2:{s:4:"time";s:21:"0.94222600 1283188630";s:9:"callbacks";a:1:{i:0;a:3:{i:0;a:2:{i:0;s:5:"Cache";i:1;s:9:"checkFile";}i:1;s:87:"/home/jirka/Omnique/Omnique_shop/document_root/app/templates/Objednavka/potvrzeni.phtml";i:2;i:1279300120;}}}?><?php
// file …/templates/Objednavka/potvrzeni.phtml
//

$_cb = LatteMacros::initRuntime($template, true, '8e22a3e9d7'); unset($_extends);


//
// block obsah
//
if (!function_exists($_cb->blocks['obsah'][] = '_cbbde5f6e53bf_obsah')) { function _cbbde5f6e53bf_obsah() { extract(func_get_arg(0))
?>
<div id="zuctovani-cont">
    <h3>EXPERIENCED GAMER</h3>
    <img src="<?php echo TemplateHelpers::escapeHtml($basePath) ?>/css/images/<?php echo TemplateHelpers::escapeHtml($sestava->case) ?>" alt="case" width="170px" height="206px" />
    <div class="config zuctovani">
        <h4>KOMPONENTY:</h4>
        <p class="komponenty">
<?php foreach ($iterator = $_cb->its[] = new SmartCachingIterator($sideitems) as $sideitem): ?>
        <?php echo TemplateHelpers::escapeHtml($sideitem) ?>

        </br>
<?php endforeach; array_pop($_cb->its); $iterator = end($_cb->its) ?>
    </p>
</div>
<div class="config zuctovani">
    <h4>VOLITELNÉ SOUČÁSTI:</h4>
    <p class="komponenty">
    </p>
</div>
<div class="config zuctovani">
    <h4>DOPRAVA:</h4>
    <p>
        <?php echo TemplateHelpers::escapeHtml($doprava) ?>

    </p>
    <br/>
    <br/>
    <br/>
    <h4>PLATBA:</h4>
    <p>
        <?php echo TemplateHelpers::escapeHtml($platba) ?>

        <br/>
    </p>
</div>
<div id="zuctovani-end">
    <div class="price-nahledCont">
        <div class="price-nahledDPH">
            S DPH
        </div>
        <div class="price-nahledPrice">
            <?php echo TemplateHelpers::escapeHtml($template->number($cena*$dph+$doprava_cena*$dph, 0, ',', ' ')) ?>, - Kč
        </div>
    </div>
    <div class="price-nahledCont">
        <div class="price-nahledNoDPH">
            bez DPH
        </div>
        <div class="price-nahledNoDPHprice">
            <?php echo TemplateHelpers::escapeHtml($template->number($cena+$doprava_cena, 0, ',', ' ')) ?>, - Kč
        </div>
    </div>
    <div style="margin-top:50px">
<?php LatteMacros::callBlock($_cb->blocks, 'buttonZrusit', get_defined_vars()) ?>
		<a href="<?php echo TemplateHelpers::escapeHtml($control->link("confirm!")) ?>"><span class="button-green nahled-button">koupit</span></a>
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
$_cb->extends = "innerLayout.phtml" ; 
}

if ($_cb->extends) { ob_end_clean(); LatteMacros::includeTemplate($_cb->extends, get_defined_vars(), $template)->render(); }
