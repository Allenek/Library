<?php
/* Smarty version 3.1.33, created on 2019-01-17 13:22:37
  from 'C:\xampp\htdocs\Mikula22\templates\baseModal.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c40738d7ff742_75709752',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2c0a2a19bb47e406ca90f345e9eced9bde783fb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mikula22\\templates\\baseModal.html.tpl',
      1 => 1547727438,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c40738d7ff742_75709752 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="modal-header">
  <h5 class="modal-title"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6033710665c40738d7fa542_46167895', 'formTitle');
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8614523065c40738d7fdb70_62756042', 'action');
?>
" method="post" id="myform">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8895525495c40738d7fe542_60936998', 'formBody');
?>

  </form>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-primary" type="submit" onclick="$('.modal-form').submit()"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9218005235c40738d7feee5_13110056', 'submit');
?>
</button>
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Anuluj</button>
</div>
<?php }
/* {block 'formTitle'} */
class Block_6033710665c40738d7fa542_46167895 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'formTitle' => 
  array (
    0 => 'Block_6033710665c40738d7fa542_46167895',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'formTitle'} */
/* {block 'action'} */
class Block_8614523065c40738d7fdb70_62756042 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_8614523065c40738d7fdb70_62756042',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'action'} */
/* {block 'formBody'} */
class Block_8895525495c40738d7fe542_60936998 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'formBody' => 
  array (
    0 => 'Block_8895525495c40738d7fe542_60936998',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'formBody'} */
/* {block 'submit'} */
class Block_9218005235c40738d7feee5_13110056 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'submit' => 
  array (
    0 => 'Block_9218005235c40738d7feee5_13110056',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Prześlij<?php
}
}
/* {/block 'submit'} */
}
