<?php
/* Smarty version 3.1.33, created on 2019-01-17 13:34:46
  from 'C:\xampp\htdocs\Mikula22\templates\Kategoria\showAll.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c407666c3b252_67846044',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7401ac9ce2367a471e43461f38bca256f2064b58' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mikula22\\templates\\Kategoria\\showAll.html.tpl',
      1 => 1547727438,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c407666c3b252_67846044 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17347163265c407666c20972_90829923', 'pageTitle');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10706273685c407666c21683_62921549', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, '../baseTemplate.html.tpl');
}
/* {block 'pageTitle'} */
class Block_17347163265c407666c20972_90829923 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pageTitle' => 
  array (
    0 => 'Block_17347163265c407666c20972_90829923',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Tytuł strony HTML<?php
}
}
/* {/block 'pageTitle'} */
/* {block 'body'} */
class Block_10706273685c407666c21683_62921549 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_10706273685c407666c21683_62921549',
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
