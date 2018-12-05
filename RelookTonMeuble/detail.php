<?php
session_start();
?>
<html>
<head>
<input type="button" value="retour" OnClick="window.location.href='galerie.php'"/>
<?php 
		$queries = array();
		parse_str($_SERVER['QUERY_STRING'], $queries);
		foreach ($queries as $value){
			define('MAXSIZE', 300000);        
			if($_FILES['image']['size'] > MAXSIZE)
			   echo 'Votre image est supérieure à la taille maximale de '.MAXSIZE.' octets';
			else {
				//connexion à la base de données
				try {
					$utilisateur='user_17007005';
					$mdp='7&n4v,4V';
					$bdd = new PDO('mysql:host=mysql.istic.univ-rennes1.fr;dbname=base_17007005', $utilisateur, $mdp);
				} catch (Exception $e) {
					exit('Erreur : ' . $e->getMessage());
				}
				//Lecture du fichier
				$reponse = $bdd->query('SELECT id_img, nom, description,extension,taille FROM images where id_img='.$value);
				while($result = $reponse->fetch()) {
				echo '<div>';
				echo '<a href="apercu.php?id_img='.$result['id_img'].'"><img src="apercu.php?id_img='.$result['id_img'].'" alt="'.$result['nom'].'" title="'.$result['nom'].'" /></a>';
				echo '<p>Description : '.$result["description"].'</p>';
				echo '<p>taille : '.$result["taille"].' octets</p>';
				echo '<p>extension : '.$result["extension"].'</p>';
				echo '</div>';
				}
				$reponse->closeCursor();
					 }	
		}
	?>
</head>
<body>
</body>
</html>