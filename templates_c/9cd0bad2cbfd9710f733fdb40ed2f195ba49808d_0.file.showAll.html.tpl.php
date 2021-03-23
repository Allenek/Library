<?php
/* Smarty version 3.1.33, created on 2019-01-12 21:58:29
  from 'D:\xampp\htdocs\Mikula2\templates\Ksiazka\showAll.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3a54f576b1a2_18776612',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9cd0bad2cbfd9710f733fdb40ed2f195ba49808d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Mikula2\\templates\\Ksiazka\\showAll.html.tpl',
      1 => 1547326543,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c3a54f576b1a2_18776612 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_486769005c3a54f5746329_30729882', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, '../baseTemplate.html.tpl');
}
/* {block 'body'} */
class Block_486769005c3a54f5746329_30729882 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_486769005c3a54f5746329_30729882',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['currentUser']->value != false) {?>
<div>
  <a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
ksiazka/formularz/" class="btn btn-primary add-btn" data-aisyfaefgw="ksiazka">+ Dodaj</a>
</div>
<?php }?>
  <table class="table table-striped" id="table_id">
    <thead class="thead-dark">
      <tr>
        <th>Id</th>
        <th>Autor</th>
        <th>Kategoria</th>
        <th>Tytul</th>
        <th>Opis</th>
        <th>Wydawnictwo</th>
        <th>Rok_Wydania</th>
        <?php if ($_smarty_tpl->tpl_vars['currentUser']->value != false) {?>
        <th>Opcje</th>
        <?php }?>
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
ksiazka/<?php echo $_smarty_tpl->tpl_vars['value']->value['ID_Ksiazka'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['ID_Ksiazka'];?>
</a></td>
          <td><a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
ksiazka/<?php echo $_smarty_tpl->tpl_vars['value']->value['ID_Ksiazka'];?>
">
            <?php if (isset($_smarty_tpl->tpl_vars['ksiazka_autor']->value[$_smarty_tpl->tpl_vars['value']->value['ID_Ksiazka']])) {?>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ksiazka_autor']->value[$_smarty_tpl->tpl_vars['value']->value['ID_Ksiazka']], 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
ksiazka/autor/<?php echo $_smarty_tpl->tpl_vars['v']->value['ID_Autor'];?>
"><?php echo $_smarty_tpl->tpl_vars['Autor']->value[$_smarty_tpl->tpl_vars['v']->value['ID_Autor']]['Imie'];?>
 <?php echo $_smarty_tpl->tpl_vars['Autor']->value[$_smarty_tpl->tpl_vars['v']->value['ID_Autor']]['Nazwisko'];?>
</a>,
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
          </a></td>
          <td><a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
ksiazka/<?php echo $_smarty_tpl->tpl_vars['value']->value['ID_Ksiazka'];?>
"><?php echo $_smarty_tpl->tpl_vars['Kategoria']->value[$_smarty_tpl->tpl_vars['value']->value['ID_Kategoria']]['Nazwa'];?>
</a></td>
          <td><a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
ksiazka/<?php echo $_smarty_tpl->tpl_vars['value']->value['ID_Ksiazka'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['Tytul'];?>
</a></td>
          <td><a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
ksiazka/<?php echo $_smarty_tpl->tpl_vars['value']->value['ID_Ksiazka'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['Opis'];?>
</a></td>
          <td><a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
ksiazka/<?php echo $_smarty_tpl->tpl_vars['value']->value['ID_Ksiazka'];?>
"><?php echo $_smarty_tpl->tpl_vars['Wydawnictwo']->value[$_smarty_tpl->tpl_vars['value']->value['ID_Wydawnictwo']]['Nazwa'];?>
</a></td>
          <td><a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
ksiazka/<?php echo $_smarty_tpl->tpl_vars['value']->value['ID_Ksiazka'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['Rok_Wydania'];?>
</a></td>
          <td>
            <?php if ($_smarty_tpl->tpl_vars['currentUser']->value != false) {?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
ksiazka/usun/<?php echo $_smarty_tpl->tpl_vars['value']->value['ID_Ksiazka'];?>
">Usuń</a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
ksiazka/edytuj/<?php echo $_smarty_tpl->tpl_vars['value']->value['ID_Ksiazka'];?>
" class="edit-btn" data-id="<?php echo $_smarty_tpl->tpl_vars['value']->value['ID_Ksiazka'];?>
" data-aisyfaefgw="ksiazka">Edytuj</a>
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
