<?php
session_start();
?>
<html>
	<head><?php
session_start();

//utilise sign_in

/*
Lorsque la secretaire veut ajouter un stagiaire elle se rend sur cette page pour l'ajouter
lors du chargement de la page un mot de passe est généré aléatoirement 
la secretaire doit saisir le mail du stagiaire à ajouter
*/

?>
		<title>Demande de stage reçu</title>
		<meta charset="utf-8"/>
		<link rel="icon" type="image/png" href="img/logo.png" />
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
		  <meta http-equiv="X-UA-Compatible" content="IE=edge">
		  <!-- Tell the browser to be responsive to screen width -->
		  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		  <link rel="stylesheet" type="text/css" href="css/style.css">
		  <!-- Bootstrap 3.3.7 -->
		  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
		  <!-- Font Awesome -->
		  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
		  <!-- Ionicons -->
		  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
		  <!-- jvectormap -->
		  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
		  <!-- Theme style -->
		  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
		  <!-- AdminLTE Skins. Choose a skin from the css/skins
		       folder instead of downloading all of them to reduce the load. -->
		  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
        
          <link rel="stylesheet" type="text/css" href="css/style_connexion.css">
          <link rel="stylesheet" href="css/perso_custom.css">
	</head>
	
	<body>
	<div class="wrapper">
    <?php include "menu.php"; ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-home"></i> Accueil</a></li>
        <li class="active"><a href="#">Inscrire un stagiaire</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    	<br />
    	<br />
		<br />
        <br />
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
					<th style='border:2px solid black'>dates du stage</th>
					<th style='border:2px solid black'>supprimer</th>
					</tr> ";
					
				$requete=$bdd -> query('SELECT nom,prenom FROM dossier')or exit(mysql_error());
				//on stoque les deux docs sur la meme lignes ou lignes differentes ?
					while ($donnees = $requete -> fetch()) {
						echo "<tr style='border:2px solid black'> 
						<td style='border:2px solid black'>".$donnees['nom']." ".$donnees['prenom']." </td> ";
						$requete1=$bdd -> query('SELECT path_cv,path_lettre_motivation,date FROM dossier where nom="'.$donnees['nom'].'"and prenom="'.$donnees['prenom'].'"')or exit(mysql_error());
						while ($donnees1 = $requete1 -> fetch()) {
							echo"<td style='border:2px solid black'><a href=".$donnees1['path_cv']." download>telecharger</a></td>";
							echo"<td style='border:2px solid black'><a href=".$donnees1['path_cv']." >visualiser</a></td>";
							echo"<td style='border:2px solid black'><a href=".$donnees1['path_lettre_motivation']." download>telecharger</a></td>";
							echo"<td style='border:2px solid black'><a href=".$donnees1['path_lettre_motivation']." >visualiser</a></td>";
						echo"<td style='border:2px solid black'>".$donnees1['date']."</td>";
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
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 0.2.1
    </div>
    <strong>Copyright &copy; 2019 <a href="#">Relook' ton meuble</a>.</strong> Tous droits réservés.
  </footer>

  <!-- Control Sidebar -->

  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap  -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>


</body>
</html>

