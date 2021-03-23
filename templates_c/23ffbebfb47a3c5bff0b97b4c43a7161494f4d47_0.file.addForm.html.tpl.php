<?php
/* Smarty version 3.1.33, created on 2019-01-03 13:28:29
  from 'C:\xampp\htdocs\Mikula2\templates\Egzemplarz\addForm.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c2dffeda6db75_28738777',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23ffbebfb47a3c5bff0b97b4c43a7161494f4d47' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mikula2\\templates\\Egzemplarz\\addForm.html.tpl',
      1 => 1546517922,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c2dffeda6db75_28738777 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13542866985c2dffeda5c225_88526838', 'action');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17363052645c2dffeda5d380_45696141', 'formTitle');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14627539315c2dffeda5e0f4_24445911', 'formBody');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, '../baseModal.html.tpl');
}
/* {block 'action'} */
class Block_13542866985c2dffeda5c225_88526838 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_13542866985c2dffeda5c225_88526838',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
egzemplarz/dodaj/<?php
}
}
/* {/block 'action'} */
/* {block 'formTitle'} */
class Block_17363052645c2dffeda5d380_45696141 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'formTitle' => 
  array (
    0 => 'Block_17363052645c2dffeda5d380_45696141',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Dodawanie egzemplarza<?php
}
}
/* {/block 'formTitle'} */
/* {block 'formBody'} */
class Block_14627539315c2dffeda5e0f4_24445911 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'formBody' => 
  array (
    0 => 'Block_14627539315c2dffeda5e0f4_24445911',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\Mikula2\\vendor\\smarty\\smarty\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
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
