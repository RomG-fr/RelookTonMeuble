<?php
session_start();
?>
<html>
<head>
	<title>Detail</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
	 <?php include "menu.html";?>
	 <section>
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
	 </section>	

	
</body>
</html>