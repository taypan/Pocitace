<?php //netteCache[01]000243a:2:{s:4:"time";s:21:"0.13470200 1279216309";s:9:"callbacks";a:1:{i:0;a:3:{i:0;a:2:{i:0;s:5:"Cache";i:1;s:9:"checkFile";}i:1;s:88:"/home/jirka/Omnique/Omnique_shop/document_root/../app/templates/Registrace/default.phtml";i:2;i:1279024379;}}}?><?php
// file …/templates/Registrace/default.phtml
//

$_cb = LatteMacros::initRuntime($template, NULL, '6b3fc94ce6'); unset($_extends);


//
// block group
//
if (!function_exists($_cb->blocks['group'][] = '_cbbda3f06be94_group')) { function _cbbda3f06be94_group() { extract(func_get_arg(0))
?>
<h3><?php echo TemplateHelpers::escapeHtml($nazev) ?>*</h3>
       <div class="config-cont-box">
       
            <?php echo TemplateHelpers::escapeHtml($control['registrace'][$druh]->control) ?>

       
        </div>

            
<?php
}}


//
// block buttonZrusit
//
if (!function_exists($_cb->blocks['buttonZrusit'][] = '_cbb47100cfbe7_buttonZrusit')) { function _cbb47100cfbe7_buttonZrusit() { extract(func_get_arg(0))
?>
<a onClick="if(confirm('Opravdu odstranit věškeré informace o  objednávce?')) location.href = <?php echo TemplateHelpers::escapeHtmlJs($control->link("Sestavy:default")) ?>;">
<span class="button-grey-mini button-mini-right">zrušit</span>
</a>
<?php
}}


//
// block content
//
if (!function_exists($_cb->blocks['content'][] = '_cbbe57176f346_content')) { function _cbbe57176f346_content() { extract(func_get_arg(0))
?>
<div id="nahled">
<?php $control->getWidget("registrace")->render('begin') ?>



	<div class="formCont">
<?php $control->getWidget("registrace")->render('errors') ?>
    <h3>Osobní</h3>
   <div class="formContText"><div class="hvezda"></div><div class="formPopis">Jméno:</div> <?php echo TemplateHelpers::escapeHtml($control['registrace']['jmeno']->control) ?></div><br /><br /><br />
    <div class="formContText"><div class="hvezda"></div><div class="formPopis">Příjmení:</div> <?php echo TemplateHelpers::escapeHtml($control['registrace']['prijmeni']->control) ?></div><br /><br /><br />
    <div class="formContText"><div class="hvezda"></div><div class="formPopis">E-mail:</div> <?php echo TemplateHelpers::escapeHtml($control['registrace']['email']->control) ?></div><br /><br /><br />
    <div class="formContText"><div class="hvezda"></div><div class="formPopis">Uživ. jméno:</div> <?php echo TemplateHelpers::escapeHtml($control['registrace']['username']->control) ?></div><br /><br /><br />
   <div class="formContText"><div class="hvezda"></div><div class="formPopis">Heslo:</div> <?php echo TemplateHelpers::escapeHtml($control['registrace']['password']->control) ?></div><br /><br /><br />
   <div class="formContText"><div class="hvezda"></div><div class="formPopis">Heslo znovu:</div> <?php echo TemplateHelpers::escapeHtml($control['registrace']['password2']->control) ?></div><br /><br /><br /> 
    
      <h3>Adresa</h3>
   <div class="formContText"><div class="hvezda"></div><div class="formPopis">Ulice:</div> <?php echo TemplateHelpers::escapeHtml($control['registrace']['ulice']->control) ?></div><br /><br /><br />
    <div class="formContText"><div class="hvezda"></div><div class="formPopis">Město:</div> <?php echo TemplateHelpers::escapeHtml($control['registrace']['mesto']->control) ?></div><br /><br /><br />
     <div class="formContText"><div class="hvezda"></div><div class="formPopis">Čp:</div> <?php echo TemplateHelpers::escapeHtml($control['registrace']['cp']->control) ?></div><br /><br /><br />
     <div class="formContText"><div class="hvezda"></div><div class="formPopis">Psč:</div> <?php echo TemplateHelpers::escapeHtml($control['registrace']['psc']->control) ?></div><br /><br /><br />
           <h3>Doručovací adresa*</h3>
           
   <div class="formContText"><div class="hvezda"></div><div class="formPopis">Ulice:</div> <?php echo TemplateHelpers::escapeHtml($control['registrace']['ulice_d']->control) ?></div><br /><br /><br />
    <div class="formContText"><div class="hvezda"></div><div class="formPopis">Město:</div> <?php echo TemplateHelpers::escapeHtml($control['registrace']['mesto_d']->control) ?></div><br /><br /><br />
     <div class="formContText"><div class="hvezda"></div><div class="formPopis">Čp:</div> <?php echo TemplateHelpers::escapeHtml($control['registrace']['cp_d']->control) ?></div><br /><br /><br />
     <div class="formContText"><div class="hvezda"></div><div class="formPopis">Psč:</div> <?php echo TemplateHelpers::escapeHtml($control['registrace']['psc_d']->control) ?></div><br /><br /><br />
     *Pokud je shodná s adresou nemusí být vyplněna
     </div>
     <div class="formCont">
     
<?php call_user_func(reset($_cb->blocks['group']), array('nazev' => 'Způsob platby','druh' =>'platby') + get_defined_vars()) ?>
 *Preferovaný způsob. Později může být změněn.
  </br>
<?php call_user_func(reset($_cb->blocks['group']), array('nazev' => 'Doprava','druh' =>'doprava') + get_defined_vars()) ?>
 *Preferovaný způsob. Později může být změněn.    
 </div> 
<?php $control->getWidget("registrace")->render('validation') ?>


<div id="button-line">
<?php call_user_func(reset($_cb->blocks['buttonZrusit']), get_defined_vars()) ;echo TemplateHelpers::escapeHtml($control['registrace']['done']->control) ?>


</div>
<?php $control->getWidget("registrace")->render('end') ?>
 </div>  
 
 
 
<?php
}}

//
// end of blocks
//

if ($_cb->extends) { ob_start(); }

if (SnippetHelper::$outputAllowed) {
if (!$_cb->extends) { call_user_func(reset($_cb->blocks['group']), get_defined_vars()); } ?>

<?php if (!$_cb->extends) { call_user_func(reset($_cb->blocks['buttonZrusit']), get_defined_vars()); } ?>

<?php if (!$_cb->extends) { call_user_func(reset($_cb->blocks['content']), get_defined_vars()); }  
}

if ($_cb->extends) { ob_end_clean(); LatteMacros::includeTemplate($_cb->extends, get_defined_vars(), $template)->render(); }
