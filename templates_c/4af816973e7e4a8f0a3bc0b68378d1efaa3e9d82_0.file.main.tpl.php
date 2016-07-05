<?php
/* Smarty version 3.1.29, created on 2016-07-05 19:11:57
  from "C:\xampp\htdocs\tibi\templates\main.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_577bea5d1ceb76_51881585',
  'file_dependency' => 
  array (
    '4af816973e7e4a8f0a3bc0b68378d1efaa3e9d82' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tibi\\templates\\main.tpl',
      1 => 1467738712,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_577bea5d1ceb76_51881585 ($_smarty_tpl) {
?>
<main class="container">
<?php if ($_SESSION['success']) {?>
<div class="alert alert-success" role="alert">Akcja zakończona powodzeniem.</div>
<?php }
if ($_SESSION['error'] != '') {?>
<div class="alert alert-danger" role="alert"><?php echo $_SESSION['error'];?>
</div>
<?php }
if ($_SESSION['userId'] != -1) {?>
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
<?php }?>
<h3>Najnowsze foteczki:</h3>
<?php if ($_smarty_tpl->tpl_vars['info']->value != '') {?>
<div class="alert alert-info" role="alert"><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</div>
<?php } else {
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['images']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
<div class="panel panel-default">
<div class="panel-body my-panel-body"><img src="<?php echo $_smarty_tpl->tpl_vars['images']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['path'];?>
"></div>
<div class="panel-footer">Dodane przez: <b><?php echo $_smarty_tpl->tpl_vars['images']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['user'];?>
</b>, <?php echo $_smarty_tpl->tpl_vars['images']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['date'];?>
</div>
</div>
<?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
}?>
</main><?php }
}
