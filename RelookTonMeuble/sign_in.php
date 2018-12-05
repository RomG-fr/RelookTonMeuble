<?php
session_start();

$utilisateur='user_17007005';
$mdp='7&n4v,4V';

try {
	$bdd = new PDO('mysql:host=mysql.istic.univ-rennes1.fr;dbname=base_17007005', $utilisateur, $mdp);
	$bdd->setattribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
	
catch (Exepction $e){
	echo "<p>erreur : ".$e ->getMessage()."</p>";
	die();
}

	$count=$bdd->query("SELECT COUNT(*) as nombre_resultats FROM utilisateur where login='".$_POST['login']."'AND statut='stagiaire'");
	$valeur=$count->fetch();
	$valeur = $valeur['nombre_resultats'];
	if($valeur!=0){
		header('Location:inscription.php?message=erreur');
		exit();
	}
	else{
		$req = $bdd->prepare("INSERT INTO utilisateur VALUES ('".$_POST['login']."' , '".$_POST['mdp']."','stagiaire')");				
		$req -> execute();
		$_SESSION['connecte']="oui";
		$_SESSION['login']=$_POST['login'];
		$_SESSION['statut']="stagiaire";
		header('Location:accueil.php');
		exit();	
	}
	//if $pdostat vide ajouter directement
	
?>