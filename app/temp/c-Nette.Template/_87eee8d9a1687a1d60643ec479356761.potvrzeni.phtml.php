<?php //netteCache[01]000245a:2:{s:4:"time";s:21:"0.60664500 1277894826";s:9:"callbacks";a:1:{i:0;a:3:{i:0;a:2:{i:0;s:5:"Cache";i:1;s:9:"checkFile";}i:1;s:90:"/home/jirka/Omnique/Omnique_shop/document_root/../app/templates/Objednavka/potvrzeni.phtml";i:2;i:1277894825;}}}?><?php
// file …/templates/Objednavka/potvrzeni.phtml
//

$_cb = LatteMacros::initRuntime($template, true, '792021b056'); unset($_extends);


//
// block obsah
//
if (!function_exists($_cb->blocks['obsah'][] = '_cbb3c5c20e6d2_obsah')) { function _cbb3c5c20e6d2_obsah() { extract(func_get_arg(0))
?>

<div id="zuctovani-cont">
	<h3>EXPERIENCED GAMER</h3>
	<img src="http://pocitace.omnique.cz/css/images/c310_sub.jpg" alt="case" width="170px" height="206px" />
	<div class="config zuctovani">
	  <h4>KOMPONENTY:</h4>
	  <p class="komponenty">
<?php foreach ($iterator = $_cb->its[] = new SmartCachingIterator($sideitems) as $sideitem): ?>
			<?php echo TemplateHelpers::escapeHtml($sideitem) ?></br>
<?php endforeach; array_pop($_cb->its); $iterator = end($_cb->its) ?>
      </p>
     


     
    </div>
      <div class="config zuctovani">
	  <h4>VOLITELNÉ SOUČÁSTI:</h4>
	  <p class="komponenty">
	    AMD Phenom II X4 925
	    <br />Single ATI HD5770 1GB
	    <br /> Asus M4A79XTD EVO 790X
	    <br />Kingston DIMM 4096MB DDR III 1600MHz
	    <br /> Samsung SpinPoint F3 - 1TB
	    <br />CoolerMaster Elite
	    <br />Zalman CU Cooler 
	    <br /> PSU Seasonic 80+
      </p>
     



     
    </div>
    <div class="config zuctovani">
     <h4>DOPRAVA:</h4>
	 <p> 
	    <?php echo TemplateHelpers::escapeHtml($doprava) ?>

	    </p>
	    <br /><br /> <br />

      
	
	  <h4>PLATBA:</h4>
	    
	    <p>
	      <?php echo TemplateHelpers::escapeHtml($platba) ?>

	      <br />
	    </p>
	 
     



     
    </div>
  
    
  <div id="zuctovani-end"> 
             

         <div class="price-nahledCont">
      <div class="price-nahledDPH">S DPH</div>
      <div class="price-nahledPrice">25 000, - Kč</div></div>
      <div class="price-nahledCont">
      <div class="price-nahledNoDPH">bez DPH</div>
      <div class="price-nahledNoDPHprice">25 000, - Kč</div></div>      <a href="gaming/experienced_gamer"><span class="button-green nahled-button-margin-top zuctovani-button">konfiguruj</span></a>
      <a href="gaming/experienced_gamer"><span class="button-grey-mini button-mini-left nahled-button-margin-top">koupit</span></a></div>
    
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
