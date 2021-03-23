<?php
/* Smarty version 3.1.33, created on 2019-01-12 21:22:37
  from 'D:\xampp\htdocs\Mikula2\templates\Egzemplarz\showAll.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3a4c8d869577_75818264',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91b6c37589b420f24d6fb837e0d302dcae581063' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Mikula2\\templates\\Egzemplarz\\showAll.html.tpl',
      1 => 1547324550,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c3a4c8d869577_75818264 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1211385075c3a4c8d84f151_78489161', 'pageTitle');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_257780315c3a4c8d84fc27_98351917', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, '../baseTemplate.html.tpl');
}
/* {block 'pageTitle'} */
class Block_1211385075c3a4c8d84f151_78489161 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pageTitle' => 
  array (
    0 => 'Block_1211385075c3a4c8d84f151_78489161',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Tytuł strony HTML<?php
}
}
/* {/block 'pageTitle'} */
/* {block 'body'} */
class Block_257780315c3a4c8d84fc27_98351917 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_257780315c3a4c8d84fc27_98351917',
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
