<?php
	if(isset($_POST['validation'])) {
 
	 //Indique si le fichier a été téléchargé
	 if(!is_uploaded_file($_FILES['image']['tmp_name']))
		 echo '<script> alert("Un problème est survenu durant l opération. Veuillez réessayer !");</script>';
	 else {
		//liste des extensions possibles    
		$extensions = array('/png', '/gif', '/jpg', '/jpeg');
 
		//récupère la chaîne à partir du dernier / pour connaître l'extension
		$extension = strrchr($_FILES['image']['type'], '/');
		
		//vérifie si l'extension est dans notre tableau            
		if(!in_array($extension, $extensions))
			echo '<script> alert("Vous devez uploader un fichier de type png, gif, jpg, jpeg.");</script>';
		else {         
			//on définit la taille maximale
			define('MAXSIZE', 5000000);        
			if($_FILES['image']['size'] > MAXSIZE)
				echo '<script> alert("Votre image est supérieure à la taille maximale de '.MAXSIZE.' octets");</script>';
			else {
				//connexion à la base de données
				 include 'connection_bd.php';
 
				//Lecture du fichier
				$image = file_get_contents($_FILES['image']['tmp_name']);
				
				//prepare la requète
				$req = $bdd->prepare("INSERT INTO images (nom, description, img, extension, taille,design,type,auteur) VALUES(:nom, :description, :img, :ext, :taille, :design, :type, :auteur)");
				
				//execute la requète avec les valeurs
				$req->execute(array(
					'nom' => $_POST['nom'],
					'description' => $_POST['description'],
					'img' => $image,
					'ext' => $_FILES['image']['type'],
					'taille' => $_FILES['image']['size'],
					'design' => $_POST['design'],
					'type' => $_POST['type'],
					'auteur'=> $_SESSION['login']
					));
				echo '<script>alert("L\'insertion s\'est bien d\'eroulee !");</script>';
			 }
		  }
	  }
  }
?>
