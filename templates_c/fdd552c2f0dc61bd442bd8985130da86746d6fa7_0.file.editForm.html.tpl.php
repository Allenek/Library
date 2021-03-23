<?php
/* Smarty version 3.1.33, created on 2019-01-17 13:41:32
  from 'C:\xampp\htdocs\Mikula22\templates\Kategoria\editForm.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c4077fc776762_59843027',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fdd552c2f0dc61bd442bd8985130da86746d6fa7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mikula22\\templates\\Kategoria\\editForm.html.tpl',
      1 => 1547727438,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c4077fc776762_59843027 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2706285505c4077fc76c9d8_72990862', 'action');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19956530225c4077fc76d704_13789703', 'formTitle');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20722971725c4077fc771522_64483218', 'formBody');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, '../baseModal.html.tpl');
}
/* {block 'action'} */
class Block_2706285505c4077fc76c9d8_72990862 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_2706285505c4077fc76c9d8_72990862',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
kategoria/aktualizuj/<?php
}
}
/* {/block 'action'} */
/* {block 'formTitle'} */
class Block_19956530225c4077fc76d704_13789703 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'formTitle' => 
  array (
    0 => 'Block_19956530225c4077fc76d704_13789703',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Edycja Kategorii nr <?php echo $_smarty_tpl->tpl_vars['data']->value['ID_Kategoria'];
}
}
/* {/block 'formTitle'} */
/* {block 'formBody'} */
class Block_20722971725c4077fc771522_64483218 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'formBody' => 
  array (
    0 => 'Block_20722971725c4077fc771522_64483218',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <input type="hidden" name="ID_Kategoria" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['ID_Kategoria'])) {
echo $_smarty_tpl->tpl_vars['data']->value['ID_Kategoria'];
}?>">
  <label for="">Nazwa Kategorii</label>
  <input type="text" name="name" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['Nazwa'])) {
echo $_smarty_tpl->tpl_vars['data']->value['Nazwa'];
}?>" class="form-control" id="name" />
<?php
}
}
/* {/block 'formBody'} */
}
