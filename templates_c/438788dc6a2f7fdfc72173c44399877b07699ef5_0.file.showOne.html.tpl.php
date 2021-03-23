<?php
/* Smarty version 3.1.33, created on 2019-01-02 18:50:56
  from 'D:\xampp\htdocs\Mikula2\templates\Ksiazka\showOne.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c2cfa00250b82_51681671',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '438788dc6a2f7fdfc72173c44399877b07699ef5' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Mikula2\\templates\\Ksiazka\\showOne.html.tpl',
      1 => 1546451452,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c2cfa00250b82_51681671 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21469114405c2cfa00240c60_30970197', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, '../baseTemplate.html.tpl');
}
/* {block 'body'} */
class Block_21469114405c2cfa00240c60_30970197 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_21469114405c2cfa00240c60_30970197',
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
