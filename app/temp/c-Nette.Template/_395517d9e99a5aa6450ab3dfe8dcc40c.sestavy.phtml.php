<?php //netteCache[01]000240a:2:{s:4:"time";s:21:"0.02533000 1279216216";s:9:"callbacks";a:1:{i:0;a:3:{i:0;a:2:{i:0;s:5:"Cache";i:1;s:9:"checkFile";}i:1;s:85:"/home/jirka/Omnique/Omnique_shop/document_root/../app/templates/Manager/sestavy.phtml";i:2;i:1279202873;}}}?><?php
// file …/templates/Manager/sestavy.phtml
//

$_cb = LatteMacros::initRuntime($template, NULL, 'ee3c3a3483'); unset($_extends);


//
// block content
//
if (!function_exists($_cb->blocks['content'][] = '_cbbc8c11bfa28_content')) { function _cbbc8c11bfa28_content() { extract(func_get_arg(0))
?>
<div id="nahled">
    <div id="cCont">
        <h3><?php echo TemplateHelpers::escapeHtml($nadpis) ?></h3>
        <table style="">
            <tr>
                <th>
                    Id
                </th>
                <th>
                    Název
                </th>
                <th>
                    Typ
                </th>
                <th>
                    Pořadí
                </th>
                <th>
                    Cena bez Dph [Kč]
                </th>
                <th>
                    Upravit
                </th>
            </tr>
<?php foreach ($iterator = $_cb->its[] = new SmartCachingIterator($sestavy) as $sestava): ?>
            <tr>
                <td>
                    <?php echo TemplateHelpers::escapeHtml($sestava->id) ?>

                </td>
                <td>
                    <?php echo TemplateHelpers::escapeHtml($sestava->nazev) ?>

                </td>
                <td>
                    <?php echo TemplateHelpers::escapeHtml($sestava->typ) ?>

                </td>
                <td>
                    <?php echo TemplateHelpers::escapeHtml($sestava->level) ?>

                </td>
				<td>
                    <?php echo TemplateHelpers::escapeHtml($sestava->cena) ?>

                </td>
                <td>
                    <a href="<?php echo TemplateHelpers::escapeHtml($control->link("Manager:edit", array('id' => $sestava->id))) ?>">Upravit</a>
                </td>
            </tr>
<?php endforeach; array_pop($_cb->its); $iterator = end($_cb->its) ?>
        </table>
    </div>
</div>
<?php
}}

//
// end of blocks
//

if ($_cb->extends) { ob_start(); }

if (SnippetHelper::$outputAllowed) {
if (!$_cb->extends) { call_user_func(reset($_cb->blocks['content']), get_defined_vars()); }  
}

if ($_cb->extends) { ob_end_clean(); LatteMacros::includeTemplate($_cb->extends, get_defined_vars(), $template)->render(); }
