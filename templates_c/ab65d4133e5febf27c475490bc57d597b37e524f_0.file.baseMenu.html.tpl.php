<?php
/* Smarty version 3.1.33, created on 2019-01-17 13:20:19
  from 'C:\xampp\htdocs\Mikula22\templates\baseMenu.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c40730387c747_52323110',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab65d4133e5febf27c475490bc57d597b37e524f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mikula22\\templates\\baseMenu.html.tpl',
      1 => 1547727438,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c40730387c747_52323110 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Aplikacja</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExample01">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
ksiazka">Książka</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
egzemplarz">Egzemplarz</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
autor">Autor</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
kategoria">Kategoria</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
wydawnictwo">Wydawnictwo</a>
        </li>
      <?php if ($_smarty_tpl->tpl_vars['currentUser']->value != false) {?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
wyloguj">Wyloguj <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a>
        </li>
      <?php } else { ?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
formularz-logowania">Zaloguj się</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
formularz-rejestracji">Zarejestruj się</a>
        </li>
      <?php }?>
    </ul>
  </div>
</nav>
<?php }
}
