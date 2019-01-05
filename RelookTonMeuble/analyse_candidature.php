<?php
session_start();
?>
<html>
	<head>
		<link rel="icon" type="image/png" href="image/poisson_favicon.png" />
		<script>
			//valide le formulaire pour retirer une demande si il y a au moins 1 demande à supprimer
			function verif(nb){
				
					var i;
					for(i=0;i<=nb;i++){
						if (document.getElementById(i).checked){
							return confirm("Voulez vous vraiment supprimer la/les demande.s ?");
						}
					}
					alert("aucune candidature n'est selectionnee");
					return false;

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
			$req = $bdd->query("SELECT  COUNT(*) as compteligne FROM dossier " );
			$lignes = $req->fetch();
			$req->closeCursor();
			echo "Nombre de candidatures : ".$lignes['compteligne'];
			//si il y à au moins 1 demande de stage
			if($lignes['compteligne']>0){
				$num=0;
				echo "<form action='sup.php' method='post' onsubmit='return verif(".($num).");'>
					<table style='border:3px solid black'>
					<tr style='border:2px solid black'>
					<th style='border:2px solid black'> Candidat</th>
					<th style='border:2px solid black'>telecharger CV</th>
					<th style='border:2px solid black'>Visualiser CV</th>
					<th style='border:2px solid black'>telecharger la lettre de motivation</th>
					<th style='border:2px solid black'>visuliser la lettre de motivation</th>
					<th style='border:2px solid black'>supprimer</th>
					</tr> ";
					
				$requete=$bdd -> query('SELECT nom,prenom FROM dossier')or exit(mysql_error());
				//on stoque les deux docs sur la meme lignes ou lignes differentes ?
					while ($donnees = $requete -> fetch()) {
						echo "<tr style='border:2px solid black'> 
						<td style='border:2px solid black'>".$donnees['nom']." ".$donnees['prenom']." </td> ";
						$requete1=$bdd -> query('SELECT path_cv,path_lettre_motivation FROM dossier where nom="'.$donnees['nom'].'"and prenom="'.$donnees['prenom'].'"')or exit(mysql_error());
						while ($donnees1 = $requete1 -> fetch()) {
							echo"<td style='border:2px solid black'><a href=".$donnees1['path_cv']." download>telecharger</a></td>";
							echo"<td style='border:2px solid black'><a href=".$donnees1['path_cv']." >visualiser</a></td>";
							echo"<td style='border:2px solid black'><a href=".$donnees1['path_lettre_motivation']." download>telecharger</a></td>";
							echo"<td style='border:2px solid black'><a href=".$donnees1['path_lettre_motivation']." >visualiser</a></td>";
						}
						echo"<td style='border:2px solid black'><input type='checkbox' id='".$num."' name='supprimer[]' value='".$donnees['nom']."/".$donnees['prenom']."'></td>";
						echo"</tr> ";
						$num=$num+1;
					}
				echo"</table>
				<br />
				<input type='submit' value='supprimer les demandes selectionn&eacute;s'/>
				<input type='reset' value='annuler'/>
				</form>";
			}
			else{
				echo "<h2>aucune candidature</h2>";
			}
		?>
	</body>
</html>