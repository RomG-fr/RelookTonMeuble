<html>
	<head>
		<title>contact</title>
		<script>
			function verif_mail(formulaire){
				var mail=formulaire.login.value;
				// La 1ère étape consiste à définir l'expression régulière d'une adresse email
				var regEmail = new RegExp('^[0-9a-z._-]+@{1}[0-9a-z.-]{2,}[.]{1}[a-z]{2,5}$','i');
				var res =regEmail.test(mail);
				if(res==false ||document.getElementById('login').value.length >50){
					alert("identifiant invalide trop long longeur max 50 caractère ou mauvais structure");
				}
				return res||document.getElementById('login').value.length >50;
			}
			function verif_vide(){
				var a=true;
				var b=true;
				var c=true;
				if(document.getElementById('nom').value == ''){
					alert("Remplissez le champs nom");
					a=false;
				}
				if(document.getElementById('prenom').value == ''){
					alert("Remplissez le champs prenom");
					b=false;
				}
				if(document.getElementById('message').value == ''){
					alert("Remplissez le champs mail");
					c=false;
				}
				return a&&b&&c;
			}
			function verif(form){
				return verif_vide()&&verif_mail(form);
			}
		</script>
	</head>
	<body>
		<h1>page de contacte de l'entreprise</h1>
		<form action='send_mail.php' method='POST' onsubmit='return verif(this)'>
			<label for="nom">nom: </label>
			<input type='text' placeholder='votre nom'name='nom' id='nom'/><br />
			<label for="prenom">prenom: </label>
			<input type='text' placeholder='votre prenom'name='prenom' id='prenom'/><br />
			<label for="from">votre mail: </label>
			<input type='text' placeholder='votre mail' name='from' id='from'/><br />
			<label for="subject">sujet : </label>
			<SELECT name="subject" size="1">
				<OPTION>Demande d'information
				<OPTION>Annulation de stage
			</SELECT><br />
			<label for="message">message : </label>
			<textarea name="message" placeholder='votre message'id="message" rows="10" cols="50"></textarea><br />
			<input type='submit' value='envoyer'/>
		</form>
	</body>
</html>
