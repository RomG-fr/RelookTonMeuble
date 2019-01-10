<?php
	try {
		$bdd = new PDO('mysql:host=localhost;dbname=image', 'root', 'diablox9');} 
	catch (Exception $e) {
		exit('Erreur : ' . $e->getMessage());
		}
?>
