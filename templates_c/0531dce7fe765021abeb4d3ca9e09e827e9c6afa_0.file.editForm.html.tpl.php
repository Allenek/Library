<?php
/* Smarty version 3.1.33, created on 2019-01-17 13:19:33
  from 'C:\xampp\htdocs\Mikula2\templates\Wydawnictwo\editForm.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c4072d5b28036_57246348',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0531dce7fe765021abeb4d3ca9e09e827e9c6afa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mikula2\\templates\\Wydawnictwo\\editForm.html.tpl',
      1 => 1547727438,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c4072d5b28036_57246348 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21384752825c4072d5b1cba4_77655186', 'action');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13852401075c4072d5b1dce9_94528399', 'formTitle');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19539938645c4072d5b21bb3_41593238', 'formBody');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_150952125c4072d5b26e37_87785684', 'redirect');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12437076385c4072d5b27860_44958993', 'redirectName');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, '../baseModal.html.tpl');
}
/* {block 'action'} */
class Block_21384752825c4072d5b1cba4_77655186 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_21384752825c4072d5b1cba4_77655186',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
wydawnictwo/aktualizuj/<?php
}
}
/* {/block 'action'} */
/* {block 'formTitle'} */
class Block_13852401075c4072d5b1dce9_94528399 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'formTitle' => 
  array (
    0 => 'Block_13852401075c4072d5b1dce9_94528399',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Edycja Wydawnictwa nr <?php echo $_smarty_tpl->tpl_vars['data']->value['ID_Wydawnictwo'];
}
}
/* {/block 'formTitle'} */
/* {block 'formBody'} */
class Block_19539938645c4072d5b21bb3_41593238 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'formBody' => 
  array (
    0 => 'Block_19539938645c4072d5b21bb3_41593238',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <input type="hidden" name="ID_Wydawnictwo" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['ID_Wydawnictwo'])) {
echo $_smarty_tpl->tpl_vars['data']->value['ID_Wydawnictwo'];
}?>">
  <label for="">Nazwa Wydawnictwa</label>
  <input type="text" name="name" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['Nazwa'])) {
echo $_smarty_tpl->tpl_vars['data']->value['Nazwa'];
}?>" class="form-control" id="name" />
<?php
}
}
/* {/block 'formBody'} */
/* {block 'redirect'} */
class Block_150952125c4072d5b26e37_87785684 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'redirect' => 
  array (
    0 => 'Block_150952125c4072d5b26e37_87785684',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
wydawnictwo/<?php
}
}
/* {/block 'redirect'} */
/* {block 'redirectName'} */
class Block_12437076385c4072d5b27860_44958993 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'redirectName' => 
  array (
    0 => 'Block_12437076385c4072d5b27860_44958993',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Lista wydawnictw<?php
}
}
/* {/block 'redirectName'} */
}
