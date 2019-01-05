<?php
	session_start();
	if(isset($_POST['validation'])) {
 
	 //Indique si le fichier a été téléchargé
	 if(!is_uploaded_file($_FILES['image']['tmp_name']))
		echo 'Un problème est survenu durant l opération. Veuillez réessayer !';
	 else {
		//liste des extensions possibles    
		$extensions = array('/png', '/gif', '/jpg', '/jpeg');
 
		//récupère la chaîne à partir du dernier / pour connaître l'extension
		$extension = strrchr($_FILES['image']['type'], '/');
		
		//vérifie si l'extension est dans notre tableau            
		if(!in_array($extension, $extensions))
			echo 'Vous devez uploader un fichier de type png, gif, jpg, jpeg.';
		else {         
			//on définit la taille maximale
			define('MAXSIZE', 300000);        
			if($_FILES['image']['size'] > MAXSIZE)
			   echo 'Votre image est supérieure à la taille maximale de '.MAXSIZE.' octets';
			else {
				//connexion à la base de données
				<?php include 'connection_bd.php'; ?>
 
				//Lecture du fichier
				$image = file_get_contents($_FILES['image']['tmp_name']);
				
				//prepare la requète
				$req = $bdd->prepare("INSERT INTO images(nom, description, img, extension, taille,design,type) VALUES(:nom, :description, :image, :type, :taille, :design, :type)");
				
				//execute la requète avec les valeurs
				$req->execute(array(
					'nom' => $_POST['nom'],
					'description' => $_POST['description'],
					'image' => $image,
					'type' => $_FILES['image']['type'],
					'taille' => $_FILES['image']['size'],
					'design' => $_POST['design'],
					'type' => $_POST['type']
					));
 
				echo 'L\'insertion s est bien déroulée !';
			 }
		  }
	  }
  }
?>