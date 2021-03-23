<?php
/* Smarty version 3.1.33, created on 2019-01-12 21:43:15
  from 'D:\xampp\htdocs\Mikula2\templates\baseBody.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3a5163a41266_51731217',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63a15dbb701785db37a8c9de9fb8175df864ba65' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Mikula2\\templates\\baseBody.html.tpl',
      1 => 1547325407,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./flashMessage.html.tpl' => 1,
  ),
),false)) {
function content_5c3a5163a41266_51731217 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="container mt-3">
<?php $_smarty_tpl->_subTemplateRender('file:./flashMessage.html.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13770212685c3a5163a408a9_23157518', 'body');
?>

</div>
<?php }
/* {block 'body'} */
class Block_13770212685c3a5163a408a9_23157518 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_13770212685c3a5163a408a9_23157518',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
}
