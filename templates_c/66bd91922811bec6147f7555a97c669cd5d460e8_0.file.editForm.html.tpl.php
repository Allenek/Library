<?php
/* Smarty version 3.1.33, created on 2019-01-03 13:55:03
  from 'C:\xampp\htdocs\Mikula2\templates\Kategoria\editForm.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c2e0627b65c07_16569598',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66bd91922811bec6147f7555a97c669cd5d460e8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mikula2\\templates\\Kategoria\\editForm.html.tpl',
      1 => 1546517922,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c2e0627b65c07_16569598 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18566611555c2e0627b5c0b9_14010031', 'action');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13747788065c2e0627b5cdf1_86210724', 'formTitle');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8834439095c2e0627b60ac9_18751696', 'formBody');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, '../baseModal.html.tpl');
}
/* {block 'action'} */
class Block_18566611555c2e0627b5c0b9_14010031 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_18566611555c2e0627b5c0b9_14010031',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
kategoria/aktualizuj/<?php
}
}
/* {/block 'action'} */
/* {block 'formTitle'} */
class Block_13747788065c2e0627b5cdf1_86210724 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'formTitle' => 
  array (
    0 => 'Block_13747788065c2e0627b5cdf1_86210724',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Edycja Kategorii nr <?php echo $_smarty_tpl->tpl_vars['data']->value['ID_Kategoria'];
}
}
/* {/block 'formTitle'} */
/* {block 'formBody'} */
class Block_8834439095c2e0627b60ac9_18751696 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'formBody' => 
  array (
    0 => 'Block_8834439095c2e0627b60ac9_18751696',
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
