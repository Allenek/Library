<?php
/* Smarty version 3.1.33, created on 2019-01-12 21:22:41
  from 'D:\xampp\htdocs\Mikula2\templates\Kategoria\showAll.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3a4c918f1e30_42340923',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca1b3c49d146b2de30cc06c472d3e03ece107c08' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Mikula2\\templates\\Kategoria\\showAll.html.tpl',
      1 => 1547324541,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c3a4c918f1e30_42340923 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16275513715c3a4c918de3f8_31222167', 'pageTitle');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19156575065c3a4c918deec7_15348476', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, '../baseTemplate.html.tpl');
}
/* {block 'pageTitle'} */
class Block_16275513715c3a4c918de3f8_31222167 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pageTitle' => 
  array (
    0 => 'Block_16275513715c3a4c918de3f8_31222167',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Tytuł strony HTML<?php
}
}
/* {/block 'pageTitle'} */
/* {block 'body'} */
class Block_19156575065c3a4c918deec7_15348476 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_19156575065c3a4c918deec7_15348476',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div>
    <?php if ($_smarty_tpl->tpl_vars['currentUser']->value != false) {?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
kategoria/formularz/" class="btn btn-primary add-btn" data-aisyfaefgw="kategoria">+ Dodaj</a>
    <?php }?>
  </div>
  <table class="table table-striped" id="table_id">
    <thead class="thead-dark">
      <tr>
        <th>Id</th>
        <th>Kategoria</th>
        <th>Opcje</th>
      </tr>
    </thead>
    <tbody>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
        <tr>
          <td><a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
kategoria/<?php echo $_smarty_tpl->tpl_vars['value']->value['ID_Kategoria'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['ID_Kategoria'];?>
</a></td>
          <td><a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
kategoria/<?php echo $_smarty_tpl->tpl_vars['value']->value['ID_Kategoria'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['Nazwa'];?>
</a></td>
          <td>
            <?php if ($_smarty_tpl->tpl_vars['currentUser']->value != false) {?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
kategoria/usun/<?php echo $_smarty_tpl->tpl_vars['value']->value['ID_Kategoria'];?>
">Usuń</a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
kategoria/edytuj/<?php echo $_smarty_tpl->tpl_vars['value']->value['ID_Kategoria'];?>
" class="edit-btn"data-id="<?php echo $_smarty_tpl->tpl_vars['value']->value['ID_Kategoria'];?>
" data-aisyfaefgw="kategoria">Edytuj</a>
            <?php }?>
          </td>
        </tr>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
  </table>
<?php
}
}
/* {/block 'body'} */
}
