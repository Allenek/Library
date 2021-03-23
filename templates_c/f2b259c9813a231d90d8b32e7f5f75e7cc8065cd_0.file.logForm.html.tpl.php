<?php
/* Smarty version 3.1.33, created on 2019-01-12 20:04:15
  from 'D:\xampp\htdocs\Mikula2\templates\Access\logForm.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3a3a2f62d636_30650278',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2b259c9813a231d90d8b32e7f5f75e7cc8065cd' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Mikula2\\templates\\Access\\logForm.html.tpl',
      1 => 1547135024,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c3a3a2f62d636_30650278 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20105638985c3a3a2f626244_23698883', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11363321975c3a3a2f627402_96432189', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../baseTemplate.html.tpl");
}
/* {block 'title'} */
class Block_20105638985c3a3a2f626244_23698883 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_20105638985c3a3a2f626244_23698883',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Formularz logowania<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_11363321975c3a3a2f627402_96432189 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_11363321975c3a3a2f627402_96432189',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
<form id="logform" action="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
zaloguj/" method="post">
  <div class="form-group">
    <label for="login">Login</label>
    <input type="text" class="form-control" id="login" name="login" placeholder="Wprowadź login">
  </div>
  <div class="form-group">
    <label for="password">Hasło</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Wprowadź hasło">
  </div>
  <div class="alert alert-danger collapse" role="alert"></div>
  <button type="submit" class="btn btn-default">Zaloguj</button>
</form>
</div>
<?php
}
}
/* {/block 'body'} */
}
