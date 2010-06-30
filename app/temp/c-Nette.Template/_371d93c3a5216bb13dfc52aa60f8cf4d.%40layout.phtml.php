<?php //netteCache[01]000238a:2:{s:4:"time";s:21:"0.92993200 1277843462";s:9:"callbacks";a:1:{i:0;a:3:{i:0;a:2:{i:0;s:5:"Cache";i:1;s:9:"checkFile";}i:1;s:83:"/home/jirka/Omnique/Omnique_shop/document_root/../app/templates/Login/@layout.phtml";i:2;i:1277481846;}}}?><?php
// file …/templates/Login/@layout.phtml
//

$_cb = LatteMacros::initRuntime($template, NULL, 'abcb1d4683'); unset($_extends);

if (SnippetHelper::$outputAllowed) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="Content-Language" content="cs" />
        <meta name="keywords" content="počítače, PC, PC sestavy, sestavy, profesionální, herní" />
        <meta name="description" content="Profesionální počítače za solidní ceny" />
        <meta name='robots' content='all,follow,archive' />
        <meta name='author' content='(c) Omnique' />
        <title>Počítače Omnique</title>
        <link href="<?php echo TemplateHelpers::escapeHtml($basePath) ?>/css/style.css" rel="stylesheet" type="text/css" />
        <!--[if IE 6]>
            <link rel="stylesheet" type="text/css" href="<?php echo TemplateHelpers::escapeHtmlComment($basePath) ?>/css/megamrdka.css">
        <![endif]-->
    </head>
    <body>
        <div id="cont">
            <a href="http://pocitace.omnique.cz/"><img src="<?php echo TemplateHelpers::escapeHtml($basePath) ?>/images/img_02.png" alt="omnique" id="logo" /></a>
            <div id="Mcont">
                <a class="menuGAMING" href="#">O NÁS</a>
                <a class="menuGAMING" href="#">NABÍDKA</a>
                <a class="menuGAMING" href="#">KONTAKT</a>
            </div>
            <div id="content">
                <div id="loginCont">
                    <div id="login">
                        
<?php LatteMacros::callBlock($_cb->blocks, 'content', get_defined_vars()) ?>
                    </div>
                    <ul>
                        <li>
                            Získat zapomenuté heslo
                        </li>
                        <li>
                            Nemáte účet na omnique.cz? Založte si ho! 
                        </li>
                        <li>
                            Pokud se Vám nedaří přihlásit se klikněte sem 
                        </li>
                        <li>
                            Zapomněli jste heslo?
                        </li>
                    </ul>
                    <div class="login_BIGT_TXT">
                        Vložte jméno a heslo
                    </div>
                </div>
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
            } 
            catch (err) {
            }
        </script>
    </body>
</html>
<?php
}
