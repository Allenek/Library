<?php
/* Smarty version 3.1.33, created on 2019-01-03 13:55:54
  from 'C:\xampp\htdocs\Mikula2\templates\Kategoria\showOne.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c2e065a1651d0_33889767',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e84075389a4079006d2a97bc00b3f2a1da56581b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mikula2\\templates\\Kategoria\\showOne.html.tpl',
      1 => 1546517922,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c2e065a1651d0_33889767 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14271485015c2e065a160a48_45939868', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, '../baseTemplate.html.tpl');
}
/* {block 'body'} */
class Block_14271485015c2e065a160a48_45939868 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_14271485015c2e065a160a48_45939868',
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
         <td><?php echo $_smarty_tpl->tpl_vars['data']->value['ID_Kategoria'];?>
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
