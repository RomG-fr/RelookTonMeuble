<?php
/*
	ajouter une colonne stagiaire dans images pour savoir quel stagiaire s'est charger du relooking d'un meuble
*/
?>

<?php 
session_start();?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
   <head>
       <title>Galerie d'images</title>
	   <link rel="icon" type="image/png" href="image/poisson_favicon.png" />
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
	   </style>
   </head>
   <body>
 
	<h1>Galerie d'images de <?php echo $_SESSION['login'];?></h1>
	
	<input type="button" value="deconnection" OnClick="window.location.href='logout.php'"/>
	<br />
	<!-- Formulaire permettant de choisir les types et design des meubles afficher -->
	<?php
	
		include'connection_bd.php';
		
		//structure de base de la requète
		$req="SELECT id_img, nom, description FROM images where auteur='".$_SESSION['login']."'";
		$reponse = $bdd->query($req);
		//affichage des images
		
	    while($result = $reponse->fetch()) {
			
			$prompt='';
					//affiche les photos des meubles
			$prompt='
				<div> 
					<img src="apercu.php?id_img='.$result['id_img'].'" alt="'.$result['nom'].'" title="'.$result['nom'].'" />
					<p>Description : '.$result["description"].'</p></div>';
					
					$direction="window.location.href='detail.php?message=".$result["id_img"]."'";
					$direction2="window.location.href='efface.php?id=".$result["id_img"]."'";
			echo $prompt;
	    }
	    $reponse->closeCursor();
	?>
	</body>
</html>