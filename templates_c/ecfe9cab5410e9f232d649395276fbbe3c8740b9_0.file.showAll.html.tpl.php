<?php
/* Smarty version 3.1.33, created on 2019-01-17 13:20:24
  from 'C:\xampp\htdocs\Mikula22\templates\Wydawnictwo\showAll.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c407308acf3c2_40678858',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ecfe9cab5410e9f232d649395276fbbe3c8740b9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mikula22\\templates\\Wydawnictwo\\showAll.html.tpl',
      1 => 1547727438,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c407308acf3c2_40678858 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20105255505c407308ab4282_45413436', 'pageTitle');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21455460985c407308ab5898_88067113', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, '../baseTemplate.html.tpl');
}
/* {block 'pageTitle'} */
class Block_20105255505c407308ab4282_45413436 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pageTitle' => 
  array (
    0 => 'Block_20105255505c407308ab4282_45413436',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Tytuł strony HTML<?php
}
}
/* {/block 'pageTitle'} */
/* {block 'body'} */
class Block_21455460985c407308ab5898_88067113 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_21455460985c407308ab5898_88067113',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div>
    <?php if ($_smarty_tpl->tpl_vars['currentUser']->value != false) {?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
wydawnictwo/formularz/" class="btn btn-primary add-btn" data-aisyfaefgw="wydawnictwo">+ Dodaj</a>
    <?php }?>
  </div>
  <table class="table table-striped" id="table_id">
    <thead class="thead-dark">
      <tr>
        <th>Id</th>
        <th>Wydawnictwo</th>
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
wydawnictwo/<?php echo $_smarty_tpl->tpl_vars['value']->value['ID_Wydawnictwo'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['ID_Wydawnictwo'];?>
</a></td>
          <td><a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
wydawnictwo/<?php echo $_smarty_tpl->tpl_vars['value']->value['ID_Wydawnictwo'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['Nazwa'];?>
</a></td>
          <td>
            <?php if ($_smarty_tpl->tpl_vars['currentUser']->value != false) {?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
wydawnictwo/usun/<?php echo $_smarty_tpl->tpl_vars['value']->value['ID_Wydawnictwo'];?>
">Usuń</a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
wydawnictwo/edytuj/<?php echo $_smarty_tpl->tpl_vars['value']->value['ID_Wydawnictwo'];?>
"class="edit-btn" data-id="<?php echo $_smarty_tpl->tpl_vars['value']->value['ID_Wydawnictwo'];?>
" data-aisyfaefgw="wydawnictwo">Edytuj</a>
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
