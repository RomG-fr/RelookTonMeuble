<?php session_start(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
   <head>
       <title>Demande de stage</title>
       <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	   <style type="text/css">
		label {
			display:block;
			width:150px;
			float:left;
		}
	   </style>
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
      <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" /> <!-- CSS daterangepicker--> 
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
                        Demande de Stage
                  </h1>
                  <ol class="breadcrumb">
                    <li><a href="index.php"><i class="fa fa-home"></i> Accueil</a></li>
                    <li class="active"><a href="#">Demande de stage</a></li>
                  </ol>
                </section>

                <!-- Main content -->
                <section class="content" >
                	<?php include "gestion_demande.php"; ?>
						<!--formulaire pour une demande de stage-->
						<div>
							<form enctype="multipart/formdata" action="#" method="post">							
								<br />
								<br />
								<label for="prenom">Prenom* : </label>
								<input type="text" name="prenom" id="prenom" /><br />
								<br />
								
								<label for="nom">Nom* : </label>
								<input type="text" name="nom" id="nom" /><br />
								<br />
								
								<label for="cv">Cv* : </label>
								<input type="file" name="cv" id="cv" /><br />
								
								<label for="lettre_motivation">Lettre de motivation* : </label>
								<input type="file" name="lettre_motivation" id="lettre_motivation" /><br />

								<label for="date_stage">Date de Stage* : </label>
								<input type="text" name="datefilter" value="" /><br />
								<br />
								
								<?php $public_key = "6LeoNYYUAAAAACZe6MTzebCBiv-NrPuNWP-xFlLn";?>
								<script src='https://www.google.com/recaptcha/api.js'></script>
								<div class="g-recaptcha" data-sitekey="<?php print $public_key; ?>"></div><br />
								<br />

								<p>(* obligatoire)</p>
								<input type="submit" name="validation" id="validation" value="Envoyer demande" />
							</form>
						</div>	
                <!-- /.content -->
            	</section>
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
        <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
		<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
		<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
		<script type="text/javascript">
							$(function() {

							  $('input[name="datefilter"]').daterangepicker({
							      autoUpdateInput: false,
							      locale: {
							          cancelLabel: 'Clear'
							      }
							  });

							  $('input[name="datefilter"]').on('apply.daterangepicker', function(ev, picker) {
							      $(this).val(picker.startDate.format('DD/MM/YYYY') + ' - ' + picker.endDate.format('DD/MM/YYYY'));
							  });

							  $('input[name="datefilter"]').on('cancel.daterangepicker', function(ev, picker) {
							      $(this).val('');
							  });

							});
		</script>
	</body>
</html>