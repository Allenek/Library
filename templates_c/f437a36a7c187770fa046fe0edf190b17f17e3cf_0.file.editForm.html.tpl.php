<?php
/* Smarty version 3.1.33, created on 2019-01-02 19:14:05
  from 'D:\xampp\htdocs\Mikula2\templates\Egzemplarz\editForm.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c2cff6d70a044_82932740',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f437a36a7c187770fa046fe0edf190b17f17e3cf' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Mikula2\\templates\\Egzemplarz\\editForm.html.tpl',
      1 => 1546452828,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c2cff6d70a044_82932740 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21046963335c2cff6d6f6db0_36485061', 'action');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21354992785c2cff6d6f7837_27129530', 'formTitle');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17195535225c2cff6d6fb200_66296694', 'formBody');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, '../baseModal.html.tpl');
}
/* {block 'action'} */
class Block_21046963335c2cff6d6f6db0_36485061 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_21046963335c2cff6d6f6db0_36485061',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
egzemplarz/aktualizuj/<?php
}
}
/* {/block 'action'} */
/* {block 'formTitle'} */
class Block_21354992785c2cff6d6f7837_27129530 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'formTitle' => 
  array (
    0 => 'Block_21354992785c2cff6d6f7837_27129530',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Edycja egzemplarza nr <?php echo $_smarty_tpl->tpl_vars['data']->value['ID_Egzemplarz'];
}
}
/* {/block 'formTitle'} */
/* {block 'formBody'} */
class Block_17195535225c2cff6d6fb200_66296694 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'formBody' => 
  array (
    0 => 'Block_17195535225c2cff6d6fb200_66296694',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\xampp\\htdocs\\Mikula2\\vendor\\smarty\\smarty\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
?>

  <input type="hidden" name="ID_Egzemplarz" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['ID_Egzemplarz'])) {
echo $_smarty_tpl->tpl_vars['data']->value['ID_Egzemplarz'];
}?>">
  <label for="">Tytuł książki</label>
  <?php if (isset($_smarty_tpl->tpl_vars['data']->value['ID_Ksiazka'])) {?>
    <?php echo smarty_function_html_options(array('name'=>'id_book','options'=>$_smarty_tpl->tpl_vars['ksiazka']->value,'class'=>"form-control",'selected'=>$_smarty_tpl->tpl_vars['data']->value['ID_Ksiazka']),$_smarty_tpl);?>

  <?php } else { ?>
    <?php echo smarty_function_html_options(array('name'=>'id_book','options'=>$_smarty_tpl->tpl_vars['ksiazka']->value,'class'=>"form-control"),$_smarty_tpl);?>

  <?php }?>
  <label for="">Sygnatura</label>
  <input type="text" name="signature" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['Sygnatura'])) {
echo $_smarty_tpl->tpl_vars['data']->value['Sygnatura'];
}?>" class="form-control" />
  <label for="">Cena_Zakupu</label>
  <input type="text" name="price" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['Cena_Zakupu'])) {
echo $_smarty_tpl->tpl_vars['data']->value['Cena_Zakupu'];
}?>" class="form-control" />
  <label for="">Stan</label>
  <input type="text" name="condition" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['Stan'])) {
echo $_smarty_tpl->tpl_vars['data']->value['Stan'];
}?>" class="form-control" />
<?php
}
}
/* {/block 'formBody'} */
}
