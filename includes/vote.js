$("[name=vote]").click(function () {
	event.preventDefault();
	id = this.getAttribute("data-id");
	if (id != "") {
		$.ajax({
			url: "vote.php",
			type: "GET", //en GET
			data: {id:id},
			success: function (result) { //si la réponse est renvoyer avec success
				if (result != "deja") //si la réponse n'est pas "deja"
				{
					var voteId = document.getElementById("voteNumber");
						console.log(voteId.value);
					elementVote.attr('disabled', 'true'); //on disabled le button 
				}
				else if (result == "deja") //par contre si c'est deja
				{
					$("#notif").removeClass(); //on supprime la class du message alert qui est caher
					$("#notif").html("vous avez deja voter!"); //on insert un message d'alert
					$("#notif").addClass("alert alert-danger"); //pour l'afficher on lui donne class alert sans le cacher
					$("#notif").fadeOut(8000); //un petit fadeOut pour faire bien
					elementVote.attr('disabled', 'true'); //on disabled le button 
				}
			}
		});
	}
	else //si le use n'est pas connecter
		window.location.href = 'login.php'; //on redirige vers la connexion 
});