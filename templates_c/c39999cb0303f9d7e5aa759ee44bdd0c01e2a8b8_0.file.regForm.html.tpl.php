<?php
/* Smarty version 3.1.33, created on 2019-01-17 13:22:45
  from 'C:\xampp\htdocs\Mikula22\templates\Access\regForm.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c407395427d06_26891069',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c39999cb0303f9d7e5aa759ee44bdd0c01e2a8b8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mikula22\\templates\\Access\\regForm.html.tpl',
      1 => 1547727438,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c407395427d06_26891069 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4711605175c4073954213f3_69685446', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6222633435c407395422224_33316091', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../baseTemplate.html.tpl");
}
/* {block 'title'} */
class Block_4711605175c4073954213f3_69685446 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_4711605175c4073954213f3_69685446',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Formularz Rejestracji<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_6222633435c407395422224_33316091 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_6222633435c407395422224_33316091',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
<form id="logform" action="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
zarejestruj/" method="post">
  <div class="form-group">
    <label for="login">Login</label>
    <input type="text" class="form-control" id="login" name="login" placeholder="Wprowadź login">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Wprowadź hasło">
  </div>
  <div class="form-group">
    <label for="password_confirm">Password repeat</label>
    <input type="password" class="form-control" id="password_confirm" name="password_confirm" placeholder="Powtórz hasło">
  </div>
    <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Wprowadź imię">
  </div>
    <div class="form-group">
    <label for="surname">Surname</label>
    <input type="text" class="form-control" id="surname" name="surname" placeholder="Wprowadź nazwisko">
  </div>
  <div class="alert alert-danger collapse" role="alert"></div>
  <button type="submit" class="btn btn-default">Zarejestruj się</button>
</form>
</div>
<?php
}
}
/* {/block 'body'} */
}
