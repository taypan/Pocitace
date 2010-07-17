<?php //netteCache[01]000238a:2:{s:4:"time";s:21:"0.58715700 1279297500";s:9:"callbacks";a:1:{i:0;a:3:{i:0;a:2:{i:0;s:5:"Cache";i:1;s:9:"checkFile";}i:1;s:83:"/home/jirka/Omnique/Omnique_shop/document_root/../app/templates/Login/default.phtml";i:2;i:1279297498;}}}?><?php
// file …/templates/Login/default.phtml
//

$_cb = LatteMacros::initRuntime($template, NULL, '5e40a9e489'); unset($_extends);


//
// block content
//
if (!function_exists($_cb->blocks['content'][] = '_cbb8c63816a51_content')) { function _cbb8c63816a51_content() { extract(func_get_arg(0))
?>

<p>PŘIHLÁŠENÍ:</p>
<?php echo TemplateHelpers::escapeHtml($form->render('begin')) ?>

<?php foreach ($iterator = $_cb->its[] = new SmartCachingIterator($flashes) as $flash): ?>
<div class="flash <?php echo TemplateHelpers::escapeHtml($flash->type) ?>"><?php echo TemplateHelpers::escapeHtml($flash->message) ?></div>
<?php endforeach; array_pop($_cb->its); $iterator = end($_cb->its) ?>
<div style="position:absolute;top:345px"><?php echo TemplateHelpers::escapeHtml($form->render('errors')) ?></div>
<div class="loginBox"><?php echo $form['username']->label ?> <?php echo $form['username']->control ?></div>
<div class="loginBox"><?php echo $form['password']->label ?> <?php echo $form['password']->control ?></div>
<a onclick="submit();"><span class="button-green-mini button-mini-left-margin"><?php echo TemplateHelpers::escapeHtml($form['login']->control) ?></span></a>
<a href="<?php echo TemplateHelpers::escapeHtml($control->link("Registrace:default")) ?>"><span class="button-grey-mini">registrace</span></a>
<a href="gaming/experienced_gamer" id="lostPWD">Zapoměli jste heslo?</a>
<?php echo TemplateHelpers::escapeHtml($form->render('end')) ;
}}

//
// end of blocks
//

if ($_cb->extends) { ob_start(); }

if (SnippetHelper::$outputAllowed) {
extract(array('robots' =>'noindex')) ?> <?php if (!$_cb->extends) { call_user_func(reset($_cb->blocks['content']), get_defined_vars()); }  
}

if ($_cb->extends) { ob_end_clean(); LatteMacros::includeTemplate($_cb->extends, get_defined_vars(), $template)->render(); }
