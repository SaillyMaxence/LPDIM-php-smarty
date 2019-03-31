{config_load file="test.conf" section="setup"}
{include file="header.tpl" title=foo}

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

{literal}
<script>

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
</script>
{/literal}

{include file="footer.tpl"}
