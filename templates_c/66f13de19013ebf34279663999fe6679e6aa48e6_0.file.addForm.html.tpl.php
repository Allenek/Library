<?php
/* Smarty version 3.1.33, created on 2019-01-17 13:46:49
  from 'C:\xampp\htdocs\Mikula22\templates\Autor\addForm.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c40793972ce08_26122964',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66f13de19013ebf34279663999fe6679e6aa48e6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mikula22\\templates\\Autor\\addForm.html.tpl',
      1 => 1547727438,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c40793972ce08_26122964 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5566660275c40793972ab63_73226351', 'action');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14519193595c40793972b9c4_66438347', 'formTitle');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1844035975c40793972c4e3_33472198', 'formBody');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, '../baseModal.html.tpl');
}
/* {block 'action'} */
class Block_5566660275c40793972ab63_73226351 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_5566660275c40793972ab63_73226351',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
autor/dodaj/<?php
}
}
/* {/block 'action'} */
/* {block 'formTitle'} */
class Block_14519193595c40793972b9c4_66438347 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'formTitle' => 
  array (
    0 => 'Block_14519193595c40793972b9c4_66438347',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Dodawanie nowego autora<?php
}
}
/* {/block 'formTitle'} */
/* {block 'formBody'} */
class Block_1844035975c40793972c4e3_33472198 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'formBody' => 
  array (
    0 => 'Block_1844035975c40793972c4e3_33472198',
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
