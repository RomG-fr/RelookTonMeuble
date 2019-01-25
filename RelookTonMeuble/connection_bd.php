<?php
	try {
		$bdd = new PDO('mysql:host=localhost;dbname=image', 'root', '');} 
	catch (Exception $e) {
		exit('Erreur : ' . $e->getMessage());
		}
?>
