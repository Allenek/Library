<?php
/* Smarty version 3.1.33, created on 2018-12-05 12:18:39
  from 'D:\xampp\htdocs\Mikula2\templates\Autor\showOne.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c07b40f84c485_09554444',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c89f8ed8942723505a25eb4fba1bccdd2805a828' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Mikula2\\templates\\Autor\\showOne.html.tpl',
      1 => 1544008599,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c07b40f84c485_09554444 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15628801875c07b40f847350_01736386', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, '../baseTemplate.html.tpl');
}
/* {block 'body'} */
class Block_15628801875c07b40f847350_01736386 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_15628801875c07b40f847350_01736386',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

   <table class="table table-striped">
     <thead>
       <th>Id</th>
       <th>Imie</th>
       <th>Nazwisko</th>
     </thead>
     <tbody>
       <tr>
         <td><?php echo $_smarty_tpl->tpl_vars['data']->value['ID_Autor'];?>
</td>
         <td><?php echo $_smarty_tpl->tpl_vars['data']->value['Imie'];?>
</td>
         <td><?php echo $_smarty_tpl->tpl_vars['data']->value['Nazwisko'];?>
</td>
       </tr>
     </tbody>
   </table>
<?php
}
}
/* {/block 'body'} */
}
