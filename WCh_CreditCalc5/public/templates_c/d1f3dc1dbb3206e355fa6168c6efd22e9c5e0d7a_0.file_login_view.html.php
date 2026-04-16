<?php
/* Smarty version 5.4.2, created on 2026-04-16 01:25:43
  from 'file:login_view.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_69e01e7745a0c4_93305586',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1f3dc1dbb3206e355fa6168c6efd22e9c5e0d7a' => 
    array (
      0 => 'login_view.html',
      1 => 1776292816,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69e01e7745a0c4_93305586 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\xampp\\htdocs\\WCh_CreditCalc5\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_154859226769e01e7740ac97_82534716', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.html", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_154859226769e01e7740ac97_82534716 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\xampp\\htdocs\\WCh_CreditCalc5\\app\\views';
?>

<div class="form-container" style="max-width: 500px;">
    <header>
        <h2>LOGOWANIE</h2>
    </header>

    <section>
        <form action="<?php echo $_smarty_tpl->getValue('conf')->action_root;?>
login" method="post">
            <div class="fields">
                <div class="field">
                    <label for="login">Login:</label>
                    <input type="text" name="login" id="login" value="<?php echo $_smarty_tpl->getValue('form')->login;?>
" />
                </div>
                <div class="field">
                    <label for="pass">Hasło:</label>
                    <input type="password" name="pass" id="pass" />
                </div>
            </div>
            
            <ul class="actions" style="margin-top: 2em; text-align: center; justify-content: center; display: flex;">
                <li><input type="submit" value="Zaloguj" class="primary" style="padding: 0 3em;" /></li>
            </ul>
        </form>

        <?php if ($_smarty_tpl->getValue('msgs')->isError()) {?>
            <div style="background-color: rgba(255, 0, 0, 0.1); border: 1px solid #ff4444; color: #ffaaaa; padding: 15px; border-radius: 5px; margin-top: 20px;">
                <ul style="margin-bottom: 0; padding-left: 20px; list-style-type: none;">
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('msgs')->getMessages(), 'msg');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('msg')->value) {
$foreach0DoElse = false;
?>
                    <?php if ($_smarty_tpl->getValue('msg')->isError()) {?>
                        <li><?php echo $_smarty_tpl->getValue('msg')->text;?>
</li>
                    <?php }?>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </ul>
            </div>
        <?php }?>
    </section>
</div>
<?php
}
}
/* {/block 'content'} */
}
