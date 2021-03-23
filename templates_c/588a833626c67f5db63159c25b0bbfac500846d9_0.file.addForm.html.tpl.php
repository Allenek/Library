<?php
/* Smarty version 3.1.33, created on 2019-01-17 13:46:01
  from 'C:\xampp\htdocs\Mikula22\templates\Ksiazka\addForm.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c4079098e0203_45187782',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '588a833626c67f5db63159c25b0bbfac500846d9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mikula22\\templates\\Ksiazka\\addForm.html.tpl',
      1 => 1547727438,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c4079098e0203_45187782 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10432890795c4079098c8fc0_45814979', 'action');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9335989445c4079098c9ed9_60813789', 'formTitle');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21246888705c4079098caa08_51139988', 'formBody');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, '../baseModal.html.tpl');
}
/* {block 'action'} */
class Block_10432890795c4079098c8fc0_45814979 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_10432890795c4079098c8fc0_45814979',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
ksiazka/dodaj/<?php
}
}
/* {/block 'action'} */
/* {block 'formTitle'} */
class Block_9335989445c4079098c9ed9_60813789 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'formTitle' => 
  array (
    0 => 'Block_9335989445c4079098c9ed9_60813789',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Dodawanie nowej Ksiązki<?php
}
}
/* {/block 'formTitle'} */
/* {block 'formBody'} */
class Block_21246888705c4079098caa08_51139988 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'formBody' => 
  array (
    0 => 'Block_21246888705c4079098caa08_51139988',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\Mikula22\\vendor\\smarty\\smarty\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
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
