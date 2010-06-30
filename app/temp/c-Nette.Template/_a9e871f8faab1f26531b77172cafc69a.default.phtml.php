<?php //netteCache[01]000239a:2:{s:4:"time";s:21:"0.80828800 1277833398";s:9:"callbacks";a:1:{i:0;a:3:{i:0;a:2:{i:0;s:5:"Cache";i:1;s:9:"checkFile";}i:1;s:84:"/home/jirka/Omnique/Omnique_shop/document_root/../app/templates/Detail/default.phtml";i:2;i:1277642463;}}}?><?php
// file …/templates/Detail/default.phtml
//

$_cb = LatteMacros::initRuntime($template, NULL, '579a261506'); unset($_extends);


//
// block subheader
//
if (!function_exists($_cb->blocks['subheader'][] = '_cbbaba186b459_subheader')) { function _cbbaba186b459_subheader() { extract(func_get_arg(0))
;echo TemplateHelpers::escapeHtml($sestava->subheader) ;
}}


//
// block subheader_img
//
if (!function_exists($_cb->blocks['subheader_img'][] = '_cbb9976818e53_subheader_img')) { function _cbb9976818e53_subheader_img() { extract(func_get_arg(0))
;echo TemplateHelpers::escapeHtml($basePath) ?>/css/images/<?php echo TemplateHelpers::escapeHtml($typ) ?>_<?php echo TemplateHelpers::escapeHtml($id) ?>_sub.jpg<?php
}}


//
// block content
//
if (!function_exists($_cb->blocks['content'][] = '_cbbccdf6ccdd2_content')) { function _cbbccdf6ccdd2_content() { extract(func_get_arg(0))
?>

<div id="nahled">
<div id="cCont">
	<h3><?php echo TemplateHelpers::escapeHtml($sestava->nazev) ?></h3>
	<img src="<?php echo TemplateHelpers::escapeHtml($basePath) ?>/css/images/<?php echo TemplateHelpers::escapeHtml($sestava->case) ?>" alt="case" width="170px" height="206px" />
	<div class="config">
	  <h4>KOMPONENTY:</h4>
	  <p class="komponenty">
<?php if (isset($komponenty)): foreach ($iterator = $_cb->its[] = new SmartCachingIterator($komponenty) as $komponenta): ?>
           		<?php echo TemplateHelpers::escapeHtml($komponenta->jmeno) ?><br />
<?php endforeach; array_pop($_cb->its); $iterator = end($_cb->its) ;endif ?>
      </p>
     
<div id="button-box">
                <div class="price-nahledCont">
      <div class="price-nahledDPH">S DPH</div>
      <div class="price-nahledPrice"><?php echo TemplateHelpers::escapeHtml($template->number($sestava->cena*$dph, 0, ',', ' ')) ?>, - Kč</div></div>
      <div class="price-nahledCont">
      <div class="price-nahledNoDPH">bez DPH</div>
      <div class="price-nahledNoDPHprice"><?php echo TemplateHelpers::escapeHtml($template->number($sestava->cena, 0, ',', ' ')) ?>, - Kč</div></div>
      <a href="<?php echo TemplateHelpers::escapeHtml($control->link("Objednavka:konfigurace", array('typ' => $typ,'id' => $id))) ?>"><span class="button-green nahled-button-margin-top ">konfiguruj</span></a>
      <a href="gaming/experienced_gamer"><span class="button-grey-mini button-mini-left nahled-button-margin-top">koupit</span></a></div>

     
    </div>
         
      <div id="split-cont">
      <div class="box">  <img src="../../css/images/ico_footer_17.png" alt="ico" /> <h4>gagaga</h4>
       <ul>
        <li>gaga ga</li>
       </ul>
      </div>
      <div class="box split-line-nahled">
       <img src="../../css/images/ico_footer_17.png" alt="ico" /> <h4>gagaga</h4>
       <ul>
        <li>gaga ga</li>
       </ul>
       </div>
      <div class="box split-line-nahled">
        <img src="../../css/images/ico_footer_17.png" alt="ico" /> <h4>gagaga</h4>
       <ul>
        <li>gaga ga</li>
       </ul>
        </div>
      <div class="box split-line-nahled">  <img src="../../css/images/ico_footer_17.png" alt="ico" /><h4>gagaga</h4>
       <ul>
        <li>gaga ga</li>
       </ul>
      </div>
      </div>
      <div class="split-nahled"></div>
    <div id="nahledCont">
     <h5>POPIS:</h5>
	 <p>
	 	<?php echo $sestava->popis_o ?>

     </p>
    </div>
    <div id="nahled-description">  <h5>POPIS:</h5>
     <p>
     	<?php echo $sestava->popis_pro ?>

     </p>
     <div class="split"></div>
     </div>
    </div>
      <div id="sidebarCont">
      	<div class="resolutionTXT">určeno pro rozlišení do:</div>
      	<div class="resolution">1280 x 1024</div>
        <div class="barTXT">lorem ipsum dor:</div>
        	<div class="bar">
        		<img src="#" alt="#" id="gaming<?php echo TemplateHelpers::escapeHtml($sestava->bar_game) ?>" />
            	<div class="INbarTXT">GAMING:</div>
        	</div>
        	<div class="bar">
            	<img src="#" alt="#" id="profi<?php echo TemplateHelpers::escapeHtml($sestava->bar_pro) ?>" />
                <div class="INbarTXT">PROFI:</div>
            </div>
        	<div class="bar">
            	<img src="#" alt="#" id="office<?php echo TemplateHelpers::escapeHtml($sestava->bar_office) ?>" />
            	<div class="INbarTXT">OFFICE:</div>
            </div>
        	<div class="bar">
            	<img src="#" alt="#" id="home<?php echo TemplateHelpers::escapeHtml($sestava->bar_home) ?>" />
                <div class="INbarTXT">HOME:</div>
            </div>
            <div class="barTXT"><?php echo TemplateHelpers::escapeHtml($sestava->sidebar) ?></div>
      </div>
</div><?php
}}

//
// end of blocks
//

if ($_cb->extends) { ob_start(); }

if (SnippetHelper::$outputAllowed) {
if (!$_cb->extends) { call_user_func(reset($_cb->blocks['subheader']), get_defined_vars()); } ?>

<?php if (!$_cb->extends) { call_user_func(reset($_cb->blocks['subheader_img']), get_defined_vars()); } ?>

<?php if (!$_cb->extends) { call_user_func(reset($_cb->blocks['content']), get_defined_vars()); }  
}

if ($_cb->extends) { ob_end_clean(); LatteMacros::includeTemplate($_cb->extends, get_defined_vars(), $template)->render(); }
