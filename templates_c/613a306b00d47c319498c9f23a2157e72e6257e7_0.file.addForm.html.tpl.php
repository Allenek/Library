<?php
/* Smarty version 3.1.33, created on 2019-01-03 13:22:25
  from 'C:\xampp\htdocs\Mikula2\templates\Ksiazka\addForm.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c2dfe810309f8_10804528',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '613a306b00d47c319498c9f23a2157e72e6257e7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mikula2\\templates\\Ksiazka\\addForm.html.tpl',
      1 => 1546517922,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c2dfe810309f8_10804528 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7570549765c2dfe8101bfa0_46498548', 'action');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7548165215c2dfe8101d124_44485195', 'formTitle');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17696186565c2dfe8101dbd6_13076200', 'formBody');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, '../baseModal.html.tpl');
}
/* {block 'action'} */
class Block_7570549765c2dfe8101bfa0_46498548 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_7570549765c2dfe8101bfa0_46498548',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
ksiazka/dodaj/<?php
}
}
/* {/block 'action'} */
/* {block 'formTitle'} */
class Block_7548165215c2dfe8101d124_44485195 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'formTitle' => 
  array (
    0 => 'Block_7548165215c2dfe8101d124_44485195',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Dodawanie nowej Ksiązki<?php
}
}
/* {/block 'formTitle'} */
/* {block 'formBody'} */
class Block_17696186565c2dfe8101dbd6_13076200 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'formBody' => 
  array (
    0 => 'Block_17696186565c2dfe8101dbd6_13076200',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\Mikula2\\vendor\\smarty\\smarty\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
?>

<label for="">Kategoria</label>
<?php if (isset($_smarty_tpl->tpl_vars['data']->value['ID_Kategoria'])) {?>
  <?php echo smarty_function_html_options(array('name'=>'ID_Kategoria','options'=>$_smarty_tpl->tpl_vars['kategoria']->value,'class'=>"form-control",'selected'=>$_smarty_tpl->tpl_vars['data']->value['ID_Kategoria']),$_smarty_tpl);?>

<?php } else { ?>
  <?php echo smarty_function_html_options(array('name'=>'ID_Kategoria','options'=>$_smarty_tpl->tpl_vars['kategoria']->value,'class'=>"form-control"),$_smarty_tpl);?>

<?php }?>
  <label for=""><strong>Autor</strong></label>
  <select class="form-control" name="ID_Autor[]" multiple>
    <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['autor']->value),$_smarty_tpl);?>

  </select>
  <label for=""><strong>Tytul</strong></label>
  <input type="text" name="Tytul" class="form-control" />
  <label for=""><strong>Opis</strong></label>
  <input type="text" name="Opis" class="form-control" />
  <label for=""><strong>Wydawnictwo</strong></label>
  <?php if (isset($_smarty_tpl->tpl_vars['data']->value['ID_Wydawnictwo'])) {?>
    <?php echo smarty_function_html_options(array('name'=>'ID_Wydawnictwo','options'=>$_smarty_tpl->tpl_vars['wydawnictwo']->value,'class'=>"form-control",'selected'=>$_smarty_tpl->tpl_vars['data']->value['ID_Wydawnictwo']),$_smarty_tpl);?>

  <?php } else { ?>
    <?php echo smarty_function_html_options(array('name'=>'ID_Wydawnictwo','options'=>$_smarty_tpl->tpl_vars['wydawnictwo']->value,'class'=>"form-control"),$_smarty_tpl);?>

  <?php }?>
  <label for""><strong>Rok wydania</strong></label>
  <input type="text" name="Rok_Wydania" class="form-control" />
<?php
}
}
/* {/block 'formBody'} */
}
