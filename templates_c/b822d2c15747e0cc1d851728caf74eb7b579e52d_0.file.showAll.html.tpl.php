<?php
/* Smarty version 3.1.33, created on 2019-01-03 13:55:02
  from 'C:\xampp\htdocs\Mikula2\templates\Kategoria\showAll.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c2e062694fe01_35489442',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b822d2c15747e0cc1d851728caf74eb7b579e52d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mikula2\\templates\\Kategoria\\showAll.html.tpl',
      1 => 1546517922,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c2e062694fe01_35489442 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10070839215c2e062693a449_97534509', 'pageTitle');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17778002745c2e062693b2e3_52614221', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, '../baseTemplate.html.tpl');
}
/* {block 'pageTitle'} */
class Block_10070839215c2e062693a449_97534509 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pageTitle' => 
  array (
    0 => 'Block_10070839215c2e062693a449_97534509',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Tytuł strony HTML<?php
}
}
/* {/block 'pageTitle'} */
/* {block 'body'} */
class Block_17778002745c2e062693b2e3_52614221 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_17778002745c2e062693b2e3_52614221',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div>
    <a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
kategoria/formularz/" class="btn btn-primary add-btn" data-aisyfaefgw="kategoria">+ Dodaj</a>
  </div>
  <table class="table table-striped" id="table_id">
    <thead class="thead-dark">
      <tr>
        <th>Id</th>
        <th>Kategoria</th>
        <th></th>
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
