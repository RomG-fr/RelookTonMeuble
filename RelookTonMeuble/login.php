<?php
ini_set('display_errors', 1);
error_reporting(-1);

//demarrer la session
session_start();
include'connection_bd.php';
//Vérifie si l'identifiant rentrée est présent dans la table des utilisateurs
$pdostat=$bdd->query("SELECT login FROM utilisateur");
$echo='failed';
if( isset($_POST['login']) && isset($_POST['mdp']) ){
	foreach ($pdostat as $ligne){
		if($_POST['login'] == $ligne['login']){
			//Si l'utilisateur existe on vérifie si le mot de passe associé correspond
			$pdomdp=$bdd->query("SELECT mdp,statut FROM utilisateur where `login`='".$ligne['login']."'");
			foreach ($pdomdp as $ligne){
				if($_POST['mdp'] == $ligne['mdp']){
				
					//si la connection est validée on enregistre l'identifiant en donnée de session
					$_SESSION['login']=$_POST['login'];
					//le fait que les connections est établie
					$_SESSION['connecte']="oui";
					//et le satut donc les droits de l'utilisateur connecté
					$_SESSION['statut']=$ligne['statut'];
					$echo="Success";
				}
			}
		}
	}
}
echo $echo;
//header('Location:connexion.php?message=erreur');
exit();
?>




