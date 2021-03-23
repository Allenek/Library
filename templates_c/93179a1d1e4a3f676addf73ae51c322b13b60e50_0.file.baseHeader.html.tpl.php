<?php
/* Smarty version 3.1.33, created on 2019-01-10 16:46:37
  from 'C:\xampp\htdocs\Mikula2\Mikula2\templates\baseHeader.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3768dd2929f1_86887771',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93179a1d1e4a3f676addf73ae51c322b13b60e50' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mikula2\\Mikula2\\templates\\baseHeader.html.tpl',
      1 => 1547135023,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c3768dd2929f1_86887771 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16798106955c3768dd290d15_83360476', 'pageTitle');
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
class Block_16798106955c3768dd290d15_83360476 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pageTitle' => 
  array (
    0 => 'Block_16798106955c3768dd290d15_83360476',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'pageTitle'} */
}
