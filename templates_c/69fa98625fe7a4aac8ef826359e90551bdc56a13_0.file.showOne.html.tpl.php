<?php
/* Smarty version 3.1.33, created on 2019-01-17 13:44:22
  from 'C:\xampp\htdocs\Mikula22\templates\Wydawnictwo\showOne.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c4078a65c3290_55895229',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69fa98625fe7a4aac8ef826359e90551bdc56a13' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mikula22\\templates\\Wydawnictwo\\showOne.html.tpl',
      1 => 1547727438,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c4078a65c3290_55895229 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1803492445c4078a65bdae0_32002449', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, '../baseTemplate.html.tpl');
}
/* {block 'body'} */
class Block_1803492445c4078a65bdae0_32002449 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1803492445c4078a65bdae0_32002449',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <table class="table table-striped">
    <thead>
      <th>Id</th>
      <th>Nazwa</th>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['data']->value['ID_Wydawnictwo'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['data']->value['Nazwa'];?>
</td>
      </tr>
    </tbody>
  </table>
<?php
}
}
/* {/block 'body'} */
}
