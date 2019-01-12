
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
   <head>
       <title>Ma galerie d'images</title>
	<link rel="icon" type="image/png" href="img/logo.png" />
       <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
       
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
      <link rel="stylesheet" href="css/perso_custom.css">   <!-- CSS du MENU -->
      <link rel="stylesheet" href="css/style_galerie.css">   <!-- CSS pour la page GALERIE -->


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
                        Ma galerie d'images
                  </h1>
                  <ol class="breadcrumb">
                    <li><a href="index.php"><i class="fa fa-home"></i> Accueil</a></li>
                    <li class="active"><a href="#">Galerie</a></li>
                  </ol>
                </section>

                <!-- Main content -->
                <section class="content">
	
                    <!-- Formulaire permettant de choisir les types et design des meubles afficher -->
                    <form enctype="multipart/form-data" method="GET" action="#" class="formulaire_tri">
                        <h4>Trier les images par... </h4>
                        <div class="row" style="margin-left: 15px;">
                            <div class="col-md-3">
                                <label for="desing">Design : </label>
                                <select name="design" id="design" size="1">
                                    <option>tous</option>
                                    <option>modern</option>
                                    <option>ancien</option>
                                    <option>brute</option>
                                </select>
                            </div>

                            <div class="col-md-3">
                                <label for="type">type : </label>
                                <select name="type" id="type" size="1">
                                    <option>tous</option>
                                    <option>commode</option>
                                    <option>armoire</option>
                                    <option>table</option>
                                </select>
                            </div>
                            
                            
                            <div class="col-md-3">
                                <label for="type">Mot clef : </label>
                                <input type="text">
                            </div>
                            
                            <div class="col-md-3">
                                <input type="submit" value="filtrer"/>
                            </div>
                        </div>
                        
                    </form>
                    
                    <?php
			//session_start();
			if(isset($_SESSION['connecte'])){
			$link="'traitement.php'";
		    echo'<input style="float: right; margin-right: 10px;" type="button" value="Ajouter image..." OnClick="window.location.href='.$link.'"/>';}

                    include'connection_bd.php';

                    //structure de base de la requète
                    $req='SELECT id_img, nom, description FROM images ';

                    //liste des filtres appliquée à la selection de meubles
                    $filtre="";

                    if(isset($_GET['design'])){

                        //si des filtres on été selectionnés (utile pour le premier chargement de la page)

                        if($_GET['design']!="tous" || $_GET['type']!="tous"){
                            $req=$req." WHERE ";
                        }

                        //Si un filtre est appliquée sur les design des meubles

                        if($_GET['design']!="tous"){
                            $req= $req.'design="'.$_GET['design'].'"';
                            $filtre= $filtre.'design="'.$_GET['design'].'"';
                            }

                        //si il y a deux critère ou ajout un and à la requete

                        if($_GET['design']!="tous" && $_GET['type']!="tous"){
                            $req=$req." and ";
                            $filtre=$filtre." et ";
                            }

                        //Si un filtre est appliquée sur les types des meubles

                        if($_GET['type']!="tous"){
                            $req=$req.'type="'.$_GET['type'].'"';
                            $filtre= $filtre.'type="'.$_GET['type'].'"';
                            }
                    }
                    $reponse = $bdd->query($req);

                    echo "<h5><span style='font-weight: bold;'>Filtre.s appliqu&eacute;s :</span> ".$filtre."</h5>";
                    //affichage des images
                    echo "<div class='row' style='padding: 5px;'>"; 


                    while($result = $reponse->fetch()) {

                        $prompt='';
                                //affiche les photos des meubles
                        $prompt='
                            <div class="col-md-3 panel panel-default boite">
                                <div class="panel-heading boite_tete">
                                   '.$result['nom'].'
                                </div>
                            
                                <div class="panel-body boite_corps">
                                   <img class="image_recherche" src="apercu.php?id_img='.$result['id_img'].'" alt="'.$result['nom'].'" title="'.$result['nom'].'" />
                                   <p class="boite_description">Description : '.$result["description"].'</p>
                                </div>';


                                $direction="window.location.href='detail.php?message=".$result["id_img"]."'";
                                $direction2="window.location.href='efface.php?id=".$result["id_img"]."'";

                                //Si l'utilisateur souhaite plus de détail sur un meuble
                                $prompt=$prompt.
                                '<div class="panel-footer boite_pied">
                                    <input type="button" id="detail'.$result["id_img"].'" value="detail..." OnClick="'.$direction.'"/>
                                    <img class="boite_icon_croix" src="images/croix.png" alt="image croix" OnClick="'.$direction2.'"/>
                                </div>   
                            </div>';
                                //Visible uniquement par la secretaire, si elle souhaite supprimer un meuble
                        echo $prompt;
                    }

                    echo "</div>";
                    $reponse->closeCursor();
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
