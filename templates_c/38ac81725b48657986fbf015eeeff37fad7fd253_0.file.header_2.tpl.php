<?php
/* Smarty version 3.1.29, created on 2016-04-18 13:57:53
  from "C:\xampp\htdocs\tibi\templates\header_2.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5714cbc16b2181_78145295',
  'file_dependency' => 
  array (
    '38ac81725b48657986fbf015eeeff37fad7fd253' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tibi\\templates\\header_2.tpl',
      1 => 1460980633,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5714cbc16b2181_78145295 ($_smarty_tpl) {
?>
<header>
<nav class="navbar navbar-inverse my-navbar">
<div class="container-fluid">
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="index.php">FotoKsiążka</a>
</div>
<div class="collapse navbar-collapse" id="navbar-collapse">
<?php if ($_SESSION['userId'] == -1) {?>
<ul class="nav navbar-nav navbar-right">
<li><a href="register.php">Zarejestuj się</a></li>
</ul>
<form class="navbar-form navbar-right" role="form" method="post" action="login.php">
<div class="form-group">
<input name="login" type="text" class="form-control" placeholder="Login" required>
<input name="password" type="password" class="form-control" placeholder="Hasło" required>
</div>
<button name="comein" type="submit" class="btn btn-default">Zaloguj</button>
</form>
<?php } else { ?>
<ul class="nav navbar-nav navbar-right">
<li><a href="logout.php">Wyloguj się</a></li>
</ul>
<p class="navbar-text navbar-right">Zalogowany jako: <b><?php echo $_smarty_tpl->tpl_vars['login']->value;?>
</b>.</p>
<?php }?>
</div>
</div>
</nav>
</header><?php }
}
