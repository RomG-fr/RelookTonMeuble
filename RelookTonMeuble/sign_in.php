<?php
	session_start();

	//utilisé par inscription

	include'connection_bd.php';

	$count=$bdd->query("SELECT COUNT(*) as nombre_resultats FROM utilisateur where login='".$_POST['emauil_us']."'AND statut='stagiaire'");
	$valeur=$count->fetch();
	$valeur = $valeur['nombre_resultats'];
	//si un stagiaire possède la meme adresse mail on renvoie un message d'erreur par le biais de l'adresse
	if($valeur!=0){
		setcookie('pseudo',$_POST['emauil_us'], time() + 365*24*3600, null, null, false, true);
		header('Location:inscription.php?message=erreur');
		exit();
	}
	//sinon on l'ajoute à la base des utilisateurs du site
	else{
		$req = $bdd->prepare("INSERT INTO utilisateur VALUES ('".$_POST['emauil_us']."' , '".$_POST['pass_us']."','stagiaire')");
		$req -> execute();
		header('Location:inscription.php');
		exit();	
	}
?>
