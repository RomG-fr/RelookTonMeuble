<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
	<head>
       <title>Envoyer une image</title>
       <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	   <link rel="icon" type="image/png" href="image/poisson_favicon.png" />
	   <style type="text/css">
		label {
			display:block;
			width:150px;
			float:left;
		}
	   </style>
	   <script>
			function verif_vide(){
				if(document.getElementById('nom').value == ''){
					alert("Remplissez le champs nom");
					return false;
				}
				else {
					return true;
				}
			}
			function verif_length(){
				var a=true;
				var b=true;
				if(document.getElementById('nom').value.length >50){
					alert("nom trop longue");
					a=false;
				}
				if(document.getElementById('description').value.length >100){
					alert("description trop longue");
					b=false;
				}
				return a && b;
			}
			function verif(){
				return verif_vide()&&verif_length();
			}
	   </script>
	</head>
	<body>
		
		<?php include 'ajout_image.php'; ?>
		
		<input type="button" value="retour" OnClick="window.location.href='galerie.php'"/>
		
		<h1>Envoyer une image</h1>
		
		<!-- Formulaire pour ajouter une image -->
		
		<form enctype="multipart/form-data" action="#" method="post" onsubmit="return verif();">
			<div>
				<label for="nom">Nom* : </label>
				<input type="text" name="nom" placeholder="Nom" id="nom" /><br />
				
				<label for="auteur">auteur* : </label>
				<input type="text" name="auteur" placeholder="auteur" id="auteur" /><br />
				
				<label for="description">Description : </label>
				<textarea name="description" id="description" rows="10" cols="50"></textarea><br />
				
				<label for="desing">Design : </label>
				<SELECT name="design" size="1">
					<OPTION>...
					<OPTION>modern
					<OPTION>ancien
					<OPTION>brute
				</SELECT><br />
					
				<label for="type">Type : </label>
				<SELECT name="type" size="1">
					<OPTION>...
					<OPTION>commode
					<OPTION>armoire
					<OPTION>table
				</SELECT><br />
					
				<label for="image">Image* : </label>
				<input type="file" name="image" id="image" /><br />
				
				<input type="submit" name="validation" id="validation" value="Valider" />
				
			</div>
		</form>
	</body>
</html>