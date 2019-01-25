<?php
session_start();
	include 'connection_bd.php';
	if (isset($_FILES['image'])AND ($_FILES['image']['error'] == 0)){
					// Testons si le fichier n'est pas trop gros
					if ($_FILES['image']['size'] <= 5000000){
							// Testons si l'extension est autorisée
							$infosfichier1 = pathinfo($_FILES['image']['name']);
							$extension_upload1 = $infosfichier1['extension'];
							$extensions_autorisees = array('png', 'gif', 'jpg', 'jpeg');
							// Testons si l'extension est autorisée
							if (in_array($extension_upload1, $extensions_autorisees)){
								
								// On peut valider le fichier et le stocker définitivement
                                $path1='meuble/'.$_SESSION['login']."_".basename($_FILES['image']['name']);
                                //OUTPUT Inserted.id_img;
								$req = $bdd->prepare("INSERT INTO images (nom, description, img, extension, taille,design,type,auteur)   VALUES(:nom, :description, :img, :ext, :taille, :design, :type, :auteur)");
								//execute la requète avec les valeurs
								$req->execute(array(
									'nom' => $_POST['nom'],
									'description' => $_POST['description'],
									'img' => $path1,
									'ext' => $_FILES['image']['type'],
									'taille' => $_FILES['image']['size'],
									'design' => $_POST['design'],
									'type' => $_POST['type'],
									'auteur'=> $_SESSION['login']
									));
                                $donnees=$req->fetch();
                                echo $donnees; 
								move_uploaded_file($_FILES['image']['tmp_name'],$path1);
								echo "<script>alert('image envoyee!');</script>";
							}
							else{
								echo "erreur extension";
							}
					}
					else{
						echo"erreur taille";
					}
			}
			else{
				echo"erreur envoie  ".isset($_FILES['lettre_motivation'])." la";
			}
header('location:traitement.php');
?>