<?php
/* Smarty version 3.1.33, created on 2019-01-10 16:46:37
  from 'C:\xampp\htdocs\Mikula2\Mikula2\templates\baseFooter.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3768dd2c6417_35187327',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df70115ade56dc8b7a6743fe3fee9d6867f8b338' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mikula2\\Mikula2\\templates\\baseFooter.html.tpl',
      1 => 1547135023,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./modal.html.tpl' => 1,
  ),
),false)) {
function content_5c3768dd2c6417_35187327 (Smarty_Internal_Template $_smarty_tpl) {
?>  <?php $_smarty_tpl->_subTemplateRender("file:./modal.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <footer class="position-fixed bg-dark text-light w-100" style="bottom: 0;">
    @ Krystian Mikuła 26554
  </footer>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['jsFile']->value, 'js');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['js']->value) {
?>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
" charset="utf-8"><?php echo '</script'; ?>
>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </body>
</html>
<?php }
}
