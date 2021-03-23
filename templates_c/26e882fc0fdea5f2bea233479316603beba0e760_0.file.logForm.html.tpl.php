<?php
/* Smarty version 3.1.33, created on 2019-01-17 13:20:29
  from 'C:\xampp\htdocs\Mikula22\templates\Access\logForm.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c40730d6156e0_21139876',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26e882fc0fdea5f2bea233479316603beba0e760' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mikula22\\templates\\Access\\logForm.html.tpl',
      1 => 1547727438,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c40730d6156e0_21139876 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10869520155c40730d60e568_86853282', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12779334905c40730d60f358_00251079', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../baseTemplate.html.tpl");
}
/* {block 'title'} */
class Block_10869520155c40730d60e568_86853282 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_10869520155c40730d60e568_86853282',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Formularz logowania<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_12779334905c40730d60f358_00251079 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_12779334905c40730d60f358_00251079',
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
