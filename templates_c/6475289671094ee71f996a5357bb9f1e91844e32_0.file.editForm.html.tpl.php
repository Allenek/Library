<?php
/* Smarty version 3.1.33, created on 2019-01-17 13:22:37
  from 'C:\xampp\htdocs\Mikula22\templates\Wydawnictwo\editForm.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c40738d7e82e4_59030307',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6475289671094ee71f996a5357bb9f1e91844e32' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mikula22\\templates\\Wydawnictwo\\editForm.html.tpl',
      1 => 1547727438,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c40738d7e82e4_59030307 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19383595205c40738d7dcc95_56106292', 'action');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7710554205c40738d7ddd41_90510736', 'formTitle');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2897219165c40738d7e1d61_05110929', 'formBody');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5978710455c40738d7e7128_08394377', 'redirect');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17726163605c40738d7e7b33_28726357', 'redirectName');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, '../baseModal.html.tpl');
}
/* {block 'action'} */
class Block_19383595205c40738d7dcc95_56106292 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_19383595205c40738d7dcc95_56106292',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
wydawnictwo/aktualizuj/<?php
}
}
/* {/block 'action'} */
/* {block 'formTitle'} */
class Block_7710554205c40738d7ddd41_90510736 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'formTitle' => 
  array (
    0 => 'Block_7710554205c40738d7ddd41_90510736',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Edycja Wydawnictwa nr <?php echo $_smarty_tpl->tpl_vars['data']->value['ID_Wydawnictwo'];
}
}
/* {/block 'formTitle'} */
/* {block 'formBody'} */
class Block_2897219165c40738d7e1d61_05110929 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'formBody' => 
  array (
    0 => 'Block_2897219165c40738d7e1d61_05110929',
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
class Block_5978710455c40738d7e7128_08394377 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'redirect' => 
  array (
    0 => 'Block_5978710455c40738d7e7128_08394377',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
wydawnictwo/<?php
}
}
/* {/block 'redirect'} */
/* {block 'redirectName'} */
class Block_17726163605c40738d7e7b33_28726357 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'redirectName' => 
  array (
    0 => 'Block_17726163605c40738d7e7b33_28726357',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Lista wydawnictw<?php
}
}
/* {/block 'redirectName'} */
}
