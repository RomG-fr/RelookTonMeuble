<?php
	session_start();

	//utilisé par inscription

	include'connection_bd.php';

	$count=$bdd->query("SELECT COUNT(*) as nombre_resultats FROM utilisateur where login='".$_POST['login']."'AND statut='stagiaire'");
	$valeur=$count->fetch();
	$valeur = $valeur['nombre_resultats'];
	//si un stagiaire possède la meme adresse mail on renvoie un message d'erreur par le biais de l'adresse
	if($valeur!=0){
		setcookie('pseudo',$_POST['login'], time() + 365*24*3600, null, null, false, true);
		header('Location:inscription.php?message=erreur');
		exit();
	}
	//sinon on l'ajoute à la base des utilisateurs du site
	else{
		$req = $bdd->prepare("INSERT INTO utilisateur VALUES ('".$_POST['login']."' , '".$_POST['mdp']."','stagiaire')");				
		$req -> execute();
		$_SESSION['connecte']="oui";//on stoque en memoire que l'utilisateur s'est connecté
		$_SESSION['login']=$_POST['login'];//on stock aussi son identifiant
		$_SESSION['statut']="stagiaire";//et son statut dans l'entreprise
		header('Location:inscription.php');
		exit();	
	}
?>