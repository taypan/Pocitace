<?php //netteCache[01]000243a:2:{s:4:"time";s:21:"0.75589600 1279284705";s:9:"callbacks";a:1:{i:0;a:3:{i:0;a:2:{i:0;s:5:"Cache";i:1;s:9:"checkFile";}i:1;s:88:"/home/jirka/Omnique/Omnique_shop/document_root/../app/templates/Manager/komponenty.phtml";i:2;i:1279284703;}}}?><?php
// file …/templates/Manager/komponenty.phtml
//

$_cb = LatteMacros::initRuntime($template, NULL, 'f4c75ee1aa'); unset($_extends);


//
// block content
//
if (!function_exists($_cb->blocks['content'][] = '_cbbfadc61c035_content')) { function _cbbfadc61c035_content() { extract(func_get_arg(0))
?>
<div id="nahled">
    <div id="cCont">
        <h3><?php echo TemplateHelpers::escapeHtml($nadpis) ?></h3>
        <hr>
        <div class="formCont">
<?php if (isset($komponenta)): $control->getWidget("editKomp")->render() ;endif ?>
        </div>
        <br>
         <a href="<?php echo TemplateHelpers::escapeHtml($control->link("addkomponent")) ?>">Přidat komponentu</a>
         <hr>
        <table style="color:white">
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
                    Cena bez Dph [Kč]
                </th>
                <th>
                    Upravit
                </th>
                <th>
                    Smazat
                </th>
            </tr>
<?php foreach ($iterator = $_cb->its[] = new SmartCachingIterator($komponentyAll) as $komponentaAll): ?>
            <tr>
                <td>
                    <?php echo TemplateHelpers::escapeHtml($komponentaAll->id) ?>

                </td>
                <td>
                    <?php echo TemplateHelpers::escapeHtml($komponentaAll->jmeno) ?>

                </td>
                <td>
                    <?php echo TemplateHelpers::escapeHtml($komponentaAll->druh) ?>

                </td>
                <td>
                    <?php echo TemplateHelpers::escapeHtml($komponentaAll->cena) ?>

                </td>
                <td>
                    <a href="<?php echo TemplateHelpers::escapeHtml($control->link("Manager:komponenty", array('id' => $komponentaAll->id))) ?>">Upravit</a>
                </td>
                <td>
                    <a href="<?php echo TemplateHelpers::escapeHtml($control->link("rmKomponenta!", array('id' => $komponentaAll->id))) ?>">Smazat</a>
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
