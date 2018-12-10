<html>
	<head>
		<title>Demande de stage</title>
	  	<meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <title>AdminLTE 2 | Dashboard</title>
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
      <link rel="stylesheet" href="dist/css/perso_custom.css">

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
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">

    <?php include "menu.html"; ?>
    
    
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
    <!-- Main content -->
    <section class="content">
	     <div>
			<h2>Demande de stage</h2>
			<form  enctype="multipart/formdata">
				<table>
					<tr>
						<td><p>Nom*</p></td>
						<td><input type="text" name="nom" size="48"/></td>
					</tr>
					<tr>
						<td><p>Prenom*</p></td>
						<td><input type="text" name="prenom" size="48"/></td>
					</tr>
					<tr>
						<td><p>Age*</p></td>
						<td><input type="text" name="age" size="48"/></td>
					</tr>
					<tr>
						<td><p>Adresse Mail*</p></td>
						<td><input type="text" name="adressemail" size="48"/></td>
					</tr>
					<tr>
						<td><p>Date de votre stage*</p></td>
						<td><input type="text" name="datefilter" value="" /></td>
					</tr>
					<tr>
						<td>CV*</td>
						<td>
							<input name="MAX_FILE_SIZE" type="hidden" value="3000" />
							<input name="CV" type="file" />
						</td>
					</tr>
					<tr>
						<td>Lettre de motivation*</td>
						<td>
							<input name="MAX_FILE_SIZE" type="hidden" value="3000" />
							<input name="Lettre de motivation" type="file" />
						</td>
					</tr>
				</table>
				<input type="submit" name="envoyer" value="Envoyer"/>
			</form>
		</div>
    </section>

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
<!-- ChartJS -->
<script src="bower_components/chart.js/Chart.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
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