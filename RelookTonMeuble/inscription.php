<?php
session_start();

//utilise sign_in

/*
Lorsque la secretaire veut ajouter un stagiaire elle se rend sur cette page pour l'ajouter
lors du chargement de la page un mot de passe est généré aléatoirement 
la secretaire doit saisir le mail du stagiaire à ajouter
*/

?>
<html>
	<head>
		<title>Inscrire un stagiaire</title>
		<link rel="icon" type="image/png" href="img/logo.png" />
		<meta charset="utf-8"/>
		<script>
			
			//Fonction vérifiant la structure de l'adresse mail
			function verif_mail(formulaire){
				var mail=formulaire.login.value;
				// La 1ère étape consiste à définir l'expression régulière d'une adresse email
				var regEmail = new RegExp('^[0-9a-z._-]+@{1}[0-9a-z.-]{2,}[.]{1}[a-z]{2,5}$','i');
				var res =regEmail.test(mail);
				if(res==false ||document.getElementById('login').value.length >50){
					alert("identifiant invalide trop long longeur max 50 caractère ou mauvais structure");
				}
				return res||document.getElementById('login').value.length >50;
			}
		
			//Génère une chaine de caractèreS aléatoire
			function ChaineAleatoire(nbcar){
				var ListeCar = new Array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z",
				"A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z",
				"0","1","2","3","4","5","6","7","8","9");
				var Chaine ='';
				for(i = 0; i < nbcar; i++){
					Chaine = Chaine + ListeCar[Math.floor(Math.random()*ListeCar.length)];
				}
				return Chaine;
			}
			
			function verif_mdp(){
				if(document.getElementById('mdp').value.length < 8||document.getElementById('mdp').value.length >50){
					alert("mot de passe invalide longueur entre 8 et 50 caractère");
					return false;
				}
				else {
					return true;
				}
			}
			function verif(formulaire){
				var valide=false;
				valide= verif_mail(formulaire)&&verif_mdp();
				if(valide){
					alert("Ajout réussi");
				}
			}
			//Au chargement de la page un mot de passe aléatoire de 8 caractère à placé dans la case mot de passe
			function mdpRandom(){
				document.getElementById('mdp').value=ChaineAleatoire(8);
			}
		
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
		<?php 
			//si l'identifiant existe déjà on affiche le message suivant
			if(isset($_GET['message'])&&$_GET['message']="erreur"){
				echo("<script>alert('identifiant deja existant');</script>");
			}
		?>
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
        <div id="resultat">
        <!--affiche un retour en jQuery au visiteur -->
        </div>
	    <div class="cont_principal">
		    <div class="cont_centrar">
                <div class="cont_login">
                      <form action="sign_in.php" method="POST" onsubmit="return verif_vide()">
                          <div class="cont_tabs_login">
                            <ul class='ul_tabs'>
                              <li class="active">
                                <a href="#" onclick="sign_in()">Inscrire un stagiaire</a>
                                <span class="linea_bajo_nom"></span>
                              </li>

                            </ul>
                          </div>
		                    <div class="cont_text_inputs">
		                          <input type="text" class="input_form_sign d_block active_inp" placeholder="Email" name="emauil_us" id="login"/>

		                          <input type="password" class="input_form_sign d_block  active_inp" placeholder="Mot de passe" name="pass_us" id="mdp" onload='mdpRandom()'/>                         
		                    </div>
		                  	<div class="cont_btn">
		                       <button class="btn_sign">Inscrire</button>

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
<!-- ChartJS -->
<script src="bower_components/chart.js/Chart.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

</body>
</html>
