<?php 
session_start();?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
   <head>
       <title>Ma galerie d'images</title>
       <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	   <style type="text/css">
		body {
			width: 95%;
		}
 
		div {
			width: 22%;
			float: left;
			text-align: center;
			border: 1px solid black;
			margin: 5px;
			padding:  5px;
		}
 
		p {
			text-align: left;
		}
 
		a {
			color: #000000;
			text-decoration: none;
		}
	   </style>
   </head>
   <body>
 
	<h1>Ma galerie d'images</h1>
	
	<input type="button" value="Ajouter image..." OnClick="window.location.href='traitement.php'"/>
	
	<!-- Formulaire permettant de choisir les types et design des meubles afficher -->
	<form enctype="multipart/form-data" method="GET" action="#">
	
		<label for="desing">Design : </label>
			<SELECT name="design" id="design" size="1">
				<OPTION>tous
				<OPTION>modern
				<OPTION>ancien
				<OPTION>brute
			</SELECT><br />
			
		<label for="type">type : </label>
			<SELECT name="type" id="type" size="1">
				<OPTION>tous
				<OPTION>commode
				<OPTION>armoire
				<OPTION>table
			</SELECT><br />
			
			<input type="submit" value="filtrer"/>
	</form>
	<?php
	
		include'connection_bd.php';
		
		//structure de base de la requète
		$req='SELECT id_img, nom, description FROM images ';
		
		//liste des filtres appliquée à la selection de meubles
		$filtre="";
		
		if(isset($_GET['design'])){
			
			//si des filtres on été selectionnés (utile pour le premier chargement de la page)
			
			if($_GET['design']!="tous" || $_GET['type']!="tous"){
				$req=$req." WHERE ";
			}
			
			//Si un filtre est appliquée sur les design des meubles
			
			if($_GET['design']!="tous"){
				$req= $req.'design="'.$_GET['design'].'"';
				$filtre= $filtre.'design="'.$_GET['design'].'"';
				}
				
			//si il y a deux critère ou ajout un and à la requete
			
			if($_GET['design']!="tous" && $_GET['type']!="tous"){
				$req=$req." and ";
				$filtre=$filtre." et ";
				}
				
			//Si un filtre est appliquée sur les types des meubles
				
			if($_GET['type']!="tous"){
				$req=$req.'type="'.$_GET['type'].'"';
				$filtre= $filtre.'type="'.$_GET['type'].'"';
				}
		}
		$reponse = $bdd->query($req);
		
		echo "<h3> Filtre.s appliqu&eacute;s : ".$filtre."</h3>";
		
		//affichage des images
		
	    while($result = $reponse->fetch()) {
			
			$prompt='';
					//affiche les photos des meubles
			$prompt='
				<div> 
					<img src="apercu.php?id_img='.$result['id_img'].'" alt="'.$result['nom'].'" title="'.$result['nom'].'" />
					<p>Description : '.$result["description"].'</p>';
					
					$direction="window.location.href='detail.php?message=".$result["id_img"]."'";
					$direction2="window.location.href='efface.php?id=".$result["id_img"]."'";
					
					//Si l'utilisateur souhaite plus de détail sur un meuble
					$prompt=$prompt.
					'<input type="button" id="detail'.$result["id_img"].'" value="detail..." OnClick="'.$direction.'"/>
					<img src="images/croix.png" alt="image croix" OnClick="'.$direction2.'"/> </div>';
					//Visible uniquement par la secretaire, si elle souhaite supprimer un meuble
			echo $prompt;
	    }
	    $reponse->closeCursor();
	?>
	</body>
</html>