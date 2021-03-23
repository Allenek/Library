<?php
/* Smarty version 3.1.33, created on 2019-01-03 13:22:26
  from 'C:\xampp\htdocs\Mikula2\templates\Ksiazka\showOne.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c2dfe826119b7_41621825',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f71b1edb4fe1c2e57a0bd01c7d758c5579ccfc51' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mikula2\\templates\\Ksiazka\\showOne.html.tpl',
      1 => 1546517922,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c2dfe826119b7_41621825 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4599318235c2dfe825e6689_61532288', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, '../baseTemplate.html.tpl');
}
/* {block 'body'} */
class Block_4599318235c2dfe825e6689_61532288 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_4599318235c2dfe825e6689_61532288',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

   <table class="table table-striped">
     <thead>
       <th>Id</th>
       <th>Autor</th>
       <th>Nazwa</th>
       <th>Tytul</th>
       <th>Opis</th>
       <th>Wydawnictwo</th>
       <th>Rok_Wydania</th>
     </thead>
     <tbody>
       <tr>
         <td><?php echo $_smarty_tpl->tpl_vars['data']->value['ID_Ksiazka'];?>
</td>
         <td>
           <?php if (isset($_smarty_tpl->tpl_vars['ksiazka_autor']->value[$_smarty_tpl->tpl_vars['data']->value['ID_Ksiazka']])) {?>
             <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ksiazka_autor']->value[$_smarty_tpl->tpl_vars['data']->value['ID_Ksiazka']], 'v');
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
         </td>
         <td><?php echo $_smarty_tpl->tpl_vars['Kategoria']->value[$_smarty_tpl->tpl_vars['data']->value['ID_Kategoria']]['Nazwa'];?>
</td>
         <td><?php echo $_smarty_tpl->tpl_vars['data']->value['Tytul'];?>
</td>
         <td><?php echo $_smarty_tpl->tpl_vars['data']->value['Opis'];?>
</td>
         <td><?php echo $_smarty_tpl->tpl_vars['Wydawnictwo']->value[$_smarty_tpl->tpl_vars['data']->value['ID_Wydawnictwo']]['Nazwa'];?>
</td>
         <td><?php echo $_smarty_tpl->tpl_vars['data']->value['Rok_Wydania'];?>
</td>
       </tr>
     </tbody>
   </table>
<?php
}
}
/* {/block 'body'} */
}
