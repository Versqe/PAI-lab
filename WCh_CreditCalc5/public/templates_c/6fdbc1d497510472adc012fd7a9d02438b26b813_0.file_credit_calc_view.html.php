<?php
/* Smarty version 5.4.2, created on 2026-04-16 01:37:58
  from 'file:credit_calc_view.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_69e02156e8d212_40101135',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6fdbc1d497510472adc012fd7a9d02438b26b813' => 
    array (
      0 => 'credit_calc_view.html',
      1 => 1776292828,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69e02156e8d212_40101135 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\xampp\\htdocs\\WCh_CreditCalc5\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_10507914669e02156e00fc8_30241258', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.html", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_10507914669e02156e00fc8_30241258 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\xampp\\htdocs\\WCh_CreditCalc5\\app\\views';
?>

<div class="form-container" style="position: relative;">
    <a href="<?php echo $_smarty_tpl->getValue('conf')->action_root;?>
logout" class="button small" style="position: absolute; top: 20px; right: 20px; border: 1px solid rgba(255,255,255,0.3); color: #fff; text-decoration: none; padding: 5px 15px; border-radius: 5px; font-size: 0.8em;">Wyloguj</a>

    <header>
        <h2>OBLICZ RATĘ</h2>
    </header>

    <section>
        <form action="<?php echo $_smarty_tpl->getValue('conf')->action_root;?>
calcCompute#main" method="post">
            <div class="fields">
                <div class="field">
                    <label for="kwota">Kwota kredytu (zł):</label>
                    <input type="text" name="kwota" id="kwota" value="<?php echo $_smarty_tpl->getValue('form')->kwota;?>
" placeholder="np. 100000" />
                </div>
                <div class="field half">
                    <label for="lata">Okres kredytowania (lata):</label>
                    <input type="text" name="lata" id="lata" value="<?php echo $_smarty_tpl->getValue('form')->lata;?>
" placeholder="np. 5" />
                </div>
                <div class="field half">
                    <label for="oprocentowanie">Oprocentowanie (%):</label>
                    <input type="text" name="oprocentowanie" id="oprocentowanie" value="<?php echo $_smarty_tpl->getValue('form')->oprocentowanie;?>
" placeholder="np. 8.5" />
                </div>
            </div>
            
            <ul class="actions" style="margin-top: 2em; text-align: center; justify-content: center; display: flex;">
                <li><input type="submit" value="Oblicz ratę" class="primary" style="padding: 0 3em;" /></li>
            </ul>
        </form>

        <?php if ($_smarty_tpl->getValue('msgs')->isError()) {?>
            <div style="background-color: rgba(255, 0, 0, 0.1); border: 1px solid #ff4444; color: #ffaaaa; padding: 15px; border-radius: 5px; margin-top: 20px;">
                <h4 style="color: #ff6666; margin-bottom: 10px;">Wystąpiły błędy:</h4>
                <ul style="margin-bottom: 0; padding-left: 20px;">
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('msgs')->getMessages(), 'msg');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('msg')->value) {
$foreach0DoElse = false;
?>
                    <?php if ($_smarty_tpl->getValue('msg')->isError()) {?>
                        <li style="margin-bottom: 5px;"><?php echo $_smarty_tpl->getValue('msg')->text;?>
</li>
                    <?php }?>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </ul>
            </div>
        <?php }?>

        <?php if ((null !== ($_smarty_tpl->getValue('res')->result ?? null))) {?>
            <div style="background-color: rgba(0, 255, 0, 0.1); border: 1px solid #44ff44; color: #aaffaa; padding: 20px; border-radius: 5px; text-align: center; font-size: 1.2em; margin-top: 20px;">
                Twoja miesięczna rata wynosi:<br/>
                <strong style="font-size: 1.8em; color: #ffffff;"><?php echo sprintf("%.2f",$_smarty_tpl->getValue('res')->result);?>
 zł</strong>
            </div>
        <?php }?>
    </section>
</div>
<?php
}
}
/* {/block 'content'} */
}
