<?php
/* Smarty version 3.1.33, created on 2018-12-05 12:14:46
  from 'D:\xampp\htdocs\Mikula2\templates\Kategoria\showOne.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c07b32604d194_48777470',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76b1082a0fb8c83201a16c493ff74a1fa2a69b53' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Mikula2\\templates\\Kategoria\\showOne.html.tpl',
      1 => 1544008477,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c07b32604d194_48777470 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15791729195c07b3260491d4_80262884', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, '../baseTemplate.html.tpl');
}
/* {block 'body'} */
class Block_15791729195c07b3260491d4_80262884 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_15791729195c07b3260491d4_80262884',
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
