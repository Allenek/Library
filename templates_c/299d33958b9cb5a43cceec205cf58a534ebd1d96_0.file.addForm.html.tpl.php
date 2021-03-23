<?php
/* Smarty version 3.1.33, created on 2019-01-02 19:11:43
  from 'D:\xampp\htdocs\Mikula2\templates\Egzemplarz\addForm.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c2cfedfe81064_86261653',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '299d33958b9cb5a43cceec205cf58a534ebd1d96' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Mikula2\\templates\\Egzemplarz\\addForm.html.tpl',
      1 => 1546452612,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c2cfedfe81064_86261653 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3810281995c2cfedfe72110_05100803', 'action');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10351076685c2cfedfe72d81_73674385', 'formTitle');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13521206925c2cfedfe73534_89638241', 'formBody');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, '../baseModal.html.tpl');
}
/* {block 'action'} */
class Block_3810281995c2cfedfe72110_05100803 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_3810281995c2cfedfe72110_05100803',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
egzemplarz/dodaj/<?php
}
}
/* {/block 'action'} */
/* {block 'formTitle'} */
class Block_10351076685c2cfedfe72d81_73674385 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'formTitle' => 
  array (
    0 => 'Block_10351076685c2cfedfe72d81_73674385',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Dodawanie egzemplarza<?php
}
}
/* {/block 'formTitle'} */
/* {block 'formBody'} */
class Block_13521206925c2cfedfe73534_89638241 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'formBody' => 
  array (
    0 => 'Block_13521206925c2cfedfe73534_89638241',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\xampp\\htdocs\\Mikula2\\vendor\\smarty\\smarty\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
?>

  <label for="">Tytuł książki</label>
  <?php if (isset($_smarty_tpl->tpl_vars['data']->value['ID_Ksiazka'])) {?>
    <?php echo smarty_function_html_options(array('name'=>'id_book','options'=>$_smarty_tpl->tpl_vars['ksiazka']->value,'class'=>"form-control",'selected'=>$_smarty_tpl->tpl_vars['data']->value['ID_Ksiazka']),$_smarty_tpl);?>

  <?php } else { ?>
    <?php echo smarty_function_html_options(array('name'=>'id_book','options'=>$_smarty_tpl->tpl_vars['ksiazka']->value,'class'=>"form-control"),$_smarty_tpl);?>

  <?php }?>
  <label for="">Sygnatura</label>
  <input type="text" name="signature" class="form-control" />
  <label for="">Cena Zakupu</label>
  <input type="text" name="price" class="form-control" />
  <label for="">Stan</label>
  <input type="text" name="condition" class="form-control" />
<?php
}
}
/* {/block 'formBody'} */
}
