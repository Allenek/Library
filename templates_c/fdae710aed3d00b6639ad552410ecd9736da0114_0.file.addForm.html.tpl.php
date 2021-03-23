<?php
/* Smarty version 3.1.33, created on 2019-01-17 13:46:29
  from 'C:\xampp\htdocs\Mikula22\templates\Egzemplarz\addForm.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c40792553abf7_25295414',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fdae710aed3d00b6639ad552410ecd9736da0114' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mikula22\\templates\\Egzemplarz\\addForm.html.tpl',
      1 => 1547727438,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c40792553abf7_25295414 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10641462585c407925528d51_95787712', 'action');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5920123435c407925529ba7_38426908', 'formTitle');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9849312335c40792552a730_18401415', 'formBody');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, '../baseModal.html.tpl');
}
/* {block 'action'} */
class Block_10641462585c407925528d51_95787712 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_10641462585c407925528d51_95787712',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
egzemplarz/dodaj/<?php
}
}
/* {/block 'action'} */
/* {block 'formTitle'} */
class Block_5920123435c407925529ba7_38426908 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'formTitle' => 
  array (
    0 => 'Block_5920123435c407925529ba7_38426908',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Dodawanie egzemplarza<?php
}
}
/* {/block 'formTitle'} */
/* {block 'formBody'} */
class Block_9849312335c40792552a730_18401415 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'formBody' => 
  array (
    0 => 'Block_9849312335c40792552a730_18401415',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\Mikula22\\vendor\\smarty\\smarty\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
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
