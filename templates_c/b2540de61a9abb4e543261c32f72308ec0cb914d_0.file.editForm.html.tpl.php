<?php
/* Smarty version 3.1.33, created on 2019-01-02 19:15:05
  from 'D:\xampp\htdocs\Mikula2\templates\Kategoria\editForm.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c2cffa97d5ef0_83030417',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2540de61a9abb4e543261c32f72308ec0cb914d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Mikula2\\templates\\Kategoria\\editForm.html.tpl',
      1 => 1546452830,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c2cffa97d5ef0_83030417 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4670025195c2cffa97b1d65_83403627', 'action');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18692914635c2cffa97b2812_57628687', 'formTitle');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12687573915c2cffa97d0621_96124011', 'formBody');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, '../baseModal.html.tpl');
}
/* {block 'action'} */
class Block_4670025195c2cffa97b1d65_83403627 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_4670025195c2cffa97b1d65_83403627',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
kategoria/aktualizuj/<?php
}
}
/* {/block 'action'} */
/* {block 'formTitle'} */
class Block_18692914635c2cffa97b2812_57628687 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'formTitle' => 
  array (
    0 => 'Block_18692914635c2cffa97b2812_57628687',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Edycja Kategorii nr <?php echo $_smarty_tpl->tpl_vars['data']->value['ID_Kategoria'];
}
}
/* {/block 'formTitle'} */
/* {block 'formBody'} */
class Block_12687573915c2cffa97d0621_96124011 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'formBody' => 
  array (
    0 => 'Block_12687573915c2cffa97d0621_96124011',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <input type="hidden" name="ID_Kategoria" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['ID_Kategoria'])) {
echo $_smarty_tpl->tpl_vars['data']->value['ID_Kategoria'];
}?>">
  <label for="">Nazwa Kategorii</label>
  <input type="text" name="name" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['Nazwa'])) {
echo $_smarty_tpl->tpl_vars['data']->value['Nazwa'];
}?>" class="form-control" id="name" />
<?php
}
}
/* {/block 'formBody'} */
}
