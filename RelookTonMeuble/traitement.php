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

            <?php include "menu.html"; ?>


              <!-- Content Wrapper. Contains page content -->
              <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                  <h1>
                        Envoyer une image
                    <small>Sous-titre</small>
                  </h1>
                  <ol class="breadcrumb">
                    <li><a href="index.php"><i class="fa fa-home"></i> Accueil</a></li>
                    <li><a href="galerie.php">Galerie</a></li>
                    <li class="active"><a href="#">Envoyer une image</a></li>
                  </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    
                    
                    <?php include 'ajout_image.php'; ?>

                    <!-- Formulaire pour ajouter une image -->

                    <form enctype="multipart/form-data" action="#" method="post" onsubmit="return verif();">
                        <div class="row" style="margin: 10px 0px 0px 15px;">
                            <div class="col-md-8">
                                <label for="nom">Nom* : </label>
                                <input type="text" name="nom" placeholder="Nom" id="nom" /><br/><br/>
                                
                                <label for="description">Description : </label>
                                <textarea name="description" id="description" rows="10" cols="50"></textarea><br/>
                                
                                
                                <label for="desing">Design : </label>
                                <select name="design" size="1">
                                    <option>...</option>
                                    <option>modern</option>
                                    <option>ancien</option>
                                    <option>brute</option>
                                </select>
                                    <br/><br/>
                                <label for="type">Type : </label>
                                <select name="type" size="1">
                                    <option>...</option>
                                    <option>commode</option>    
                                    <option>armoire</option>
                                    <option>table</option>
                                </select>
                                    <br/><br/><br/><br/>
                                
                                <label for="image">Image* : </label>
                                <input type="file" name="image" id="image" /><br/><br/><br/>
                                
                                <input type="submit" name="validation" id="validation" value="Valider" style="width: 50%;"/>
                            </div>
                        </div>
                    </form>
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
        <!-- ChartJS -->
        <script src="bower_components/chart.js/Chart.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="dist/js/pages/dashboard2.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="dist/js/demo.js"></script>
	</body>
</html>