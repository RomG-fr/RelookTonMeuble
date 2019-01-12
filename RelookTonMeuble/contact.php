<html>
<head>
	<title>Contact</title>
	<link rel="icon" type="image/png" href="img/logo.png" />
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
    

    
    
    		<script>
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
			function verif_vide(){
				var a=true;
				var b=true;
				var c=true;
				if(document.getElementById('nom').value == ''){
					alert("Remplissez le champs nom");
					a=false;
				}
				if(document.getElementById('prenom').value == ''){
					alert("Remplissez le champs prenom");
					b=false;
				}
				if(document.getElementById('message').value == ''){
					alert("Remplissez le champs mail");
					c=false;
				}
				return a&&b&&c;
			}
			function verif(form){
				return verif_vide()&&verif_mail(form);
			}
		</script>
    
    
</head>
    
    
    
    
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">

            <?php include "menu.php"; ?>


              <!-- Content Wrapper. Contains page content -->
              <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                  <h1>
                        Contactez-nous
                  </h1>
                  <ol class="breadcrumb">
                    <li><a href="index.php"><i class="fa fa-home"></i> Accueil</a></li>
                    <li class="active">Contact</li>
                  </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <br/>
                    <p>Pour un relooking de meuble, envoyez nous un message avec une photo de celui-ci.<p><br/><br/>
                    <form action='send_mail.php' method='POST' onsubmit='return verif(this)' style="margin-left: 15px;">
                      <div class="row">
                        <div class="col-md-4">
                          <div class="row">
                            <div class="col-md-4">
                              <label for="nom">Nom :</label>
                            </div>
                            <div class="col-md-3">
                              <input type='text' placeholder='Votre nom'name='nom' id='nom'/><br/><br/>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-4">
                              <label for="prenom">Prenom :</label>
                            </div>
                            <div class="col-md-3">
                              <input type='text' placeholder='Votre prenom'name='prenom' id='prenom'/><br/><br/>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-4">
                              <label for="from">Votre mail :</label>
                            </div>
                            <div class="col-md-3">
                               <input type='text' placeholder='Votre mail' name='from' id='from'/><br/><br/>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-4">
                              <label for="subject">Sujet : </label>
                            </div>
                            <div class="col-md-3">
                              <select name="subject" size="1">
                                    <option>Demande d'information
                                    <option>Annulation de stage
                              </select><br/><br/>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-4">
                              <label for="message">Message : </label>
                            </div>
                            <div class="col-md-3">
                              <textarea name="message" placeholder='Votre message'id="message" rows="10" cols="50"></textarea><br/><br/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-4">
                          <div class="row">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2663.7452668047736!2d-1.6405629847062004!3d48.11514947922164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480edee4490f4333%3A0x3c4238e97734ee99!2sISTIC!5e0!3m2!1sfr!2sfr!4v1543834583937" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                          </div>
                          <div class="row">
                            <br/>
                            <p><b>Magasin :</b> Relook' ton meuble</p>
                            <p><b>Adresse :</b> 263 Avenue Général Leclerc, 35000 Rennes</p>
                            <p><b>Ville :</b> Rennes</p>
                            <p><b>Horaire :</b> 24h/24  7j/7</p>
                          </div>
                        </div> 
                        
                      </div>
                      <input type='submit' value='envoyer'/>
                    </form>
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

    </body>
</html>
    
    
    
