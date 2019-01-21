<?php
/*
	ajouter une colonne stagiaire dans images pour savoir quel stagiaire s'est charger du relooking d'un meuble
*/
?>

<?php 
session_start();?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
<<<<<<< HEAD
	<head>
		<title>Galerie d'images</title>
		<link rel="icon" type="image/png" href="img/logo.png" />
       	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	   	
		 <meta charset="utf-8">
		  <meta http-equiv="X-UA-Compatible" content="IE=edge">
		  <!-- Tell the browser to be responsive to screen width -->
		  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
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
		  <link rel="stylesheet" href="css/perso_custom.css">


		  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		  <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		  <![endif]-->

		  <!-- Google Font -->
		  <link rel="stylesheet"
		        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
	</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <?php include "menu.php"; ?>
    
    
  <!-- Content Wrapper. Contains page content -->
 		<div class="content-wrapper">
 			   <!-- Content Header (Page header) -->
 			<section class="content-header">
 			     <h1>
 			           Galerie d'images de <?php echo $_SESSION['login'];?>
 			     </h1>
 			     <ol class="breadcrumb">
 			       <li><a href="index.php"><i class="fa fa-home"></i> Accueil</a></li>
 			       <li class="active"><a href="#">Galerie d'images de <?php echo $_SESSION['login'];?></a></li>
 			     </ol>
		    </section>
			<!-- Main content -->
		    <section class="content">
				<input type="button" value="Déconnection" OnClick="window.location.href='logout.php'"/>
				<br />
=======
   <head>
       <title>Galerie d'images</title>
	   <link rel="icon" type="image/png" href="image/poisson_favicon.png" />
       <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	   <style type="text/css">
		body {
			width: 95%;
		}
 
		div {
			width: 22%;
			float: left;
			text-align: center;
			border: 1px solid black;
			margin: 5px;
			padding:  5px;
		}
 
		p {
			text-align: left;
		}
	   </style>
   </head>
   <body>
 
	<h1>Galerie d'images de <?php echo $_SESSION['login'];?></h1>
	
	<input type="button" value="deconnection" OnClick="window.location.href='logout.php'"/>
	<br />
>>>>>>> 2c490fedb87d826d80b0842b3cd87562484453f7
	<!-- Formulaire permettant de choisir les types et design des meubles afficher -->
	<?php
	
		include'connection_bd.php';
		
		//structure de base de la requète
		$req="SELECT id_img, nom, description FROM images where auteur='".$_SESSION['login']."'";
		$reponse = $bdd->query($req);
		//affichage des images
		
	    while($result = $reponse->fetch()) {
			
			$prompt='';
					//affiche les photos des meubles
			$prompt='
				<div> 
					<img src="apercu.php?id_img='.$result['id_img'].'" alt="'.$result['nom'].'" title="'.$result['nom'].'" />
					<p>Description : '.$result["description"].'</p></div>';
					
					$direction="window.location.href='detail.php?message=".$result["id_img"]."'";
					$direction2="window.location.href='efface.php?id=".$result["id_img"]."'";
			echo $prompt;
	    }
	    $reponse->closeCursor();
	?>
	</body>
</html>