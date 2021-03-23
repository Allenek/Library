<?php
/* Smarty version 3.1.33, created on 2019-01-17 13:20:19
  from 'C:\xampp\htdocs\Mikula22\templates\baseBody.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c407303889433_05510511',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b460204e8360f84101622d917f2b4ff4b2c262c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mikula22\\templates\\baseBody.html.tpl',
      1 => 1547727438,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./flashMessage.html.tpl' => 1,
  ),
),false)) {
function content_5c407303889433_05510511 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="container mt-3">
<?php $_smarty_tpl->_subTemplateRender('file:./flashMessage.html.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20779646035c407303888c82_70711406', 'body');
?>

</div>
<?php }
/* {block 'body'} */
class Block_20779646035c407303888c82_70711406 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_20779646035c407303888c82_70711406',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
}
