<?php
/* Smarty version 3.1.33, created on 2019-01-03 13:25:59
  from 'C:\xampp\htdocs\Mikula2\templates\Ksiazka\editForm.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c2dff57284b20_50780358',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '542bea07f75087102d54d69d3da0caccca40a29c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mikula2\\templates\\Ksiazka\\editForm.html.tpl',
      1 => 1546517922,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c2dff57284b20_50780358 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13323111375c2dff5725f281_70441475', 'action');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11327664915c2dff57260060_33167827', 'formTitle');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3327493055c2dff57265472_00249554', 'formBody');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, '../baseModal.html.tpl');
}
/* {block 'action'} */
class Block_13323111375c2dff5725f281_70441475 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_13323111375c2dff5725f281_70441475',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
ksiazka/aktualizuj/<?php
}
}
/* {/block 'action'} */
/* {block 'formTitle'} */
class Block_11327664915c2dff57260060_33167827 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'formTitle' => 
  array (
    0 => 'Block_11327664915c2dff57260060_33167827',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Edycja Ksiązki nr <?php echo $_smarty_tpl->tpl_vars['data']->value['ID_Ksiazka'];
}
}
/* {/block 'formTitle'} */
/* {block 'formBody'} */
class Block_3327493055c2dff57265472_00249554 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'formBody' => 
  array (
    0 => 'Block_3327493055c2dff57265472_00249554',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\Mikula2\\vendor\\smarty\\smarty\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
?>

  <input type="hidden" name="ID_Ksiazka" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['ID_Ksiazka'])) {
echo $_smarty_tpl->tpl_vars['data']->value['ID_Ksiazka'];
}?>">
  <label for="">Kategoria</label>
  <?php if (isset($_smarty_tpl->tpl_vars['data']->value['ID_Kategoria'])) {?>
    <?php echo smarty_function_html_options(array('name'=>'ID_Kategoria','options'=>$_smarty_tpl->tpl_vars['kategoria']->value,'class'=>"form-control",'selected'=>$_smarty_tpl->tpl_vars['data']->value['ID_Kategoria']),$_smarty_tpl);?>

  <?php } else { ?>
    <?php echo smarty_function_html_options(array('name'=>'ID_Kategoria','options'=>$_smarty_tpl->tpl_vars['kategoria']->value,'class'=>"form-control"),$_smarty_tpl);?>

  <?php }?>
  <label for=""><strong>Autor</strong></label>
  <select class="form-control" name="ID_Autor[]" multiple>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['autor']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
      <?php if (in_array($_smarty_tpl->tpl_vars['k']->value,$_smarty_tpl->tpl_vars['ksiazka_autorzy']->value)) {?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" selected><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
      <?php } else { ?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
      <?php }?>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </select>
  <label for="">Tytuł</label>
  <input type="text" name="Tytul" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['Tytul'])) {
echo $_smarty_tpl->tpl_vars['data']->value['Tytul'];
}?>" class="form-control" />
  <label for="">Opis</label>
  <input type="text" name="Opis" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['Opis'])) {
echo $_smarty_tpl->tpl_vars['data']->value['Opis'];
}?>" class="form-control" />
  <label for="">Wydawnictwo</label>
  <?php if (isset($_smarty_tpl->tpl_vars['data']->value['ID_Wydawnictwo'])) {?>
    <?php echo smarty_function_html_options(array('name'=>'ID_Wydawnictwo','options'=>$_smarty_tpl->tpl_vars['wydawnictwo']->value,'class'=>"form-control",'selected'=>$_smarty_tpl->tpl_vars['data']->value['ID_Wydawnictwo']),$_smarty_tpl);?>

  <?php } else { ?>
    <?php echo smarty_function_html_options(array('name'=>'ID_Wydawnictwo','options'=>$_smarty_tpl->tpl_vars['wydawnictwo']->value,'class'=>"form-control"),$_smarty_tpl);?>

  <?php }?>
  <label for="">Rok wydania</label>
  <input type="text" name="Rok_Wydania" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['Rok_Wydania'])) {
echo $_smarty_tpl->tpl_vars['data']->value['Rok_Wydania'];
}?>" class="form-control" />
<?php
}
}
/* {/block 'formBody'} */
}
