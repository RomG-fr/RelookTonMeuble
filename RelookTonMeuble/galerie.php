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
	<input type="button" value="accueil" OnClick="window.location.href='accueil.php'"/>
	
	<form enctype="multipart/form-data" method="post" action="galerie.php">
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
			<input type="submit" value="valider"/>
	</form>
	<?php
		try {$utilisateur='user_17007005';
					$mdp='7&n4v,4V';
					$bdd = new PDO('mysql:host=mysql.istic.univ-rennes1.fr;dbname=base_17007005', $utilisateur, $mdp);
               } catch (Exception $e) {
		exit('Erreur : ' . $e->getMessage());
	    }
		 if(isset($_POST['type'])){
			if($_POST['type']=="tous"&&$_POST['design']!="tous"){
				$reponse = $bdd->query('SELECT id_img, nom, description FROM images where design="'.$_POST['design'].'"');
			}
			else if($_POST['design']=="tous"&& $_POST['type']!="tous"){
				$reponse = $bdd->query('SELECT id_img, nom, description FROM images where type ="'.$_POST['type'].'"');
			}
			else if($_POST['type']=="tous" && $_POST['design']=="tous"){
				$reponse = $bdd->query('SELECT id_img, nom, description FROM images');
			}
			else {
				$reponse = $bdd->query('SELECT id_img, nom, description FROM images where type="'.$_POST['type'].'" and design="'.$_POST['design'].'"');
				}
		 }
		 else{
			$reponse = $bdd->query('SELECT id_img, nom, description FROM images');
		 }
	    while($result = $reponse->fetch()) {
			echo '<div>';
			echo '<a href="apercu.php?id_img='.$result['id_img'].'"><img src="apercu.php?id_img='.$result['id_img'].'" alt="'.$result['nom'].'" title="'.$result['nom'].'" /></a>';
			echo '<p>Description : '.$result["description"].'</p>';
			$direction="window.location.href='detail.php?message=".$result["id_img"]."'";
			echo'<input type="button" id="detail'.$result["id_img"].'" value="detail..." OnClick="'.$direction.'"/>';
			$direction2="window.location.href='efface.php?id=".$result["id_img"]."'";
			echo'<img src="images/croix.png" alt="image croix" OnClick="'.$direction2.'"/>';
			echo '</div>';
	    }
 
	    $reponse->closeCursor();
	?>
 
</body>
</html>