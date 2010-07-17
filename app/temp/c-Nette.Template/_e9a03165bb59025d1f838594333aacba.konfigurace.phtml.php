<?php //netteCache[01]000247a:2:{s:4:"time";s:21:"0.52377700 1279216345";s:9:"callbacks";a:1:{i:0;a:3:{i:0;a:2:{i:0;s:5:"Cache";i:1;s:9:"checkFile";}i:1;s:92:"/home/jirka/Omnique/Omnique_shop/document_root/../app/templates/Objednavka/konfigurace.phtml";i:2;i:1278004629;}}}?><?php
// file …/templates/Objednavka/konfigurace.phtml
//

$_cb = LatteMacros::initRuntime($template, true, '6ce8871328'); unset($_extends);


//
// block group
//
if (!function_exists($_cb->blocks['group'][] = '_cbb06c5f30c99_group')) { function _cbb06c5f30c99_group() { extract(func_get_arg(0))
;if (isset($control['konfigurator'][$druh])): ?>
<div>
<h3><?php echo TemplateHelpers::escapeHtml($nazev) ?></h3>
       <div class="config-cont-box">
       
            <?php echo TemplateHelpers::escapeHtml($control['konfigurator'][$druh]->control) ?>

       
        </div>
		</div>
<?php endif ;
}}


//
// block obsah
//
if (!function_exists($_cb->blocks['obsah'][] = '_cbbe213cb6a08_obsah')) { function _cbbe213cb6a08_obsah() { extract(func_get_arg(0))
;$control->getWidget("konfigurator")->render('begin') ?>
    <div id="config-cont" class="niceform">
    
<?php $control->getWidget("konfigurator")->render('errors') ;foreach ($iterator = $_cb->its[] = new SmartCachingIterator($druhy) as $druh => $nazev): call_user_func(reset($_cb->blocks['group']), array('nazev' => $nazev,'druh' => $druh) + get_defined_vars()) ;endforeach; array_pop($_cb->its); $iterator = end($_cb->its) ?>
    	
<?php $control->getWidget("konfigurator")->render('validation') ?>
    	
    	
    	
        
    </div>

<?php LatteMacros::callBlock($_cb->blocks, 'sidebar', get_defined_vars()) ?>
<div id="button-line">
<?php echo TemplateHelpers::escapeHtml($control['konfigurator']['done']->control) ?>

<?php LatteMacros::callBlock($_cb->blocks, 'buttonZrusit', get_defined_vars()) ?>
</div> 
<?php $control->getWidget("konfigurator")->render('end') ?>


<?php
}}

//
// end of blocks
//

if ($_cb->extends) { ob_start(); }

if (SnippetHelper::$outputAllowed) {
$_cb->extends = "innerLayout.phtml" ?>



<?php
}

if ($_cb->extends) { ob_end_clean(); LatteMacros::includeTemplate($_cb->extends, get_defined_vars(), $template)->render(); }
