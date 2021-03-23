<?php
/* Smarty version 3.1.33, created on 2019-01-17 13:44:27
  from 'C:\xampp\htdocs\Mikula22\templates\Wydawnictwo\addForm.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c4078ab91c0d7_01216111',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '665252668b889a7729af1d0c3dc58de4daf6b0f1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mikula22\\templates\\Wydawnictwo\\addForm.html.tpl',
      1 => 1547727438,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c4078ab91c0d7_01216111 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17428813045c4078ab919e41_12448442', 'action');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4019187875c4078ab91aca2_47124562', 'formTitle');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17269876355c4078ab91b7e6_89651415', 'formBody');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, '../baseModal.html.tpl');
}
/* {block 'action'} */
class Block_17428813045c4078ab919e41_12448442 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_17428813045c4078ab919e41_12448442',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
wydawnictwo/dodaj/<?php
}
}
/* {/block 'action'} */
/* {block 'formTitle'} */
class Block_4019187875c4078ab91aca2_47124562 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'formTitle' => 
  array (
    0 => 'Block_4019187875c4078ab91aca2_47124562',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Dodawanie nowego wydawnictwa<?php
}
}
/* {/block 'formTitle'} */
/* {block 'formBody'} */
class Block_17269876355c4078ab91b7e6_89651415 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'formBody' => 
  array (
    0 => 'Block_17269876355c4078ab91b7e6_89651415',
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
