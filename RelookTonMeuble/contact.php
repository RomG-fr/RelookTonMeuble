<html>
<head>
	<title>Contact</title>
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
  <link rel="stylesheet" href="css/perso_custom.css">   <!-- CSS à Jerome -->


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
                        Contactez-nous
                    <small>Sous-titre</small>
                  </h1>
                  <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-home"></i> Accueil</a></li>
                    <li class="active">Contact</li>
                  </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    
                    <div class="col-md-7">
                        <h4>Pour un relooking de meuble, envoyez nous un message avec une photo de celui-ci.</h4>
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
                    
                    <div class="col-md-5">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2663.7452668047736!2d-1.6405629847062004!3d48.11514947922164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480edee4490f4333%3A0x3c4238e97734ee99!2sISTIC!5e0!3m2!1sfr!2sfr!4v1543834583937" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    
                    
                    
                    
                    <div class="col-md-5" style="margin-top: 50px;">  
                            <p>Magasin : Relook' ton meuble</p>
                            <p>adresse : 263 Avenue Général Leclerc, 35000 Rennes</p>
                            <p>ville : Rennes</p>
                            <p>horaire : 24h/24  7j/7</p>
                        <!--    <p>adresse mail :</p> -->
                    </div>
                    
                    
                    
                </section>
                <!-- /.content -->
              </div>
              <!-- /.content-wrapper -->

              <footer class="main-footer">
                <div class="pull-right hidden-xs">
                  <b>Version</b> 0.2.1
                </div>
                <strong>Copyright &copy; 2018 <a href="#">Relook' ton meuble</a>.</strong> Tous droits réservés.
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
    
    
    
    
    
    
    
    
    
    
