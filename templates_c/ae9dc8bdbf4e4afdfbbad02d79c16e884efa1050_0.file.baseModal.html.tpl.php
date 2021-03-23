<?php
/* Smarty version 3.1.33, created on 2019-01-02 17:21:53
  from 'D:\xampp\htdocs\Mikula2\templates\baseModal.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c2ce521019056_01932973',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae9dc8bdbf4e4afdfbbad02d79c16e884efa1050' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Mikula2\\templates\\baseModal.html.tpl',
      1 => 1546446108,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c2ce521019056_01932973 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="modal-header">
  <h5 class="modal-title"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8709578895c2ce521011126_01199365', 'formTitle');
?>
</h5>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div class="modal-body">
  <form class="modal-form" action="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19364353325c2ce5210177d7_86228673', 'action');
?>
" method="post" id="myform">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17488989005c2ce521018194_41766675', 'formBody');
?>

  </form>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-primary" type="submit" onclick="$('.modal-form').submit()"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14845199045c2ce521018890_24126155', 'submit');
?>
</button>
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Anuluj</button>
</div>
<?php }
/* {block 'formTitle'} */
class Block_8709578895c2ce521011126_01199365 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'formTitle' => 
  array (
    0 => 'Block_8709578895c2ce521011126_01199365',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'formTitle'} */
/* {block 'action'} */
class Block_19364353325c2ce5210177d7_86228673 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_19364353325c2ce5210177d7_86228673',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'action'} */
/* {block 'formBody'} */
class Block_17488989005c2ce521018194_41766675 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'formBody' => 
  array (
    0 => 'Block_17488989005c2ce521018194_41766675',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'formBody'} */
/* {block 'submit'} */
class Block_14845199045c2ce521018890_24126155 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'submit' => 
  array (
    0 => 'Block_14845199045c2ce521018890_24126155',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Prześlij<?php
}
}
/* {/block 'submit'} */
}
