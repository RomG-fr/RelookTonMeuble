<?php
    //si nous avons une image
    if(!empty($_GET['id_img'])) {
	 
		//connexion � la base de donn�es
		include'connection_bd.php';
	 
		//on s�curise notre donn�e
		$idImg = intval($_GET['id_img']);
	 
		//la requ�te qui r�cup�re l'image � partir de l'identifiant
		$req = $bdd->prepare('SELECT extension, img FROM images WHERE id_img = ?');
		$req->execute(array($idImg));		
	 
		if($req->rowCount() != 1) echo 'L\'image n\'existe pas !';
		else {
			//on stocke les donn�es dans un tableau
			$donnees = $req->fetch();	
			//on indique qu'on affiche une image
			header ("Content-type: ".$donnees['extension']);
			//on affiche l'image en elle m�me
			echo $donnees['img'];
		}
		$req->closeCursor();
    }
	else echo 'Vous n avez pas s�lectionn� d image !';
?>