<?php //netteCache[01]000243a:2:{s:4:"time";s:21:"0.37450700 1279216350";s:9:"callbacks";a:1:{i:0;a:3:{i:0;a:2:{i:0;s:5:"Cache";i:1;s:9:"checkFile";}i:1;s:88:"/home/jirka/Omnique/Omnique_shop/document_root/../app/templates/Objednavka/doprava.phtml";i:2;i:1278009361;}}}?><?php
// file …/templates/Objednavka/doprava.phtml
//

$_cb = LatteMacros::initRuntime($template, true, '78a9f29c93'); unset($_extends);


//
// block group
//
if (!function_exists($_cb->blocks['group'][] = '_cbb33a7b23139_group')) { function _cbb33a7b23139_group() { extract(func_get_arg(0))
?>
<h3><?php echo TemplateHelpers::escapeHtml($nazev) ?></h3>
       <div class="config-cont-box">
       
            <?php echo TemplateHelpers::escapeHtml($control['doprava'][$druh]->control) ?>

       
        </div>

            
<?php
}}


//
// block obsah
//
if (!function_exists($_cb->blocks['obsah'][] = '_cbb99bc9222a4_obsah')) { function _cbb99bc9222a4_obsah() { extract(func_get_arg(0))
;$control->getWidget("doprava")->render('begin') ?>
 <div id="config-cont" class="niceform">
    

<?php $control->getWidget("doprava")->render('errors') ;call_user_func(reset($_cb->blocks['group']), array('nazev' => 'Doprava','druh' =>'doprava') + get_defined_vars()) ;call_user_func(reset($_cb->blocks['group']), array('nazev' => 'Platba','druh' =>'platby') + get_defined_vars()) ;$control->getWidget("doprava")->render('validation') ?>

</div>
    
<?php LatteMacros::callBlock($_cb->blocks, 'sidebar', get_defined_vars()) ?>

<div id="button-line">
<?php echo TemplateHelpers::escapeHtml($control['doprava']['done']->control) ?>

<?php LatteMacros::callBlock($_cb->blocks, 'buttonZrusit', get_defined_vars()) ?>
</div> 

<?php $control->getWidget("doprava")->render('end') ;
}}

//
// end of blocks
//

if ($_cb->extends) { ob_start(); }

if (SnippetHelper::$outputAllowed) {
$_cb->extends = "innerLayout.phtml" ;  
}

if ($_cb->extends) { ob_end_clean(); LatteMacros::includeTemplate($_cb->extends, get_defined_vars(), $template)->render(); }
