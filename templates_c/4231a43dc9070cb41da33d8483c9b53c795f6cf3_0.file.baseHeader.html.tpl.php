<?php
/* Smarty version 3.1.33, created on 2018-11-29 20:14:56
  from 'D:\xampp\htdocs\Mikula2\templates\baseHeader.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c003ab07b6277_81484261',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4231a43dc9070cb41da33d8483c9b53c795f6cf3' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Mikula2\\templates\\baseHeader.html.tpl',
      1 => 1543518893,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c003ab07b6277_81484261 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5738028425c003ab07acb96_66658870', 'pageTitle');
?>
</title>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cssFile']->value, 'css');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['css']->value) {
?>
      <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
" />
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </head>
  <body>
<?php }
/* {block 'pageTitle'} */
class Block_5738028425c003ab07acb96_66658870 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pageTitle' => 
  array (
    0 => 'Block_5738028425c003ab07acb96_66658870',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'pageTitle'} */
}
