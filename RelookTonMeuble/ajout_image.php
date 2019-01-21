<?php
	if(isset($_POST['validation'])) {
 
	 //Indique si le fichier a �t� t�l�charg�
	 if(!is_uploaded_file($_FILES['image']['tmp_name']))
		 echo '<script> alert("Un probl�me est survenu durant l op�ration. Veuillez r�essayer !");</script>';
	 else {
		//liste des extensions possibles    
		$extensions = array('/png', '/gif', '/jpg', '/jpeg');
 
		//r�cup�re la cha�ne � partir du dernier / pour conna�tre l'extension
		$extension = strrchr($_FILES['image']['type'], '/');
		
		//v�rifie si l'extension est dans notre tableau            
		if(!in_array($extension, $extensions))
			echo '<script> alert("Vous devez uploader un fichier de type png, gif, jpg, jpeg.");</script>';
		else {         
			//on d�finit la taille maximale
			define('MAXSIZE', 300000);        
			if($_FILES['image']['size'] > MAXSIZE)
				echo '<script> alert("Votre image est sup�rieure � la taille maximale de '.MAXSIZE.' octets");</script>';
			else {
				//connexion � la base de donn�es
				 include 'connection_bd.php';
 
				//Lecture du fichier
				$image = file_get_contents($_FILES['image']['tmp_name']);
				
				//prepare la requ�te
				$req = $bdd->prepare("INSERT INTO images (nom, description, img, extension, taille,design,type,auteur) VALUES(:nom, :description, :img, :ext, :taille, :design, :type, :auteur)");
				
				//execute la requ�te avec les valeurs
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
 				echo $_FILES['image']['type']." size:".$_FILES['image']['size']." design:".$_POST['design']." type:".$_POST['type']." auteur:".$_SESSION['login'];
				echo '<script>alert("L\'insertion s est bien d&eacute;  roul&eacute;e !");</script>';
			 }
		  }
	  }
  }
?>
