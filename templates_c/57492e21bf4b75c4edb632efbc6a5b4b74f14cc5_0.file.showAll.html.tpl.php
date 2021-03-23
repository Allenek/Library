<?php
/* Smarty version 3.1.33, created on 2019-01-17 13:20:27
  from 'C:\xampp\htdocs\Mikula22\templates\Egzemplarz\showAll.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c40730b4a7953_92598879',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57492e21bf4b75c4edb632efbc6a5b4b74f14cc5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mikula22\\templates\\Egzemplarz\\showAll.html.tpl',
      1 => 1547727438,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c40730b4a7953_92598879 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17323406325c40730b4882a3_69748398', 'pageTitle');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8605721215c40730b4893d0_08260108', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, '../baseTemplate.html.tpl');
}
/* {block 'pageTitle'} */
class Block_17323406325c40730b4882a3_69748398 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pageTitle' => 
  array (
    0 => 'Block_17323406325c40730b4882a3_69748398',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Tytuł strony HTML<?php
}
}
/* {/block 'pageTitle'} */
/* {block 'body'} */
class Block_8605721215c40730b4893d0_08260108 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_8605721215c40730b4893d0_08260108',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div>
  <?php if ($_smarty_tpl->tpl_vars['currentUser']->value != false) {?>
  <a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
egzemplarz/formularz/" class="btn btn-primary add-btn" data-aisyfaefgw="egzemplarz">+ Dodaj</a>
  <?php }?>
</div>
  <table class="table table-striped" id="table_id">
    <thead class="thead-dark">
      <tr>
        <th>Id</th>
        <th>Tytuł</th>
        <th>Sygnatura</th>
        <th>Cena Zakupu</th>
        <th>Stan</th>
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
            <?php if ($_smarty_tpl->tpl_vars['currentUser']->value != false) {?>
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
