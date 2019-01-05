<!DOCTYPE html>
<html>
<head> <meta charset="utf-8" />
    <title>Un formulaire de connexion en AJAX</title></head>
 
<body>
    <div id="resultat">
        <!-- Nous allons afficher un retour en jQuery au visiteur -->
    </div>
         
        <h1>Un formulaire de connexion en AJAX</h1>
 
    <form>
        <p>
        Nom d'utilisateur : <input type="text" id="login" />
        Mot de passe : <input type="password" id="mdp" />
        <input type="submit" id="submit" value="Se connecter !" />
        </p>
    </form>
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
</body>
</html>
 
<script>
	$(document).ready(function(){
	 
		$("#submit").click(function(e){
			e.preventDefault();
	 
			$.post(
				'login.php', // page pour se connecter
				{
					login : $("#login").val(),  // Nous récupérons la valeur de nos input que l'on fait passer à connexion.php
					mdp : $("#mdp").val()
				},
	 
				function(data){
	 
					if(data == 'Success'){
						 // Le membre est connecté. Ajoutons lui un message dans la page HTML.
						 $("#resultat").html("<p>Vous avez été connecté avec succès !</p>");
					}
					else{
						 // Le membre n'a pas été connecté. (data vaut ici "failed")
						 $("#resultat").html("<p>Erreur lors de la connexion...</p>");
					}
			 
				},
				'text'
			 );
		});
	});
</script>