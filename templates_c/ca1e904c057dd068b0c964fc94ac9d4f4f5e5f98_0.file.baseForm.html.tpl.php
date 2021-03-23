<?php
/* Smarty version 3.1.33, created on 2019-01-02 17:23:28
  from 'D:\xampp\htdocs\Mikula2\templates\baseForm.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c2ce5804814e1_93587621',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca1e904c057dd068b0c964fc94ac9d4f4f5e5f98' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Mikula2\\templates\\baseForm.html.tpl',
      1 => 1546443771,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c2ce5804814e1_93587621 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16679705655c2ce580477800_96482709', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, './baseTemplate.html.tpl');
}
/* {block 'action'} */
class Block_1201559425c2ce58047d3e5_38686833 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'action'} */
/* {block 'formTitle'} */
class Block_11673404205c2ce58047dd53_02160920 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'formTitle'} */
/* {block 'formBody'} */
class Block_6574563855c2ce58047e401_03809928 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="form-group">
          <label for="input1">Pole nr 1</label>
          <input type="text" name="input1" id="input1" class="form-control">
        </div>
      <?php
}
}
/* {/block 'formBody'} */
/* {block 'submit'} */
class Block_21410956305c2ce58047eb33_89318497 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Prześlij<?php
}
}
/* {/block 'submit'} */
/* {block 'redirect'} */
class Block_11598051215c2ce5804800d8_99387804 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'redirect'} */
/* {block 'redirectName'} */
class Block_2392432695c2ce580480905_38463482 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Powrót<?php
}
}
/* {/block 'redirectName'} */
/* {block 'body'} */
class Block_16679705655c2ce580477800_96482709 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_16679705655c2ce580477800_96482709',
  ),
  'action' => 
  array (
    0 => 'Block_1201559425c2ce58047d3e5_38686833',
  ),
  'formTitle' => 
  array (
    0 => 'Block_11673404205c2ce58047dd53_02160920',
  ),
  'formBody' => 
  array (
    0 => 'Block_6574563855c2ce58047e401_03809928',
  ),
  'submit' => 
  array (
    0 => 'Block_21410956305c2ce58047eb33_89318497',
  ),
  'redirect' => 
  array (
    0 => 'Block_11598051215c2ce5804800d8_99387804',
  ),
  'redirectName' => 
  array (
    0 => 'Block_2392432695c2ce580480905_38463482',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form class="p-4" action="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1201559425c2ce58047d3e5_38686833', 'action', $this->tplIndex);
?>
" method="post" id="myform">
      <h3><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11673404205c2ce58047dd53_02160920', 'formTitle', $this->tplIndex);
?>
</h3>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6574563855c2ce58047e401_03809928', 'formBody', $this->tplIndex);
?>

      <input type="submit" name="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21410956305c2ce58047eb33_89318497', 'submit', $this->tplIndex);
?>
" class="btn btn-primary mt-2 float-right">
    </form>
    <a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11598051215c2ce5804800d8_99387804', 'redirect', $this->tplIndex);
?>
" class="btn btn-dark"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2392432695c2ce580480905_38463482', 'redirectName', $this->tplIndex);
?>
</a>
<?php echo '<script'; ?>
 src="./js/form.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'body'} */
}
