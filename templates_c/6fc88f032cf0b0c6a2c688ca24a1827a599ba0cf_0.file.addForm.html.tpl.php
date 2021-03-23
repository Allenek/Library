<?php
/* Smarty version 3.1.33, created on 2019-01-02 19:05:37
  from 'D:\xampp\htdocs\Mikula2\templates\Kategoria\addForm.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c2cfd71664858_72394633',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6fc88f032cf0b0c6a2c688ca24a1827a599ba0cf' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Mikula2\\templates\\Kategoria\\addForm.html.tpl',
      1 => 1546452139,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c2cfd71664858_72394633 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10332917325c2cfd71662ea1_33550325', 'action');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13521952655c2cfd71663977_49555504', 'formTitle');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8513045575c2cfd71664211_70466672', 'formBody');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, '../baseModal.html.tpl');
}
/* {block 'action'} */
class Block_10332917325c2cfd71662ea1_33550325 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_10332917325c2cfd71662ea1_33550325',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
kategoria/dodaj/<?php
}
}
/* {/block 'action'} */
/* {block 'formTitle'} */
class Block_13521952655c2cfd71663977_49555504 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'formTitle' => 
  array (
    0 => 'Block_13521952655c2cfd71663977_49555504',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Dodawanie nowej kategorii<?php
}
}
/* {/block 'formTitle'} */
/* {block 'formBody'} */
class Block_8513045575c2cfd71664211_70466672 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'formBody' => 
  array (
    0 => 'Block_8513045575c2cfd71664211_70466672',
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
