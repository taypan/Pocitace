<?php //netteCache[01]000238a:2:{s:4:"time";s:21:"0.90494800 1277843462";s:9:"callbacks";a:1:{i:0;a:3:{i:0;a:2:{i:0;s:5:"Cache";i:1;s:9:"checkFile";}i:1;s:83:"/home/jirka/Omnique/Omnique_shop/document_root/../app/templates/Login/default.phtml";i:2;i:1277586511;}}}?><?php
// file …/templates/Login/default.phtml
//

$_cb = LatteMacros::initRuntime($template, NULL, '081549dda0'); unset($_extends);


//
// block content
//
if (!function_exists($_cb->blocks['content'][] = '_cbbd024199e5e_content')) { function _cbbd024199e5e_content() { extract(func_get_arg(0))
?>

<p>PŘIHLÁŠENÍ:</p>
<?php echo TemplateHelpers::escapeHtml($form->render('begin')) ?>

<?php foreach ($iterator = $_cb->its[] = new SmartCachingIterator($flashes) as $flash): ?>
<div class="flash <?php echo TemplateHelpers::escapeHtml($flash->type) ?>"><?php echo TemplateHelpers::escapeHtml($flash->message) ?></div>
<?php endforeach; array_pop($_cb->its); $iterator = end($_cb->its) ?>
<div style="position:absolute;top:372px"><?php echo TemplateHelpers::escapeHtml($form->render('errors')) ?></div>
<div class="loginBox"><?php echo $form['username']->label ?> <?php echo $form['username']->control ?></div>
<div class="loginBox"><?php echo $form['password']->label ?> <?php echo $form['password']->control ?></div>
<a onclick="submit();"><span class="button-green-mini button-mini-left-margin">přihlásit</span></a>
<a href="gaming/experienced_gamer"><span class="button-grey-mini">registrace</span></a>
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
