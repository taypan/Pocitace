<?php //netteCache[01]000233a:2:{s:4:"time";s:21:"0.15684100 1277833397";s:9:"callbacks";a:1:{i:0;a:3:{i:0;a:2:{i:0;s:5:"Cache";i:1;s:9:"checkFile";}i:1;s:78:"/home/jirka/Omnique/Omnique_shop/document_root/../app/templates//@layout.phtml";i:2;i:1277638643;}}}?><?php
// file …/templates//@layout.phtml
//

$_cb = LatteMacros::initRuntime($template, NULL, '06d41826d8'); unset($_extends);


//
// block subheader
//
if (!function_exists($_cb->blocks['subheader'][] = '_cbbecda40b00e_subheader')) { function _cbbecda40b00e_subheader() { extract(func_get_arg(0))
;echo TemplateHelpers::escapeHtml($slogan) ;
}}


//
// block subheader_img
//
if (!function_exists($_cb->blocks['subheader_img'][] = '_cbb81ef7d0e21_subheader_img')) { function _cbb81ef7d0e21_subheader_img() { extract(func_get_arg(0))
;echo TemplateHelpers::escapeHtml($basePath) ?>/css/images/<?php echo TemplateHelpers::escapeHtml($typ) ?>_4_sub.jpg<?php
}}

//
// end of blocks
//

if ($_cb->extends) { ob_start(); }

if (SnippetHelper::$outputAllowed) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Language" content="cs" />
	<meta name="Keywords" content="poč&iacute;tače, PC, PC sestavy, sestavy, profesion&aacute;ln&iacute;, hern&iacute;" />
    <meta name="Description" content="Profesion&aacute;ln&iacute; poč&iacute;tače za solidn&iacute; ceny" />
    <meta name='robots' content='all,follow,archive' />
    <meta name='author' content='(c) Omnique' /> 
<title>Počítače Omnique</title>
<link href="<?php echo TemplateHelpers::escapeHtml($basePath) ?>/css/form.css" rel="stylesheet" type="text/css" />
<link href="<?php echo TemplateHelpers::escapeHtml($basePath) ?>/css/style.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" type="text/javascript" src="<?php echo TemplateHelpers::escapeHtml($basePath) ?>/js/form.js"></script>
  <!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="<?php echo TemplateHelpers::escapeHtmlComment($basePath) ?>/css/megamrdka.css">
<![endif]-->
</head>
<body>
<div id="cont">
	<a href="http://pocitace.omnique.cz/"><img src="<?php echo TemplateHelpers::escapeHtml($basePath) ?>/css/images/img_02.png"  alt="omnique" id="logo" /></a>
    <div id="Mcont">
	<a class="menuGAMING" href="#">O NÁS</a>
	<a class="menuGAMING" href="#">NABÍDKA</a>
	<a class="menuGAMING" href="#">KONTAKT</a>
</div>

<div id="login-cont">
<div id="kosik-gaming-link" class="gaming">v <a href="#">košíku</a> máte X položek</div>
<div id="login-link"><?php echo TemplateHelpers::escapeHtml($loginstatus) ?>

</div>
</div>
<div id="subheader">
	<div id="subTXTgaming">
		<h1><?php if (!$_cb->extends) { call_user_func(reset($_cb->blocks['subheader']), get_defined_vars()); } ?></h1>
		<h2>S POČÍTAČI OMNIQUE</h2>
	</div>
	<img src="<?php if (!$_cb->extends) { call_user_func(reset($_cb->blocks['subheader_img']), get_defined_vars()); } ?>" alt="PC" width="328" height="206" id="subPIC" />
</div>
<div id="subMenuCont">
	<a id="<?php try { $presenter->link("Sestavy:", array('typ' =>'game')); } catch (InvalidLinkException $e) {}; if ($presenter->getLastCreatedRequestFlag("current")): ?>sub1<?php else: ?>sub21<?php endif ?>" href="<?php echo TemplateHelpers::escapeHtml($control->link("Sestavy:game")) ?>">GAMING</a>
    <a id="<?php try { $presenter->link("Sestavy:", array('typ' =>'pro')); } catch (InvalidLinkException $e) {}; if ($presenter->getLastCreatedRequestFlag("current")): ?>sub11<?php else: ?>sub2<?php endif ?>" href="<?php echo TemplateHelpers::escapeHtml($control->link("Sestavy:pro")) ?>">PROFI</a>
    <a id="<?php try { $presenter->link("Sestavy:", array('typ' =>'office')); } catch (InvalidLinkException $e) {}; if ($presenter->getLastCreatedRequestFlag("current")): ?>sub11<?php else: ?>sub3<?php endif ?>" href="<?php echo TemplateHelpers::escapeHtml($control->link("Sestavy:office")) ?>">KANCELÁRSKÉ</a>
    <a id="<?php try { $presenter->link("Sestavy:", array('typ' =>'home')); } catch (InvalidLinkException $e) {}; if ($presenter->getLastCreatedRequestFlag("current")): ?>sub11<?php else: ?>sub4<?php endif ?>" href="<?php echo TemplateHelpers::escapeHtml($control->link("Sestavy:home")) ?>">DOMÁCÍ</a>
</div>

<?php foreach ($iterator = $_cb->its[] = new SmartCachingIterator($flashes) as $flash): ?>
<div style="position:absolute;top: 430px;left: 500px;color: white;" class="flash <?php echo TemplateHelpers::escapeHtml($flash->type) ?>"><?php echo TemplateHelpers::escapeHtml($flash->message) ?></div>
<?php endforeach; array_pop($_cb->its); $iterator = end($_cb->its) ;LatteMacros::callBlock($_cb->blocks, 'content', get_defined_vars()) ?>

<div id="footer">


<div class="box left-padding">
 <img src="<?php echo TemplateHelpers::escapeHtml($basePath) ?>/css/images/ico_footer_17.png" alt="ico" />  <h4>nadpis</h4>
  <ul>
   <li>gaga ga</li>
   <li>gaga ga</li>
   <li>gaga ga</li>
   <li>gaga ga</li>
  </ul>
</div>
<div class="box split-line">
<img src="<?php echo TemplateHelpers::escapeHtml($basePath) ?>/css/images/ico_footer_12.png" alt="ico" />  <h4>nadpis</h4>
  <ul>
   <li>gaga ga</li>
   <li>gaga ga</li>
   <li>gaga ga</li>
   <li>gaga ga</li>
  </ul>

</div>
<div class="box split-line">
<img src="<?php echo TemplateHelpers::escapeHtml($basePath) ?>/css/images/ico_footer_14.png" alt="ico" />  <h4>nadpis</h4>
  <ul>
   <li>gaga ga</li>
   <li>gaga ga</li>
   <li>gaga ga</li>
   <li>gaga ga</li>
  </ul>

</div>
<div class="box split-line">
<img src="<?php echo TemplateHelpers::escapeHtml($basePath) ?>/css/images/ico_footer_09.png" alt="ico" />  <h4>nadpis</h4>
  <ul>
   <li>gaga ga</li>
   <li>gaga ga</li>
   <li>gaga ga</li>
   <li>gaga ga</li>
  </ul>

</div>
<a href="#" id="youtube"></a>
<a href="#" id="twitter"></a>
<a href="#" id="facebook"></a>
</div>
<div id="footer-bottom"><input type="image" onclick="support_cs()" src="<?php echo TemplateHelpers::escapeHtml($basePath) ?>/css/images/footer_10.png" class="support" />

<span id="footer-bottom-copyright">copyright © 2010 <a href="#">omnique</a></span>
</div>
</div>




<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-11937981-1");
pageTracker._trackPageview();
} catch(err) {}</script>
</body>
</html><?php
}

if ($_cb->extends) { ob_end_clean(); LatteMacros::includeTemplate($_cb->extends, get_defined_vars(), $template)->render(); }
