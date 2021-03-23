<?php
/* Smarty version 3.1.33, created on 2019-01-02 19:17:57
  from 'D:\xampp\htdocs\Mikula2\templates\Autor\editForm.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c2d005574ed15_72770840',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dacb24e9d98b44c0afb968a81e99a1fac4f196c8' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Mikula2\\templates\\Autor\\editForm.html.tpl',
      1 => 1546453032,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c2d005574ed15_72770840 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11397001865c2d0055744c65_29458059', 'action');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12335583415c2d00557457e3_10163477', 'formTitle');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19454275285c2d00557496d1_42230180', 'formBody');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, '../baseModal.html.tpl');
}
/* {block 'action'} */
class Block_11397001865c2d0055744c65_29458059 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_11397001865c2d0055744c65_29458059',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
autor/aktualizuj/<?php
}
}
/* {/block 'action'} */
/* {block 'formTitle'} */
class Block_12335583415c2d00557457e3_10163477 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'formTitle' => 
  array (
    0 => 'Block_12335583415c2d00557457e3_10163477',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Edycja Autora nr <?php echo $_smarty_tpl->tpl_vars['data']->value['ID_Autor'];
}
}
/* {/block 'formTitle'} */
/* {block 'formBody'} */
class Block_19454275285c2d00557496d1_42230180 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'formBody' => 
  array (
    0 => 'Block_19454275285c2d00557496d1_42230180',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <input type="hidden" name="ID_Autor" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['ID_Autor'])) {
echo $_smarty_tpl->tpl_vars['data']->value['ID_Autor'];
}?>">
  <label for="">Imie</label>
  <input type="text" name="name" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['Imie'])) {
echo $_smarty_tpl->tpl_vars['data']->value['Imie'];
}?>" class="form-control" />
  <label for="">Nazwisko</label>
  <input type="text" name="surname" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['Nazwisko'])) {
echo $_smarty_tpl->tpl_vars['data']->value['Nazwisko'];
}?>" class="form-control" />
<?php
}
}
/* {/block 'formBody'} */
}
