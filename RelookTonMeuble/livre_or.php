<html>
	<head>
		<title>livre d'or</title>
		<script>
			function date(id){
				date = new Date;
				annee = date.getFullYear();
				moi = date.getMonth()+1;
				j = date.getDate();
				if(j<10){
					j = "0"+j;
				}
				if(moi<10){
					moi = "0"+moi;
				}
				resultat = j+'/'+moi+'/'+annee;
				document.getElementById(id).value = resultat;
				setTimeout('date_heure("'+id+'");','1000');
				return true;
			}
</script>
	</head>
	<body>
		<?php
			/*
				Page affichant les demandes de stages ressus
				il est possible de visualiser ou telecharger les documents joins pas le candidat
				les documents ne peuvent etre visualiser que sous les formats traité par le navigateur
				les documents au mauvais format sont téléchargés

				Une fois une demande traité, on peut la supprimer de la liste des demandes
			*/
			include'connection_bd.php';
			
			//compte le nombre de ligne dans la table affichée
			$req = $bdd->query("SELECT  COUNT(*) as compteligne FROM livre_or " );
			$lignes = $req->fetch();
			$req->closeCursor();
				
				
			//si il y à au moins 1 demande de stage
			if($lignes['compteligne']>0){
				$num=0;
				echo "<table style='border:3px solid black; border-collapse: collapse;'>
					<tr style='border:2px solid black'>
					<th style='border:2px solid black'> nom prenom</th>
					<th style='border:2px solid black'>date du poste</th>
					<th style='border:2px solid black'>message</th>
					<th style='border:2px solid black'>note</th>
					</tr> ";
					
				$requete=$bdd -> query('SELECT nom,prenom,message FROM livre_or')or exit(mysql_error());
				//on stoque les deux docs sur la meme lignes ou lignes differentes ?
					while ($donnees = $requete -> fetch()) {
						echo "<tr style='border:2px solid black'> 
						<td style='border:2px solid black'>".$donnees['nom']." ".$donnees['prenom']." </td> ";
						
						$requete1=$bdd -> query('SELECT message,note,date FROM livre_or where nom="'.$donnees['nom'].'"and prenom="'.$donnees['prenom'].'"')or exit(mysql_error());
						while ($donnees1 = $requete1 -> fetch()) {
							echo"<td style='border:2px solid black'>".$donnees1['date']."</td>";
							echo"<td style='border:2px solid black'>".$donnees1['message']."</td>";
							echo"<td style='border:2px solid black'>".$donnees1['note']."</td>";
						}
						echo"</tr> ";
					}
				echo"</table>
				<br />";
			}
			else{
				echo "<h2>aucune candidature</h2>";
			}
		?>
		<h1>livre d'or</h1>
		<form action='send.php' method='POST'>
			<label for="nom">nom: </label>
			<input type='text' placeholder='votre nom'name='nom' id='nom'/><br />
			<label for="prenom">prenom: </label>
				<input type='text' placeholder='votre prenom'name='prenom' id='prenom'/><br />
			<label for="message">message : </label>
			<textarea name="message" placeholder='votre message'id="message" rows="10" cols="50"></textarea><br />
			<label for="note">note : </label>
			<input type='radio' name='note' value='1' checked='check'>1
			<input type='radio' name='note' value='2'>2
			<input type='radio' name='note' value='3'>3
				<input type='radio' name='note' value='4'>4
			<input type='radio' name='note' value='5'>5
			<br />
			<input type='hidden' id='date' name='date'>
			<!--<span id="date"></span>-->
			<script type="text/javascript">window.onload = date('date');</script>
			<br /><br />
			<input type='submit' value='envoyer'/>
		</form>
	</body>
</html>
