<?php
/* Smarty version 5.4.2, created on 2026-04-15 18:54:56
  from 'file:D:\xampp\htdocs\WCh_CreditCalc3\app\../templates/main.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_69dfc2e0b7fbc3_69551593',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '324b3199bd9ff87f324950e2421440d6f7f551b1' => 
    array (
      0 => 'D:\\xampp\\htdocs\\WCh_CreditCalc3\\app\\../templates/main.html',
      1 => 1774371763,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69dfc2e0b7fbc3_69551593 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\xampp\\htdocs\\WCh_CreditCalc3\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
    <title><?php echo (($tmp = $_smarty_tpl->getValue('page_title') ?? null)===null||$tmp==='' ? "Kalkulator Kredytowy" ?? null : $tmp);?>
</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/css/main.css" />
    <noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/css/noscript.css" /></noscript>

    <style>
        html {
            scroll-behavior: smooth;
        }

        #intro {
            background-image: url('<?php echo $_smarty_tpl->getValue('app_url');?>
/images/bg.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 2em;
        }

        #intro h1 {
            font-size: 3.5em;
            color: #ffffff;
            margin-bottom: 0.5em;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
            letter-spacing: 2px;
        }

        #intro p {
            font-size: 1.2em;
            color: rgba(255, 255, 255, 0.8);
            margin-bottom: 2em;
            max-width: 800px;
        }

        .button.scrolly {
            background-color: transparent;
            border: 2px solid #ffffff;
            color: #ffffff !important;
            transition: all 0.3s ease;
        }
        
        .button.scrolly:hover {
            background-color: rgba(255,255,255,0.2);
        }

        #main {
            background-image: linear-gradient(rgba(65, 85, 105, 0.85), rgba(40, 55, 75, 0.95)), url('<?php echo $_smarty_tpl->getValue('app_url');?>
/images/bg.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            padding: 4em 2em;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .form-container {
            max-width: 800px;
            margin: 0 auto;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.08);
            padding: 3em;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            border: 1px solid rgba(255, 255, 255, 0.15);
        }

        .form-container header h2 {
            text-align: center;
            color: #ffffff;
            margin-bottom: 1.5em;
            letter-spacing: 2px;
        }

        #back-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: rgba(255, 255, 255, 0.1);
            color: #ffffff;
            padding: 10px 15px;
            border-radius: 5px;
            text-decoration: none;
            display: none; 
            z-index: 1000;
            border: 1px solid rgba(255,255,255,0.2);
            transition: background-color 0.3s;
        }
        
        #back-to-top:hover {
            background-color: rgba(255, 255, 255, 0.3);
        }

        #footer {
            background-color: #28374b;
            padding: 2.5em 0 1.5em 0;
            text-align: center;
            border-top: 1px solid rgba(255,255,255,0.05);
        }
    </style>
</head>
<body class="is-preload">
    
    <div id="wrapper">

        <section id="intro">
            <h1>KALKULATOR KREDYTOWY</h1>
            <p>Zarządzaj swoimi finansami mądrze. Oblicz swoją przewidywaną miesięczną ratę w kilka sekund, korzystając z mojego prostego narzędzia.</p>
            <ul class="actions">
                <li><a href="#main" class="button scrolly">Przejdź do kalkulatora</a></li>
            </ul>
        </section>

        <div id="main">
            <div id="kalkulator" class="inner" style="width: 100%;">
                <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_119932983669dfc2e0b7cc73_41071718', 'content');
?>

            </div>
        </div>

        <footer id="footer">
            <div class="inner">
                <ul class="copyright">
                    <li>&copy; Chrząszcz Weronika</li>
                    <li>Design: <a href="http://html5up.net" target="_blank">HTML5 UP</a></li>
                    <li>Silnik szablonów: Smarty</li>
                </ul>
            </div>
        </footer>

    </div>

    <a href="#intro" id="back-to-top" class="scrolly">Wróć na górę</a>

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/js/browser.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/js/util.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/js/main.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>
        $(window).scroll(function() {
            if ($(this).scrollTop() > 300) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });
    <?php echo '</script'; ?>
>
</body>
</html><?php }
/* {block 'content'} */
class Block_119932983669dfc2e0b7cc73_41071718 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\xampp\\htdocs\\WCh_CreditCalc3\\templates';
}
}
/* {/block 'content'} */
}
