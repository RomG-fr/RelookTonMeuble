<?php
session_start();

//utilise sign_in

/*
Lorsque la secretaire veut ajouter un stagiaire elle se rend sur cette page pour l'ajouter
lors du chargement de la page un mot de passe est généré aléatoirement 
la secretaire doit saisir le mail du stagiaire à ajouter
*/

?>
<html>
	<head>
		<title></title>
		<meta charset="utf-8"/>
		<link rel="icon" type="image/png" href="image/poisson_favicon.png" />
		<script>
			
			//Fonction vérifiant la structure de l'adresse mail
			function verif_mail(formulaire){
				var mail=formulaire.login.value;
				// La 1ère étape consiste à définir l'expression régulière d'une adresse email
				var regEmail = new RegExp('^[0-9a-z._-]+@{1}[0-9a-z.-]{2,}[.]{1}[a-z]{2,5}$','i');
				var res =regEmail.test(mail);
				if(res==false ||document.getElementById('login').value.length >50){
					alert("identifiant invalide trop long longeur max 50 caractère ou mauvais structure");
				}
				return res||document.getElementById('login').value.length >50;
			}
		
			//Génère une chaine de caractèreS aléatoire
			function ChaineAleatoire(nbcar){
				var ListeCar = new Array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z",
				"A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z",
				"0","1","2","3","4","5","6","7","8","9");
				var Chaine ='';
				for(i = 0; i < nbcar; i++){
					Chaine = Chaine + ListeCar[Math.floor(Math.random()*ListeCar.length)];
				}
				return Chaine;
			}
			
			function verif_mdp(){
				if(document.getElementById('mdp').value.length < 8||document.getElementById('mdp').value.length >50){
					alert("mot de passe invalide longueur entre 8 et 50 caractère");
					return false;
				}
				else {
					return true;
				}
			}
			function verif(formulaire){
				var valide=false;
				valide= verif_mail(formulaire)&&verif_mdp();
				if(valide){
					alert("Ajout réussi");
				}
			}
			//Au chargement de la page un mot de passe aléatoire de 8 caractère à placé dans la case mot de passe
			window.onload = function mdpRandom(){
				document.getElementById('mdp').value=ChaineAleatoire(8);
			}
		</script>
	</head>
	
	<body>
		<?php 
			//si l'identifiant existe déjà on affiche le message suivant
			if(isset($_GET['message'])&&$_GET['message']="erreur"){
				echo("<br />	/!\\ identifiant deja existant /!\\	<br />");
			}
		?>
		
		<h1>Formulaire d'ajout des stagiaires : </h1>
		<form method="Post" action="sign_in.php" onsubmit="return verif(this);">
			<label for='login'>Identifiant : </label>
			<input type="text" class="login" name="login" placeholder="exemple@mail.com" id="login" onfocus="foc(this)" />
			
			<label for='mdp'>Mot de passe : </label>
			<input type="password" class="mdp" onfocus="this.type='text';"
			onblur="this.type='password';" name="mdp" id="mdp"/>
			
			<input  type="submit" value="valider" >
		</form>
	</body>
</html>