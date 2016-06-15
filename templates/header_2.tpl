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
{if $smarty.session.userId == -1}
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
{else}
<ul class="nav navbar-nav navbar-right">
<li><a href="logout.php">Wyloguj się</a></li>
</ul>
<p class="navbar-text navbar-right">Zalogowany jako: <b>{$login}</b>.</p>
{/if}
</div>
</div>
</nav>
</header>