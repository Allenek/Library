<?php
/* Smarty version 3.1.33, created on 2019-01-02 18:03:52
  from 'D:\xampp\htdocs\Mikula2\templates\Ksiazka\addForm.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c2ceef8955939_87918004',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4da3ec62b9c743d7a2f5801f8ff9602d38a58d0f' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Mikula2\\templates\\Ksiazka\\addForm.html.tpl',
      1 => 1546448628,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c2ceef8955939_87918004 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14999254485c2ceef8930629_22530802', 'action');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21067927425c2ceef8931103_16813793', 'formTitle');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_500143425c2ceef8931891_85330222', 'formBody');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, '../baseModal.html.tpl');
}
/* {block 'action'} */
class Block_14999254485c2ceef8930629_22530802 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_14999254485c2ceef8930629_22530802',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
ksiazka/dodaj/<?php
}
}
/* {/block 'action'} */
/* {block 'formTitle'} */
class Block_21067927425c2ceef8931103_16813793 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'formTitle' => 
  array (
    0 => 'Block_21067927425c2ceef8931103_16813793',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Dodawanie nowej Ksiązki<?php
}
}
/* {/block 'formTitle'} */
/* {block 'formBody'} */
class Block_500143425c2ceef8931891_85330222 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'formBody' => 
  array (
    0 => 'Block_500143425c2ceef8931891_85330222',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\xampp\\htdocs\\Mikula2\\vendor\\smarty\\smarty\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
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
