<?php
/* Smarty version 3.1.33, created on 2019-03-31 16:34:20
  from 'C:\xampp\htdocs\gitRepository\smaty-php\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ca0cfec2dc4a5_49589424',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '458a0b83686418a03f31b0a21a9c3f7e00ce5c53' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gitRepository\\smaty-php\\templates\\login.tpl',
      1 => 1554042338,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5ca0cfec2dc4a5_49589424 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>

<html>

<body>

<form class="form-inline" method="POST" action="includes/action.php" id="formulaireLogin">
  <div class="form-group">
    <label for="email">Login:</label>
    <input type="text" name="login" class="form-control" id="login">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" name="pwd" class="form-control" id="pwd">
  </div>
  <button type="submit" class="btn btn-default">Connexion</button>
  <div id="notif" class="alert alert-danger hide" role="alert">
  </div>
</form>


<?php echo '<script'; ?>
>

$("#formulaireLogin").submit(function(event){ 
	$("#notif").removeClass();
	
	if(!$("#login").val())
	{
		$("#notif").html("erreur");
		$("#notif").addClass("alert alert-danger");
		return false;
	}

	return true //on sort
});
<?php echo '</script'; ?>
>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}