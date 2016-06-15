<?php
/* Smarty version 3.1.29, created on 2016-05-09 21:40:34
  from "C:\xampp\htdocs\tibi\templates\registration_form.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5730e7b24a2616_86735870',
  'file_dependency' => 
  array (
    '3203577ea1c31837b88ecb80aeda6d56cbf3ff2f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tibi\\templates\\registration_form.tpl',
      1 => 1462822819,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5730e7b24a2616_86735870 ($_smarty_tpl) {
?>
<main class="container">
<?php if ($_SESSION['error'] != '') {?>
<div class="panel panel-warning">
<div class="panel-heading">Uwaga!</div>
<div class="panel-body"><?php echo $_SESSION['error'];?>
</div>
</div>
<?php }?>
<h3>Podaj dane:</h3>
<form class="form-horizontal" role="form" method="post" action="create_account.php">
<div class="form-group">
<label class="col-sm-2 control-label">Login</label>
<div class="col-sm-10">
<input name="login" type="text" class="form-control" required<?php if (isset($_SESSION['tempLogin'])) {?> value="<?php echo $_SESSION['tempLogin'];?>
"<?php }?>>
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">Email</label>
<div class="col-sm-10">
<input name="email" type="email" class="form-control" required>
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">Hasło</label>
<div class="col-sm-10">
<input name="password" type="password" class="form-control" placeholder="Co najmniej 6 znaków, w tym co najmniej jedna duża litera i cyfra" required pattern="^(?=.*\d)(?=.*[A-Z]).{6,}$">
</div>
</div>	
<div class="form-group">
<label class="col-sm-2 control-label">Powtórz hasło</label>
<div class="col-sm-10">
<input name="repassword" type="password" class="form-control" required>
</div>
</div>	
<button name="register" type="submit" class="btn btn-default">Uwtórz konto</button>
</form>
</main><?php }
}
