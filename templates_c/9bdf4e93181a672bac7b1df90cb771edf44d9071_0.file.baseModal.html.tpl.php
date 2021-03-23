<?php
/* Smarty version 3.1.33, created on 2019-01-03 13:22:25
  from 'C:\xampp\htdocs\Mikula2\templates\baseModal.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c2dfe813fd780_20930227',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9bdf4e93181a672bac7b1df90cb771edf44d9071' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mikula2\\templates\\baseModal.html.tpl',
      1 => 1546517922,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c2dfe813fd780_20930227 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="modal-header">
  <h5 class="modal-title"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6933185615c2dfe813f59a4_69509535', 'formTitle');
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_609298645c2dfe813fb670_87416279', 'action');
?>
" method="post" id="myform">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11763107225c2dfe813fc188_71808480', 'formBody');
?>

  </form>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-primary" type="submit" onclick="$('.modal-form').submit()"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9539270195c2dfe813fcb71_56859280', 'submit');
?>
</button>
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Anuluj</button>
</div>
<?php }
/* {block 'formTitle'} */
class Block_6933185615c2dfe813f59a4_69509535 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'formTitle' => 
  array (
    0 => 'Block_6933185615c2dfe813f59a4_69509535',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'formTitle'} */
/* {block 'action'} */
class Block_609298645c2dfe813fb670_87416279 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_609298645c2dfe813fb670_87416279',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'action'} */
/* {block 'formBody'} */
class Block_11763107225c2dfe813fc188_71808480 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'formBody' => 
  array (
    0 => 'Block_11763107225c2dfe813fc188_71808480',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'formBody'} */
/* {block 'submit'} */
class Block_9539270195c2dfe813fcb71_56859280 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'submit' => 
  array (
    0 => 'Block_9539270195c2dfe813fcb71_56859280',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Prześlij<?php
}
}
/* {/block 'submit'} */
}
