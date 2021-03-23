<?php
/* Smarty version 3.1.33, created on 2019-01-17 13:34:45
  from 'C:\xampp\htdocs\Mikula22\templates\Autor\showAll.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c4076652584b8_04156165',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22ae1cf683bdc4c0f09192be54eb5e2da7b5e31c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mikula22\\templates\\Autor\\showAll.html.tpl',
      1 => 1547727438,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c4076652584b8_04156165 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21338486355c40766523a104_51984069', 'pageTitle');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20183750215c40766523ae71_67986700', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, '../baseTemplate.html.tpl');
}
/* {block 'pageTitle'} */
class Block_21338486355c40766523a104_51984069 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pageTitle' => 
  array (
    0 => 'Block_21338486355c40766523a104_51984069',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Tytuł strony HTML<?php
}
}
/* {/block 'pageTitle'} */
/* {block 'body'} */
class Block_20183750215c40766523ae71_67986700 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_20183750215c40766523ae71_67986700',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div>
    <?php if ($_smarty_tpl->tpl_vars['currentUser']->value != false) {?>
      <a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
autor/formularz/" class="btn btn-primary add-btn" data-aisyfaefgw="autor">+ Dodaj</a>
    <?php }?>
  </div>
  <table class="table table-striped" id="table_id">
    <thead class="thead-dark">
      <tr>
        <th>Id</th>
        <th>Imie</th>
        <th>Nazwisko</th>
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
autor/<?php echo $_smarty_tpl->tpl_vars['value']->value['ID_Autor'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['ID_Autor'];?>
</a></td>
          <td><a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
autor/<?php echo $_smarty_tpl->tpl_vars['value']->value['ID_Autor'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['Imie'];?>
</a></td>
          <td><a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
autor/<?php echo $_smarty_tpl->tpl_vars['value']->value['ID_Autor'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['Nazwisko'];?>
</a></td>
          <td>
            <?php if ($_smarty_tpl->tpl_vars['currentUser']->value != false) {?>
              <a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
autor/usun/<?php echo $_smarty_tpl->tpl_vars['value']->value['ID_Autor'];?>
">Usuń</a>
              <a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
autor/edytuj/<?php echo $_smarty_tpl->tpl_vars['value']->value['ID_Autor'];?>
"class="edit-btn" data-id="<?php echo $_smarty_tpl->tpl_vars['value']->value['ID_Autor'];?>
" data-aisyfaefgw="autor">Edytuj</a>
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
