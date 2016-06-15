<?php
/* Smarty version 3.1.29, created on 2016-04-12 01:10:26
  from "C:\xampp\htdocs\tibi\templates\registrationform.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_570c2ee26a5176_38131163',
  'file_dependency' => 
  array (
    '2364bce500ccca2a3314ed55564aeea30aff9985' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tibi\\templates\\registrationform.tpl',
      1 => 1460416216,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_570c2ee26a5176_38131163 ($_smarty_tpl) {
?>
<main class="container">
<h3>Podaj dane:</h3>
<form class="form-horizontal" role="form">
<div class="form-group">
<label class="col-sm-2 control-label">Login</label>
<div class="col-sm-10">
<input type="text" class="form-control" required="">
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">Email</label>
<div class="col-sm-10">
<input type="email" class="form-control" required="">
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">Hasło</label>
<div class="col-sm-10">
<input type="password" class="form-control" required="" pattern="">
</div>
</div>	
<div class="form-group">
<label class="col-sm-2 control-label">Powtórz hasło</label>
<div class="col-sm-10">
<input type="password" class="form-control" required="">
</div>
</div>	
<button type="submit" class="btn btn-default">Dodaj</button>
</form>
</main><?php }
}
