<?php //netteCache[01]000241a:2:{s:4:"time";s:21:"0.31891400 1277831461";s:9:"callbacks";a:1:{i:0;a:3:{i:0;a:2:{i:0;s:5:"Cache";i:1;s:9:"checkFile";}i:1;s:86:"/home/jirka/Omnique/Omnique_shop/document_root/../app/templates/Objednavka/kosik.phtml";i:2;i:1277831459;}}}?><?php
// file …/templates/Objednavka/kosik.phtml
//

$_cb = LatteMacros::initRuntime($template, true, 'c3fbcdb31c'); unset($_extends);


//
// block obsah
//
if (!function_exists($_cb->blocks['obsah'][] = '_cbbb7fe157244_obsah')) { function _cbbb7fe157244_obsah() { extract(func_get_arg(0))
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
<div class="check"><input type="checkbox" /></div>
<div class="name padding-top">asdasdasdasd</div>
<div class="pocet padding-top">999</div>
<div class="datum padding-top">12.12. 2012</div>
<div class="cena-bez-dph padding-top">999 999 Kč</div>
<div class="cena-s-dph padding-top">195 185 Kč</div>
<div class="celkem padding-top">195 185 Kč</div>

<div class="check"><input type="checkbox" /></div>
<div class="name padding-top">asdasdasdasd</div>
<div class="pocet padding-top">999</div>
<div class="datum padding-top">12.12. 2012</div>
<div class="cena-bez-dph padding-top">999 999 Kč</div>
<div class="cena-s-dph padding-top">195 185 Kč</div>
<div class="celkem padding-top">195 185 Kč</div>

<div class="check"><input type="checkbox" /></div>
<div class="name padding-top">asdasdasdasd</div>
<div class="pocet padding-top">999</div>
<div class="datum padding-top">12.12. 2012</div>
<div class="cena-bez-dph padding-top">999 999 Kč</div>
<div class="cena-s-dph padding-top">195 185 Kč</div>
<div class="celkem padding-top">195 185 Kč</div>
</div>


 
<div id="button-line-kosik">
<a href="#"><span class="button-grey-mini button-mini-left">smazat</span></a>

</div>

<div id="not-logged-cont">Nejste přihlášen/a. Prosím <a href="login.html">přihlaste se</a> nebo vyplňte kontaktní údaje</div>
<div class="split"></div>

<form action="vars.php" method="post" class="niceform" target="_blank">

	<div class="formCont">
    
    <h3>Osobní</h3>
   <div class="formContText"><div class="hvezda"></div><div class="formPopis">Jméno:</div> <input type="text" class="inp" name="textinput" size="12" /></div><br /><br /><br />
    <div class="formContText"><div class="hvezda"></div><div class="formPopis">Příjmení:</div> <input type="text" class="inp" name="textinput" size="12" /></div><br /><br /><br />
    
      <h3>Adresa</h3>
   <div class="formContText"><div class="hvezda"></div><div class="formPopis">Ulice:</div> <input type="text" class="inp" name="textinput" size="12" /></div><br /><br /><br />
    <div class="formContText"><div class="hvezda"></div><div class="formPopis">Město:</div> <input type="text" class="inp" name="textinput" size="12" /></div><br /><br /><br />
     <div class="formContText"><div class="hvezda"></div><div class="formPopis">Čp:</div> <input type="text" class="inp" name="textinput" size="12" /></div><br /><br /><br />
     
           <h3>Doručovací adresa</h3>
   <div class="formContText"><div class="hvezda"></div><div class="formPopis">Ulice:</div> <input type="text" class="inp" name="textinput" size="12" /></div><br /><br /><br />
    <div class="formContText"><div class="hvezda"></div><div class="formPopis">Město:</div> <input type="text" class="inp" name="textinput" size="12" /></div><br /><br /><br />
     <div class="formContText"><div class="hvezda"></div><div class="formPopis">Čp:</div> <input type="text" class="inp" name="textinput" size="12" /></div><br /><br /><br />
     
 </div> 
 <div class="formCont">
 <h3>Způsob platby</h3>

 <input type="radio" name="radioSet" id="option1" value="prevod" checked="checked" /><label for="option1">převodem</label><br /><br /><br />
	<input type="radio" name="radioSet" id="option2" value="hotovost" /><label for="option2">hotovost</label><br /><br /><br />
    

 <h3>Doprava</h3>
 <input type="radio" name="radioSet2" id="option3" value="ceska posta" checked="checked" /><label for="option3">Česká pošta</label><br /><br /><br />
	<input type="radio" name="radioSet2" id="option4" value="ppl" /><label for="option4">PPL</label><br /><br /><br />
 </div>  
</form>

<div id="button-line">



<a href="#"><span class="button-green-mini button-mini-right">koupit</span></a>
<a href="#"><span class="button-grey-mini button-mini-right">koupit</span></a>
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
