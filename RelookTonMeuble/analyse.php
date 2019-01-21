<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
   <head></head>
	<body>
	<?php include "gestion_demande.php"; ?>
						<!--formulaire pour une demande de stage-->
						<div>
							<form enctype="multipart/formdata" action="#" method="post">							
								<br />
								<br />
								<label for="prenom">Prenom* : </label>
								<input type="text" name="prenom" id="prenom" /><br />
								<br />
								
								<label for="nom">Nom* : </label>
								<input type="text" name="nom" id="nom" /><br />
								<br />
								
								<label for="cv">Cv* : </label>
								<input type="file" name="cv" id="cv" /><br />
								
								<label for="lettre_motivation">Lettre de motivation* : </label>
								<input type="file" name="lettre_motivation" id="lettre_motivation" /><br />

								<label for="date_stage">Date de Stage* : </label>
								<input type="text" name="datefilter" value="" /><br />
								<br />
								
								<script src='https://www.google.com/recaptcha/api.js'></script>
								<div class="g-recaptcha" data-sitekey="<?php print $public_key; ?>"></div><br />
								<br />

								<p>(* obligatoire)</p>
								<input type="submit" name="validation" id="validation" value="Envoyer demande" />
							</form>
</div>	
</body>
</html>
