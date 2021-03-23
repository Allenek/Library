<?php
/* Smarty version 3.1.33, created on 2019-01-02 19:09:01
  from 'D:\xampp\htdocs\Mikula2\templates\Autor\addForm.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c2cfe3de813d0_40024051',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '623581d5f14bc6d4bc9ab81eb0ffa762c2fae764' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Mikula2\\templates\\Autor\\addForm.html.tpl',
      1 => 1546452522,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c2cfe3de813d0_40024051 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2738549855c2cfe3de7fb04_45530898', 'action');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6852592145c2cfe3de805e8_72405970', 'formTitle');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19075062145c2cfe3de80d71_04392606', 'formBody');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, '../baseModal.html.tpl');
}
/* {block 'action'} */
class Block_2738549855c2cfe3de7fb04_45530898 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_2738549855c2cfe3de7fb04_45530898',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
autor/dodaj/<?php
}
}
/* {/block 'action'} */
/* {block 'formTitle'} */
class Block_6852592145c2cfe3de805e8_72405970 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'formTitle' => 
  array (
    0 => 'Block_6852592145c2cfe3de805e8_72405970',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Dodawanie nowego autora<?php
}
}
/* {/block 'formTitle'} */
/* {block 'formBody'} */
class Block_19075062145c2cfe3de80d71_04392606 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'formBody' => 
  array (
    0 => 'Block_19075062145c2cfe3de80d71_04392606',
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
