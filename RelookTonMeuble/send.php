<?php 
	include'connection_bd.php';
	echo $_POST['nom'];
	echo $_POST['prenom'];
	echo $_POST['message'];
	echo $_POST['date'];
	$req = $bdd->prepare("INSERT INTO livre_or(nom, prenom, message,note,date) VALUES(:nom, :prenom,:message,:note,:date)");				
	$req->execute(array(
					'nom' => $_POST['nom'],
					'prenom' => $_POST['prenom'],
					'message' => $_POST['message'],
					'note' => $_POST['note']."/5",
					'date'=>$_POST['date']
					));
	//header('Location:livre_or.php');
?>
