<?php //netteCache[01]000237a:2:{s:4:"time";s:21:"0.11557500 1279224937";s:9:"callbacks";a:1:{i:0;a:3:{i:0;a:2:{i:0;s:5:"Cache";i:1;s:9:"checkFile";}i:1;s:82:"/home/jirka/Omnique/Omnique_shop/document_root/../app/templates/Manager/edit.phtml";i:2;i:1279224936;}}}?><?php
// file …/templates/Manager/edit.phtml
//

$_cb = LatteMacros::initRuntime($template, NULL, '28bdd5725e'); unset($_extends);


//
// block content
//
if (!function_exists($_cb->blocks['content'][] = '_cbb80db094cf4_content')) { function _cbb80db094cf4_content() { extract(func_get_arg(0))
?>
<div id="nahled">
    <div id="cCont">
        <h3><?php echo TemplateHelpers::escapeHtml($nadpis) ?> - <a href="<?php echo TemplateHelpers::escapeHtml($control->link("Detail:", array('typ'=>$sestava->typ,'id'=>$sestava->level))) ?>"><?php echo TemplateHelpers::escapeHtml($trans[$sestava->typ]) ?> <?php echo TemplateHelpers::escapeHtml($sestava->level) ?></a></h3>
        <div id="nahledCont">
            <table width="500" border="2" cellspacing="5" cellpadding="5">
                <tr>
                    <th>
                        Jméno
                    </th>
					<th>
                        Typ
                    </th>
                    <th>
                        Výchozí
                    </th>
                    <th>
                        Změnitelná
                    </th>
                    <th>
                        Upravit
                    </th>
                    <th>
                        Smazat
                    </th>
                </tr>
<?php foreach ($iterator = $_cb->its[] = new SmartCachingIterator($komponenty) as $komponenta): ?>
                <tr>
                    <td>
                        <?php echo TemplateHelpers::escapeHtml($komponenta->jmeno) ?>

                    </td>
					<td>
                        <?php echo TemplateHelpers::escapeHtml($komponenta->druh) ?>

                    </td>
                    <td>
                        <?php echo TemplateHelpers::escapeHtml($komponenta->vychozi) ?>

                    </td>
                    <td>
                        <?php echo TemplateHelpers::escapeHtml($komponenta->zmenitelna) ?>

                    </td>
                    <th>
                        <a href="<?php echo TemplateHelpers::escapeHtml($control->link("Manager:editKomb", array('id' => $komponenta->id, 'sestava' => $komponenta->id_sestava))) ?>">Upravit</a>
                    </th>
                    <th>
                        <a href="<?php echo TemplateHelpers::escapeHtml($control->link("rmKombinace!", array('komb' => $komponenta->id))) ?>">Smazat</a>
                    </th>
                </tr>
<?php endforeach; array_pop($_cb->its); $iterator = end($_cb->its) ?>
            </table>
			<hr>
            <p>
                <div class="formCont">
<?php $control->getWidget("insert")->render() ?>
                </div>
            </p>
            <br>
			<hr>
            <div class="formCont">
<?php $control->getWidget("edit")->render() ?>
            </div>
        </div>
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
