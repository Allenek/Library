<?php
/* Smarty version 3.1.33, created on 2019-01-10 15:56:36
  from 'C:\xampp\htdocs\Mikula2\templates\Wydawnictwo\showAll.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c375d2462f473_52566235',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28237a696960c6394f07a4e57280250c16581cc2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mikula2\\templates\\Wydawnictwo\\showAll.html.tpl',
      1 => 1546517922,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c375d2462f473_52566235 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2779331335c375d2456d031_34859197', 'pageTitle');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_167692185c375d2456e7f8_01903477', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, '../baseTemplate.html.tpl');
}
/* {block 'pageTitle'} */
class Block_2779331335c375d2456d031_34859197 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pageTitle' => 
  array (
    0 => 'Block_2779331335c375d2456d031_34859197',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Tytuł strony HTML<?php
}
}
/* {/block 'pageTitle'} */
/* {block 'body'} */
class Block_167692185c375d2456e7f8_01903477 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_167692185c375d2456e7f8_01903477',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div>
    <a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
wydawnictwo/formularz/" class="btn btn-primary add-btn" data-aisyfaefgw="wydawnictwo">+ Dodaj</a>
  </div>
  <table class="table table-striped" id="table_id">
    <thead class="thead-dark">
      <tr>
        <th>Id</th>
        <th>Wydawnictwo</th>
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
