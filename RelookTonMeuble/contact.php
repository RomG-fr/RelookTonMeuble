<html>
<head>
	<title>Contact</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
	 <?php include "menu.html";?>

	 <section>
	 	 <div class="row" style="margin-left:55px;">
			<div class="col-md-8">
				<h2>Contactez-nous</h2>
				<p>Magasin</p>
				<p>adresse</p>
				<p>ville</p>
				<p>horaire</p>
				<p>adresse mail</p>
			</div>
			<div class="col-md-4">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2663.7452668047736!2d-1.6405629847062004!3d48.11514947922164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480edee4490f4333%3A0x3c4238e97734ee99!2sISTIC!5e0!3m2!1sfr!2sfr!4v1543834583937" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
		<div class="row" style="margin-left:55px;">
			<div class="col-md-8">
				<h2>Pour un relooking de meuble, envoyez nous un message avec une photo de celui-ci</h2>
				<form>
					<table>
						<tr>
							<td><p>Nom*</p></td>
							<td><input type="text" name="nom" size="48"/></td>
						</tr>
						<tr>
							<td><p>Email*</p></td>
							<td><input type="text" name="mail" size="48"/></td>
						</tr>
						<tr>
							<td><p>Titre*</p></td>
							<td><input type="text" name="titre" size="48"/></td>
						</tr>
						<tr>
							<td><p>Message*</p></td>
							<td><textarea name="corps_de_texte" rows="8" cols="32"></textarea></td>
						</tr>
						<tr>
							<td><p>Photo du meuble*</p></td>
							<td><input name="MAX_FILE_SIZE" type="hidden" value="3000" /><input name="fichier" type="file" /></td>
						</tr>
					</table>
					<input type="submit" name="envoyer" value="Envoyer"/>
				</form>
			</div>	
		</div>
	 </section>	

	
</body>
</html>