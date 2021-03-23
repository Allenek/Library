<?php
/* Smarty version 3.1.33, created on 2019-01-17 13:20:19
  from 'C:\xampp\htdocs\Mikula22\templates\baseHeader.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c4073038675b5_11568477',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e375fc6e33f5a28b2b8455398f308870b34d7f7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mikula22\\templates\\baseHeader.html.tpl',
      1 => 1547727438,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c4073038675b5_11568477 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6344896215c407303865a53_13002642', 'pageTitle');
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
class Block_6344896215c407303865a53_13002642 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pageTitle' => 
  array (
    0 => 'Block_6344896215c407303865a53_13002642',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'pageTitle'} */
}
