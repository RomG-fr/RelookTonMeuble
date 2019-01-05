<?php session_start(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
   <head>
       <title>Demande de stage</title>
       <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	   <style type="text/css">
		label {
			display:block;
			width:150px;
			float:left;
		}
	   </style>
   </head>
   <body>
   <?php
		include 'gestion_demande.php';
   ?>
	<h2>Demande de stage</h2>
	
	<!--formulaire pour une demande de stage-->
	<form enctype="multipart/form-data" action="#" method="post">
		<div>
			<p>* obligatoire</p>
			
			<label for="prenom">Prenom* : </label>
			<input type="text" name="prenom" id="prenom" /><br />
			
			<label for="nom">Nom* : </label>
			<input type="text" name="nom" id="nom" /><br />
			
			<label for="cv">cv* : </label>
			<input type="file" name="cv" id="cv" /><br />
			
			<label for="lettre_motivation">Lettre de motivation* : </label>
			<input type="file" name="lettre_motivation" id="lettre_motivation" /><br />
			
			<script src='https://www.google.com/recaptcha/api.js'></script>
			<div class="g-recaptcha" data-sitekey="<?php print $public_key; ?>"></div><br />
			
			<input type="submit" name="validation" id="validation" value="Envoyer demande" />
		</div>
	</form>
</body>
</html>