<?php
session_start();
?>
<html>
	<head>
	</head>
	<body>
		<input type="button" value="retour" OnClick="window.location.href='galerie.php'"/>
		<?php 
			if(isset($_GET['message'])){
				//connexion à la base de données
				include'connection_bd.php';
				
				//Lecture du fichier
				$reponse = $bdd->query('SELECT id_img, nom, description,extension,taille FROM images where id_img='.$_GET['message']);
				while($result = $reponse->fetch()) {
					echo '<div>
							<img src="apercu.php?id_img='.$result['id_img'].'" alt="'.$result['nom'].'" title="'.$result['nom'].'" />
							<p>Description : '.$result["description"].'</p>
							<p>taille : '.$result["taille"].' octets</p>
							<p>extension : '.$result["extension"].'</p>
						</div>';
				}
				$reponse->closeCursor();	
			}
			else{
				echo"erreur";
			}
		?>
	</body>
</html>