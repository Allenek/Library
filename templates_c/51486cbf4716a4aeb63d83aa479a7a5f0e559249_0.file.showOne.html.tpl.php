<?php
/* Smarty version 3.1.33, created on 2018-12-05 14:12:00
  from 'D:\xampp\htdocs\Mikula2\templates\Egzemplarz\showOne.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c07cea0a374b2_78685131',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51486cbf4716a4aeb63d83aa479a7a5f0e559249' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Mikula2\\templates\\Egzemplarz\\showOne.html.tpl',
      1 => 1544015518,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c07cea0a374b2_78685131 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3087941815c07cea0a32175_39251567', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, '../baseTemplate.html.tpl');
}
/* {block 'body'} */
class Block_3087941815c07cea0a32175_39251567 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_3087941815c07cea0a32175_39251567',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

   <table class="table table-striped">
     <thead>
       <th>Id</th>
       <th>Tytuł</th>
       <th>Sygnatura</th>
       <th>Cena Zakupu</th>
       <th>Stan</th>
       <th></th>
     </thead>
     <tbody>
       <tr>
         <td><?php echo $_smarty_tpl->tpl_vars['data']->value['ID_Egzemplarz'];?>
</td>
         <td><?php echo $_smarty_tpl->tpl_vars['Ksiazka']->value[$_smarty_tpl->tpl_vars['data']->value['ID_Ksiazka']]['Tytul'];?>
</td>
         <td><?php echo $_smarty_tpl->tpl_vars['data']->value['Sygnatura'];?>
</td>
         <td><?php echo $_smarty_tpl->tpl_vars['data']->value['Cena_Zakupu'];?>
</td>
         <td><?php echo $_smarty_tpl->tpl_vars['data']->value['Stan'];?>
</td>
       </tr>
     </tbody>
   </table>
<?php
}
}
/* {/block 'body'} */
}
