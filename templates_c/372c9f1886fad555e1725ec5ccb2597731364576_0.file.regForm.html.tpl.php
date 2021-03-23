<?php
/* Smarty version 3.1.33, created on 2019-01-14 20:09:19
  from 'D:\xampp\htdocs\Mikula2\templates\Access\regForm.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3cde5f45d8d2_78399344',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '372c9f1886fad555e1725ec5ccb2597731364576' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Mikula2\\templates\\Access\\regForm.html.tpl',
      1 => 1547492955,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c3cde5f45d8d2_78399344 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4813154915c3cde5f454c32_32443898', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19205472485c3cde5f4556c9_27018978', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../baseTemplate.html.tpl");
}
/* {block 'title'} */
class Block_4813154915c3cde5f454c32_32443898 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_4813154915c3cde5f454c32_32443898',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Formularz Rejestracji<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_19205472485c3cde5f4556c9_27018978 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_19205472485c3cde5f4556c9_27018978',
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
