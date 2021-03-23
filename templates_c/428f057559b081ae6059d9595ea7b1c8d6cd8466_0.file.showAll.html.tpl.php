<?php
/* Smarty version 3.1.33, created on 2019-01-03 13:28:28
  from 'C:\xampp\htdocs\Mikula2\templates\Egzemplarz\showAll.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c2dffec32faf7_70819781',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '428f057559b081ae6059d9595ea7b1c8d6cd8466' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mikula2\\templates\\Egzemplarz\\showAll.html.tpl',
      1 => 1546517922,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c2dffec32faf7_70819781 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16035442045c2dffec314bd2_25856983', 'pageTitle');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10537691595c2dffec315b40_72236240', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, '../baseTemplate.html.tpl');
}
/* {block 'pageTitle'} */
class Block_16035442045c2dffec314bd2_25856983 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pageTitle' => 
  array (
    0 => 'Block_16035442045c2dffec314bd2_25856983',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Tytuł strony HTML<?php
}
}
/* {/block 'pageTitle'} */
/* {block 'body'} */
class Block_10537691595c2dffec315b40_72236240 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_10537691595c2dffec315b40_72236240',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div>
  <a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
egzemplarz/formularz/" class="btn btn-primary add-btn" data-aisyfaefgw="egzemplarz">+ Dodaj</a>
</div>
  <table class="table table-striped" id="table_id">
    <thead class="thead-dark">
      <tr>
        <th>Id</th>
        <th>Tytuł</th>
        <th>Sygnatura</th>
        <th>Cena Zakupu</th>
        <th>Stan</th>
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
egzemplarz/<?php echo $_smarty_tpl->tpl_vars['value']->value['ID_Egzemplarz'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['ID_Egzemplarz'];?>
</a></td>
          <td><a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
egzemplarz/<?php echo $_smarty_tpl->tpl_vars['value']->value['ID_Egzemplarz'];?>
"><?php echo $_smarty_tpl->tpl_vars['Ksiazka']->value[$_smarty_tpl->tpl_vars['value']->value['ID_Ksiazka']]['Tytul'];?>
</a></td>
          <td><a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
egzemplarz/<?php echo $_smarty_tpl->tpl_vars['value']->value['ID_Egzemplarz'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['Sygnatura'];?>
</a></td>
          <td><a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
egzemplarz/<?php echo $_smarty_tpl->tpl_vars['value']->value['ID_Egzemplarz'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['Cena_Zakupu'];?>
</a></td>
          <td><a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
egzemplarz/<?php echo $_smarty_tpl->tpl_vars['value']->value['ID_Egzemplarz'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['Stan'];?>
</a></td>
          <td>
            <a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
egzemplarz/usun/<?php echo $_smarty_tpl->tpl_vars['value']->value['ID_Egzemplarz'];?>
">Usuń</a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
egzemplarz/edytuj/<?php echo $_smarty_tpl->tpl_vars['value']->value['ID_Egzemplarz'];?>
"class="edit-btn"data-id="<?php echo $_smarty_tpl->tpl_vars['value']->value['ID_Egzemplarz'];?>
" data-aisyfaefgw="egzemplarz">Edytuj</a>
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
