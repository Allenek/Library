<?php
/* Smarty version 3.1.33, created on 2018-11-29 20:17:59
  from 'D:\xampp\htdocs\Mikula2\templates\Wydawnictwo\showOne.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c003b6726c885_55812499',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '248eb73a003c77c6e1c6e969c50555508a0c9da4' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Mikula2\\templates\\Wydawnictwo\\showOne.html.tpl',
      1 => 1543519076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c003b6726c885_55812499 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3592711065c003b67268a08_90326908', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, '../baseTemplate.html.tpl');
}
/* {block 'body'} */
class Block_3592711065c003b67268a08_90326908 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_3592711065c003b67268a08_90326908',
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
