<?php
ini_set('display_errors', 1);
error_reporting(-1);

//demarrer la session
session_start();

$utilisateur='user_17007005';
$mdp='7&n4v,4V';

try {
	$bdd = new PDO('mysql:host=mysql.istic.univ-rennes1.fr;dbname=base_17007005', $utilisateur, $mdp);
	$bdd->setattribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$pdostat=$bdd->query("SELECT login FROM utilisateur");
	foreach ($pdostat as $ligne){
		echo"<p>".$ligne['login']."\n";
		if($_POST['login'] == $ligne['login']){
			$pdomdp=$bdd->query("SELECT mdp FROM utilisateur where `login`='".$ligne['login']."'");
			foreach ($pdomdp as $ligne){
				if($_POST['mdp'] == $ligne['mdp']){
				$_SESSION['connecte']="oui";
				$_SESSION['login']=$_POST['login'];
				$_SESSION['statut']="stagiaire";
				header('Location: accueil.php');
				exit();	
				}
			}
		}
	}
		header('Location:connection.php?message=erreur');
		exit();
	echo"</p>";
	
}	
catch (Exepction $e){
	echo "<p>erreur : ".$e ->getMessage();
	die();
}
?>




