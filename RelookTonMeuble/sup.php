<?php
	session_start();	
	include'connection_bd.php';
	foreach($_POST['supprimer'] as $valeur){
		$tab=explode('/',$valeur);
		$nom=$tab[0];
		$prenom=$tab[1];
		
		$requete1=$bdd -> query('SELECT path_cv,path_lettre_motivation FROM dossier where nom="'.$nom.'"and prenom="'.$prenom.'"')or exit(mysql_error());
		while ($donnees1 = $requete1 -> fetch()) {
			unlink ($donnees1['path_cv']);
			unlink ($donnees1['path_lettre_motivation']);
		}
		
		//Supprimer toutes les informations et documents lié à l'utilisateur nom prenom
		$requete = "DELETE FROM dossier WHERE nom=:unnom and prenom=:unprenom "; 
		$stmt = $bdd->prepare($requete); 
		$stmt->bindvalue('unnom', $nom);
		$stmt->bindvalue('unprenom', $prenom);
		$stmt->execute(); 
		//vide tout les fichier du dossier 
		/*$dossier = 'upload';
		$dir_iterator = new RecursiveDirectoryIterator($dossier);
		$iterator = new RecursiveIteratorIterator($dir_iterator, RecursiveIteratorIterator::CHILD_FIRST);

		// On supprime chaque dossier et chaque fichier	du dossier cible
		foreach($iterator as $fichier){
		$fichier->isDir() ? rmdir($fichier) : unlink($fichier);
		}*/
	}
	header('Location:analyse_candidature.php');
?>