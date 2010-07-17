<?php //netteCache[01]000241a:2:{s:4:"time";s:21:"0.27930200 1279299628";s:9:"callbacks";a:1:{i:0;a:3:{i:0;a:2:{i:0;s:5:"Cache";i:1;s:9:"checkFile";}i:1;s:86:"/home/jirka/Omnique/Omnique_shop/document_root/../app/templates/Objednavka/kosik.phtml";i:2;i:1279299626;}}}?><?php
// file …/templates/Objednavka/kosik.phtml
//

$_cb = LatteMacros::initRuntime($template, true, 'c00e84ecd7'); unset($_extends);


//
// block obsah
//
if (!function_exists($_cb->blocks['obsah'][] = '_cbbc8456433fc_obsah')) { function _cbbc8456433fc_obsah() { extract(func_get_arg(0))
?>

<div id="kosik-table">
<div id="kosik-table-header">
<div class="check"></div>
<div class="name">
  <h3>jméno produktu</h3></div>
<div class="pocet">
  <h3>Počet</h3></div>
<div class="datum">
  <h3>Datum dodání</h3></div>
<div class="cena-bez-dph">
  <h3>Cena bez DPH</h3></div>
<div class="cena-s-dph">
  <h3>Cena s DPH</h3></div>
<div class="celkem">
  <h3>Celkem</h3></div>
</div>

<div class="check"><input type="checkbox"/></div>
<div class="name padding-top"><?php echo TemplateHelpers::escapeHtml($sestava->nazev) ?></div>
<div class="pocet padding-top">1</div>
<div class="datum padding-top"><?php echo TemplateHelpers::escapeHtml($datum) ?></div>
<div class="cena-bez-dph padding-top"><?php echo TemplateHelpers::escapeHtml($template->number($cena, 0, ',', ' ')) ?>, - Kč</div>
<div class="cena-s-dph padding-top"><?php echo TemplateHelpers::escapeHtml($template->number($cena*$dph, 0, ',', ' ')) ?>, - Kč</div>
<div class="celkem padding-top"><?php echo TemplateHelpers::escapeHtml($template->number($cena*$dph, 0, ',', ' ')) ?>, - Kč</div>

<div class="check"><input type="checkbox"/></div>
<div class="name padding-top">Doprava - <?php echo TemplateHelpers::escapeHtml($doprava) ?></div>
<div class="pocet padding-top">1</div>
<div class="datum padding-top"></div>
<div class="cena-bez-dph padding-top"><?php echo TemplateHelpers::escapeHtml($template->number($doprava_cena, 0, ',', ' ')) ?>, - Kč</div>
<div class="cena-s-dph padding-top"><?php echo TemplateHelpers::escapeHtml($template->number($doprava_cena*$dph, 0, ',', ' ')) ?>, - Kč</div>
<div class="celkem padding-top"><?php echo TemplateHelpers::escapeHtml($template->number($doprava_cena*$dph, 0, ',', ' ')) ?>, - Kč</div>

<div class="check"><input type="checkbox"/></div>
<div class="name padding-top">Celkem</div>
<div class="pocet padding-top"></div>
<div class="datum padding-top"></div>
<div class="cena-bez-dph padding-top"><?php echo TemplateHelpers::escapeHtml($template->number($doprava_cena+$cena, 0, ',', ' ')) ?>, - Kč</div>
<div class="cena-s-dph padding-top"><?php echo TemplateHelpers::escapeHtml($template->number($doprava_cena*$dph+$cena*$dph, 0, ',', ' ')) ?>, - Kč</div>
<div class="celkem padding-top"><?php echo TemplateHelpers::escapeHtml($template->number($doprava_cena*$dph+$cena*$dph, 0, ',', ' ')) ?>, - Kč</div>

</div>


 
<div id="button-line-kosik">
<a onClick="if(confirm('Opravdu si přejete odstranit sestavu z objednávky?')) location.href = <?php echo TemplateHelpers::escapeHtmlJs($control->link("cancel!")) ?>;">
<span class="button-grey-mini button-mini-left">smazat</span>
</a>
</div>
<?php if ($user->isAuthenticated()): $control->getWidget("button")->render('begin') ?>
<div id="button-line">
<?php echo TemplateHelpers::escapeHtml($control['button']['done']->control) ?>

<?php LatteMacros::callBlock($_cb->blocks, 'buttonZrusit', get_defined_vars()) ?>
</div>
<?php $control->getWidget("button")->render('end') ;else: $control->getWidget("udaje")->render('begin') ?>
<div id="not-logged-cont">Nejste přihlášen/a. Prosím <a href="login.html">přihlaste se</a> nebo vyplňte kontaktní údaje</div>
<div class="split"></div>


	<div class="formCont">
    
    <h3>Osobní</h3>
   <div class="formContText"><div class="hvezda"></div><div class="formPopis">Jméno:</div> <?php echo TemplateHelpers::escapeHtml($control['udaje']['jmeno']->control) ?></div><br /><br /><br />
    <div class="formContText"><div class="hvezda"></div><div class="formPopis">Příjmení:</div> <?php echo TemplateHelpers::escapeHtml($control['udaje']['prijmeni']->control) ?></div><br /><br /><br />
    <div class="formContText"><div class="hvezda"></div><div class="formPopis">E-mail:</div> <?php echo TemplateHelpers::escapeHtml($control['udaje']['email']->control) ?></div><br /><br /><br />
    
      <h3>Adresa</h3>
   <div class="formContText"><div class="hvezda"></div><div class="formPopis">Ulice:</div> <?php echo TemplateHelpers::escapeHtml($control['udaje']['ulice']->control) ?></div><br /><br /><br />
    <div class="formContText"><div class="hvezda"></div><div class="formPopis">Město:</div> <?php echo TemplateHelpers::escapeHtml($control['udaje']['mesto']->control) ?></div><br /><br /><br />
     <div class="formContText"><div class="hvezda"></div><div class="formPopis">Čp:</div> <?php echo TemplateHelpers::escapeHtml($control['udaje']['cp']->control) ?></div><br /><br /><br />
     <div class="formContText"><div class="hvezda"></div><div class="formPopis">Psč:</div> <?php echo TemplateHelpers::escapeHtml($control['udaje']['psc']->control) ?></div><br /><br /><br />
           <h3>Doručovací adresa*</h3>
           
   <div class="formContText"><div class="hvezda"></div><div class="formPopis">Ulice:</div> <?php echo TemplateHelpers::escapeHtml($control['udaje']['ulice_d']->control) ?></div><br /><br /><br />
    <div class="formContText"><div class="hvezda"></div><div class="formPopis">Město:</div> <?php echo TemplateHelpers::escapeHtml($control['udaje']['mesto_d']->control) ?></div><br /><br /><br />
     <div class="formContText"><div class="hvezda"></div><div class="formPopis">Čp:</div> <?php echo TemplateHelpers::escapeHtml($control['udaje']['cp_d']->control) ?></div><br /><br /><br />
     <div class="formContText"><div class="hvezda"></div><div class="formPopis">Psč:</div> <?php echo TemplateHelpers::escapeHtml($control['udaje']['psc_d']->control) ?></div><br /><br /><br />
     *Pokud je shodná s adresou nemusí být vyplněna
     </div>
<?php $control->getWidget("udaje")->render('validation') ?>


<div id="button-line">
<?php echo TemplateHelpers::escapeHtml($control['udaje']['done']->control) ?>

<?php LatteMacros::callBlock($_cb->blocks, 'buttonZrusit', get_defined_vars()) ?>
</div>
<?php $control->getWidget("udaje")->render('end') ;endif ;
}}

//
// end of blocks
//

if ($_cb->extends) { ob_start(); }

if (SnippetHelper::$outputAllowed) {
$_cb->extends = "innerLayout.phtml" ; 
}

if ($_cb->extends) { ob_end_clean(); LatteMacros::includeTemplate($_cb->extends, get_defined_vars(), $template)->render(); }
