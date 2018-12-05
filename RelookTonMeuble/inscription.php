<?php
session_start();
?>
<html>
<head>
	<title>Accueil</title>
	<meta charset="utf-8"/>
	<script>
	function surligne(champ, erreur){
		   if(erreur)	champ.style.backgroundColor = "#fba";
		   else	champ.style.backgroundColor = "";
		}
		function verifMail(champ){
			var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
			if(!regex.test(champ.value))
			   {
			  surligne(champ, true);
			  return false;
				}
			else
			{
			surligne(champ, false);
			return true;
			}
		}
		function ChaineAleatoire(nbcar){
			var ListeCar = new Array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z","0","1","2","3","4","5","6","7","8","9");
			var Chaine ='';
			for(i = 0; i < nbcar; i++){
				Chaine = Chaine + ListeCar[Math.floor(Math.random()*ListeCar.length)];
			}
			return Chaine;
		}
		window.onload = function test(){
			document.getElementById('mdp').value=ChaineAleatoire(8);
		}
	</script>
</head>
<body>
<?php if($_SESSION['connecte']=='oui'){
	echo $_SESSION['login'];
	$deco="window.location.href='logout.php'";
	echo"<input type='button' value='Deconnection' OnClick=".$deco."/>";
	}
	else{
		$connection="window.location.href='connection.php'";
		echo"<input type='button' value='Connection' OnClick=".$connection."/>";
		$ins="window.location.href='inscription.php'";
		echo"<input type='button' value='Inscription' OnClick=".$ins."/>";
	}
	$queries = array();
		parse_str($_SERVER['QUERY_STRING'], $queries);
		foreach ($queries as $value){
			if($value="erreur"){
				echo("<br />");
				echo("/!\\ identifiant deja existant /!\\");
				echo("<br />");
				}
			}
?>
<h1>formulaire inscription des stagiaires : </h1>
<form method="Post" action="sign_in.php">
	<label>Identifiant : </label><input type="text" class="login" name="login" value="exemple@mail.com" id="login" />
	<label>Mot de passe : </label><input type="password" class="mdp" onfocus="this.type='text';" onblur="this.type='password';" name="mdp" id="mdp"/>
	<input  type="submit" value="valider" onsubmit="sub()">
</body>
</html>