<?php
/* Smarty version 3.1.33, created on 2019-01-02 19:15:08
  from 'D:\xampp\htdocs\Mikula2\templates\Wydawnictwo\editForm.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c2cffac578c92_38102826',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e825d4e870d680cc4b91644f5baa97811c0a0944' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Mikula2\\templates\\Wydawnictwo\\editForm.html.tpl',
      1 => 1546452880,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c2cffac578c92_38102826 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15031017865c2cffac56ef65_06170841', 'action');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18996083555c2cffac56fa97_07399776', 'formTitle');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20160643925c2cffac573720_81440021', 'formBody');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7814132685c2cffac577f19_56203145', 'redirect');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9481634495c2cffac578650_69040295', 'redirectName');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, '../baseModal.html.tpl');
}
/* {block 'action'} */
class Block_15031017865c2cffac56ef65_06170841 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_15031017865c2cffac56ef65_06170841',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
wydawnictwo/aktualizuj/<?php
}
}
/* {/block 'action'} */
/* {block 'formTitle'} */
class Block_18996083555c2cffac56fa97_07399776 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'formTitle' => 
  array (
    0 => 'Block_18996083555c2cffac56fa97_07399776',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Edycja Wydawnictwa nr <?php echo $_smarty_tpl->tpl_vars['data']->value['ID_Wydawnictwo'];
}
}
/* {/block 'formTitle'} */
/* {block 'formBody'} */
class Block_20160643925c2cffac573720_81440021 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'formBody' => 
  array (
    0 => 'Block_20160643925c2cffac573720_81440021',
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
class Block_7814132685c2cffac577f19_56203145 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'redirect' => 
  array (
    0 => 'Block_7814132685c2cffac577f19_56203145',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
wydawnictwo/<?php
}
}
/* {/block 'redirect'} */
/* {block 'redirectName'} */
class Block_9481634495c2cffac578650_69040295 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'redirectName' => 
  array (
    0 => 'Block_9481634495c2cffac578650_69040295',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Lista wydawnictw<?php
}
}
/* {/block 'redirectName'} */
}
