<?php
/* Smarty version 3.1.33, created on 2019-01-17 13:47:01
  from 'C:\xampp\htdocs\Mikula22\templates\Kategoria\addForm.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c4079453457b4_77221179',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '856787bfa955ae747ef0a1da8ad2efc416d8e303' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mikula22\\templates\\Kategoria\\addForm.html.tpl',
      1 => 1547727438,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c4079453457b4_77221179 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12906386455c407945343720_59097841', 'action');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15425718935c4079453444d6_28687936', 'formTitle');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3205229695c407945344f74_62612919', 'formBody');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, '../baseModal.html.tpl');
}
/* {block 'action'} */
class Block_12906386455c407945343720_59097841 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_12906386455c407945343720_59097841',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
kategoria/dodaj/<?php
}
}
/* {/block 'action'} */
/* {block 'formTitle'} */
class Block_15425718935c4079453444d6_28687936 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'formTitle' => 
  array (
    0 => 'Block_15425718935c4079453444d6_28687936',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Dodawanie nowej kategorii<?php
}
}
/* {/block 'formTitle'} */
/* {block 'formBody'} */
class Block_3205229695c407945344f74_62612919 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'formBody' => 
  array (
    0 => 'Block_3205229695c407945344f74_62612919',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <label for="name"><strong>Nazwa Kategorii</strong></label>
  <input type="text" name="nazwa" class="form-control" id="name" />
<?php
}
}
/* {/block 'formBody'} */
}
