<?php
/* Smarty version 3.1.33, created on 2019-01-02 18:57:21
  from 'D:\xampp\htdocs\Mikula2\templates\Wydawnictwo\addForm.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c2cfb8120e451_90732143',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40210ec932fe8c10d19ff5f1da25eb5c36c01192' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Mikula2\\templates\\Wydawnictwo\\addForm.html.tpl',
      1 => 1546451816,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c2cfb8120e451_90732143 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8387039855c2cfb8120ca80_87789887', 'action');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13815145505c2cfb8120d650_88436558', 'formTitle');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18616331505c2cfb8120ddf1_22624316', 'formBody');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, '../baseModal.html.tpl');
}
/* {block 'action'} */
class Block_8387039855c2cfb8120ca80_87789887 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_8387039855c2cfb8120ca80_87789887',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
wydawnictwo/dodaj/<?php
}
}
/* {/block 'action'} */
/* {block 'formTitle'} */
class Block_13815145505c2cfb8120d650_88436558 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'formTitle' => 
  array (
    0 => 'Block_13815145505c2cfb8120d650_88436558',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Dodawanie nowego wydawnictwa<?php
}
}
/* {/block 'formTitle'} */
/* {block 'formBody'} */
class Block_18616331505c2cfb8120ddf1_22624316 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'formBody' => 
  array (
    0 => 'Block_18616331505c2cfb8120ddf1_22624316',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <label for="name"><strong>Nazwa Wydawnictwa</strong></label>
  <input type="text" name="nazwa" class="form-control" id="name" />
<?php
}
}
/* {/block 'formBody'} */
}
