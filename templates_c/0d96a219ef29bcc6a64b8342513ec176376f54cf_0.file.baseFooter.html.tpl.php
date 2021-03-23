<?php
/* Smarty version 3.1.33, created on 2019-01-03 13:22:14
  from 'C:\xampp\htdocs\Mikula2\templates\baseFooter.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c2dfe7671a714_18863993',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d96a219ef29bcc6a64b8342513ec176376f54cf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mikula2\\templates\\baseFooter.html.tpl',
      1 => 1546517922,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./modal.html.tpl' => 1,
  ),
),false)) {
function content_5c2dfe7671a714_18863993 (Smarty_Internal_Template $_smarty_tpl) {
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
