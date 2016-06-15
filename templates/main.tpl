<main class="container">
{if $smarty.session.success != ""}
<div class="alert alert-success" role="alert">Akcja zakończona powodzeniem.</div>
{/if}
{if $smarty.session.error != ""}
<div class="alert alert-danger" role="alert">{$smarty.session.error}</div>
{/if}
{if $smarty.session.userId != -1}
<h3>Wybierz i dodaj foteczke:</h3>
<form class="form-inline" role="form" method="post" action="upload_file.php" enctype="multipart/form-data">
<div class="form-group">
<input name="file" type="file">
</div>
<div class="form-group">
<input name="private" type="checkbox" value="1"> Zdjęcie prywatne
</div>
<button name="upload" type="submit" class="btn btn-default">Dodaj</button>
</form>
{/if}
<h3>Najnowsze foteczki:</h3>
{if $info != ""}
<div class="alert alert-info" role="alert">{$info}</div>
{else}
{section name = i loop = $images}
<div class="panel panel-default">
<div class="panel-body my-panel-body"><img src="{$images[i].path}"></div>
<div class="panel-footer">Dodane przez: <b>{$images[i].user}</b>, {$images[i].date}</div>
</div>
{/section}
{/if}
</main>