<!DOCTYPE html>
<html>
<head> <meta charset="utf-8" />
    <title>Connexion</title>
	<link rel="icon" type="image/png" href="image/poisson_favicon.png" />
	<script>
		function verif_vide(){
			if(document.getElementById('login').value == ''&& document.getElementById('mdp').value == ''){
			alert("Au moins un champs est vide");
			return false;
		}
		else {
			return true;
			}
		}
	</script>
	 <meta charset="utf-8">
		  <meta http-equiv="X-UA-Compatible" content="IE=edge">
		  <title>Connexion</title>
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



		  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		  <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		  <![endif]-->

		  <!-- Google Font -->
		  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
          <link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
          <link rel="stylesheet" type="text/css" href="css/style_connexion.css">
          <link rel="stylesheet" href="css/perso_custom.css">

</head>

<body>
    

     <body class="hold-transition sidebar-mini">
<div class="wrapper">
    <?php include "menu.html"; ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-home"></i> Accueil</a></li>
        <li class="active"><a href="#">Connexion</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    	<br />
    	<br />
        <br />
        <br />
        <div id="resultat">
        <!--affiche un retour en jQuery au visiteur -->
        </div>
	    <div class="cont_principal">
		    <div class="cont_centrar">
                <div class="cont_login">
                      <form onsubmit='return verif_vide()'>
                          <div class="cont_tabs_login">
                            <ul class='ul_tabs'>
                              <li class="active">
                                <a href="#" onclick="sign_in()">Se Connecter</a>
                                <span class="linea_bajo_nom"></span>
                              </li>

                            </ul>
                          </div>
                    <div class="cont_text_inputs">

                          <input type="text" class="input_form_sign d_block active_inp" placeholder="Email" name="emauil_us" id="login"/>

                          <input type="password" class="input_form_sign d_block  active_inp" placeholder="Mot de passe" name="pass_us" id="mdp" />
                         

                          <a href="#" class="link_forgot_pass d_block" >Mot de passe oublié ?</a>
                         
                        </div>
                  <div class="cont_btn">
                       <button class="btn_sign">Se Connecter</button>

                    </div>

                      </form>
                  </div>

		    </div>
		  </div>
		  <script type="text/javascript" src="js/connexion.js">
		  </script>
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

	<?php
	$linko="'logout.php'";
	echo'<input type="button" value="deconnection" OnClick="window.location.href='.$linko.'"/>';
		if(isset($_SESSION['login'])){
			$link="'stagiaire.php'";
			echo'<input type="button" value="acceder au réalisation" OnClick="window.location.href='.$link.'"/>';
		}
	?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>


<script>
	$(document).ready(function(){

		$("#submit").click(function(e){
			e.preventDefault();

			$.post(
				'login.php', // page pour se connecter
				{
					login : $("#login").val(),  // Nous récupérons la valeur de nos input que l'on fait passer à connexion.php
					mdp : $("#mdp").val()
				},

				function(data){

					if(data == 'Success'){
						 // Le membre est connecté. Ajoutons lui un message dans la page HTML.
						 $("#resultat").html("<p>Vous avez été connecté avec succès !</p>");
						 window.location.href='stagiaire.php';
					}
					else{
						 // Le membre n'a pas été connecté. (data vaut ici "failed")
						 $("#resultat").html("<p>Erreur lors de la connexion...</p>");
					}

				},
				'text'
			 );
		});
	});
</script>
</body>
</html>
