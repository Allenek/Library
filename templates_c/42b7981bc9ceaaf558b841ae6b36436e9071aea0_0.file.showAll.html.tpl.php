<?php
/* Smarty version 3.1.33, created on 2019-01-10 16:46:37
  from 'C:\xampp\htdocs\Mikula2\Mikula2\templates\Ksiazka\showAll.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3768dd265d70_35640728',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42b7981bc9ceaaf558b841ae6b36436e9071aea0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mikula2\\Mikula2\\templates\\Ksiazka\\showAll.html.tpl',
      1 => 1547135023,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c3768dd265d70_35640728 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10240986835c3768dd23df78_67546380', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, '../baseTemplate.html.tpl');
}
/* {block 'body'} */
class Block_10240986835c3768dd23df78_67546380 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_10240986835c3768dd23df78_67546380',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div>
  <a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
ksiazka/formularz/" class="btn btn-primary add-btn" data-aisyfaefgw="ksiazka">+ Dodaj</a>
</div>
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
        <th>Usuń/Edytuj</th>
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
                <?php echo $_smarty_tpl->tpl_vars['Autor']->value[$_smarty_tpl->tpl_vars['v']->value['ID_Autor']]['Imie'];?>
 <?php echo $_smarty_tpl->tpl_vars['Autor']->value[$_smarty_tpl->tpl_vars['v']->value['ID_Autor']]['Nazwisko'];?>
,
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
