<?php
/* Smarty version 5.4.2, created on 2026-04-15 18:54:56
  from 'file:D:\xampp\htdocs\WCh_CreditCalc3/app/credit_calc_view.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_69dfc2e0b33ea8_77312826',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95c6ec4732144f2249ca7678653fbb97b4552656' => 
    array (
      0 => 'D:\\xampp\\htdocs\\WCh_CreditCalc3/app/credit_calc_view.html',
      1 => 1774371421,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69dfc2e0b33ea8_77312826 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\xampp\\htdocs\\WCh_CreditCalc3\\app';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_93891110369dfc2e0ac3197_25790092', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "../templates/main.html", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_93891110369dfc2e0ac3197_25790092 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\xampp\\htdocs\\WCh_CreditCalc3\\app';
?>

<div class="form-container">
    <header>
        <h2>OBLICZ RATĘ</h2>
    </header>

    <section>
        <form action="<?php echo $_smarty_tpl->getValue('app_url');?>
/app/credit_calc.php#main" method="post">
            <div class="fields">
                <div class="field">
                    <label for="kwota">Kwota kredytu (zł):</label>
                    <input type="text" name="kwota" id="kwota" value="<?php echo $_smarty_tpl->getValue('form')['kwota'];?>
" placeholder="np. 100000" />
                </div>
                <div class="field half">
                    <label for="lata">Okres kredytowania (lata):</label>
                    <input type="text" name="lata" id="lata" value="<?php echo $_smarty_tpl->getValue('form')['lata'];?>
" placeholder="np. 5" />
                </div>
                <div class="field half">
                    <label for="oprocentowanie">Oprocentowanie (%):</label>
                    <input type="text" name="oprocentowanie" id="oprocentowanie" value="<?php echo $_smarty_tpl->getValue('form')['oprocentowanie'];?>
" placeholder="np. 8.5" />
                </div>
            </div>
            
            <ul class="actions" style="margin-top: 2em; text-align: center; justify-content: center; display: flex;">
                <li><input type="submit" value="Oblicz ratę" class="primary" style="padding: 0 3em;" /></li>
            </ul>
        </form>

        <?php if ((null !== ($_smarty_tpl->getValue('messages') ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('messages')) > 0) {?>
            <div style="background-color: rgba(255, 0, 0, 0.1); border: 1px solid #ff4444; color: #ffaaaa; padding: 15px; border-radius: 5px; margin-top: 20px;">
                <h4 style="color: #ff6666; margin-bottom: 10px;">Wystąpiły błędy:</h4>
                <ul style="margin-bottom: 0;">
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('messages'), 'msg');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('msg')->value) {
$foreach0DoElse = false;
?>
                    <li><?php echo $_smarty_tpl->getValue('msg');?>
</li>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </ul>
            </div>
        <?php }?>

        <?php if ((null !== ($_smarty_tpl->getValue('result') ?? null))) {?>
            <div style="background-color: rgba(0, 255, 0, 0.1); border: 1px solid #44ff44; color: #aaffaa; padding: 20px; border-radius: 5px; text-align: center; font-size: 1.2em; margin-top: 20px;">
                Twoja miesięczna rata wynosi:<br/>
                <strong style="font-size: 1.8em; color: #ffffff;"><?php echo sprintf("%.2f",$_smarty_tpl->getValue('result'));?>
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
