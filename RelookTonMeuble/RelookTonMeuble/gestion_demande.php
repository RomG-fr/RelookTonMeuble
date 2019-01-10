<?php

	include 'connection_bd.php';
	$public_key = "6LeoNYYUAAAAACZe6MTzebCBiv-NrPuNWP-xFlLn"; /* reCaptcha public key */
	$private_key = "6LeoNYYUAAAAAOjtZa3Whit4ADeyB5NgkKBs4Kwv"; /* reCaptcha private key */
	$url = "https://www.google.com/recaptcha/api/siteverify"; /* Default end-point */

	/* Check if the form has been submitted */
	if(array_key_exists('validation',$_POST)){
		/* The response given by the form being submitted */
		$response_key = $_POST['g-recaptcha-response'];
		/* Send the data to the API for a response */
		$response = file_get_contents($url.'?secret='.$private_key.'&response='.$response_key.'&remoteip='.$_SERVER['REMOTE_ADDR']);
		/* json decode the response to an object */
		$response = json_decode($response);
		/* if success */
		if($response->success == 1){
			// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
			if (isset($_FILES['cv']) AND $_FILES['cv']['error'] == 0 AND isset($_FILES['lettre_motivation']) AND $_FILES['lettre_motivation']['error'] == 0){
					// Testons si le fichier n'est pas trop gros
					if ($_FILES['cv']['size'] <= 100000000 AND $_FILES['lettre_motivation']['size'] <= 100000000){
							// Testons si l'extension est autorisée
							$infosfichier1 = pathinfo($_FILES['cv']['name']);
							$extension_upload1 = $infosfichier1['extension'];
							$extensions_autorisees = array('pdf', 'odt', 'txt', 'docx', 'doc', 'avi', 'mp4');
							// Testons si l'extension est autorisée
							$infosfichier2 = pathinfo($_FILES['lettre_motivation']['name']);
							$extension_upload2 = $infosfichier2['extension'];
							if (in_array($extension_upload1, $extensions_autorisees) AND in_array($extension_upload2, $extensions_autorisees)){
								
								// On peut valider le fichier et le stocker définitivement
								$path1='upload/'.$_POST['nom']."_".$_POST['prenom']."_".basename($_FILES['cv']['name']);
								$path2='upload/'.$_POST['nom']."_".$_POST['prenom']."_".basename($_FILES['lettre_motivation']['name']);
								$req = $bdd->prepare("INSERT INTO dossier(nom,prenom,path_cv,path_lettre_motivation) VALUES(:nom,:prenom,:path_cv,:path_lettre_motivation)");
								$req->execute(array(
								'nom' => $_POST['nom'],
								'prenom'=> $_POST['prenom'],
								'path_cv' => $path1,
								'path_lettre_motivation'=> $path2
								));
								move_uploaded_file($_FILES['cv']['tmp_name'],$path1);	
								move_uploaded_file($_FILES['lettre_motivation']['tmp_name'],$path2);
								echo "Candidature envoy&eacute;e!";
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
				echo"erreur envoie";
			}
		}
		else{
			echo "erreur! cochez la case pour indiquer que vous n'etes pas un robot.";
		}
	}
?>