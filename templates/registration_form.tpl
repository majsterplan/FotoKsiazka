<main class="container">
{if $smarty.session.error != ""}
<div class="panel panel-warning">
<div class="panel-heading">Uwaga!</div>
<div class="panel-body">{$smarty.session.error}</div>
</div>
{/if}
<h3>Podaj dane:</h3>
<form class="form-horizontal" role="form" method="post" action="create_account.php">
<div class="form-group">
<label class="col-sm-2 control-label">Login</label>
<div class="col-sm-10">
<input name="login" type="text" class="form-control" required{if isset($smarty.session.tempLogin)} value="{$smarty.session.tempLogin}"{/if}>
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
<input name="password" type="password" class="form-control" placeholder="Co najmniej 6 znaków, w tym co najmniej jedna duża litera i cyfra" required pattern={literal}"^(?=.*\d)(?=.*[A-Z]).{6,}$"{/literal}>
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
</main>