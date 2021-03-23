<?php
/* Smarty version 3.1.33, created on 2019-01-03 13:50:08
  from 'C:\xampp\htdocs\Mikula2\templates\Autor\addForm.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c2e050015f9b2_42275976',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e046b9e953c94b8e1329d7394321061b35c0a36c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mikula2\\templates\\Autor\\addForm.html.tpl',
      1 => 1546517922,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c2e050015f9b2_42275976 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8164272615c2e050015d711_56857621', 'action');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8384088495c2e050015e591_23052867', 'formTitle');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6306690705c2e050015f0a9_70043917', 'formBody');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, '../baseModal.html.tpl');
}
/* {block 'action'} */
class Block_8164272615c2e050015d711_56857621 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_8164272615c2e050015d711_56857621',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
autor/dodaj/<?php
}
}
/* {/block 'action'} */
/* {block 'formTitle'} */
class Block_8384088495c2e050015e591_23052867 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'formTitle' => 
  array (
    0 => 'Block_8384088495c2e050015e591_23052867',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Dodawanie nowego autora<?php
}
}
/* {/block 'formTitle'} */
/* {block 'formBody'} */
class Block_6306690705c2e050015f0a9_70043917 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'formBody' => 
  array (
    0 => 'Block_6306690705c2e050015f0a9_70043917',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <label for=""><strong>Imie Autora</strong></label>
  <input type="text" name="name" class="form-control" />
  <label for=""><strong>Nazwisko Autora</strong></label>
  <input type="text" name="surname" class="form-control" />
<?php
}
}
/* {/block 'formBody'} */
}
