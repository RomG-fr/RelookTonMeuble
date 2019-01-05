<html>
<head>
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
    
    
    
    
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <?php include "menu.html"; ?>
    
    
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
            Creer un compte
        <small>&nbsp;Remplir le formulaire</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Accueil</a></li>
        <li class="active">Titre</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-8">
            <div>
                    
                <form action="">
                        <div class="cont_tabs_login">
                            <ul class='ul_tabs'>
                            <li class="active">
                                <a href="#" onclick="sign_in()">Se Connecter</a>
                                <span class="linea_bajo_nom"></span>
                            </li>
                            <li>
                                <a href="#up" onclick="sign_up()">S'inscrire</a>
                                <span class="linea_bajo_nom"></span>
                            </li>
                        </ul>
                        </div>
                    <div class="cont_text_inputs">
                        <input type="text" class="input_form_sign " placeholder="NAME" name="name_us" />

                        <input type="text" class="input_form_sign d_block active_inp" placeholder="EMAIL" name="emauil_us" />

                        <input type="password" class="input_form_sign d_block  active_inp" placeholder="PASSWORD" name="pass_us" />  
                        <input type="password" class="input_form_sign" placeholder="Confirmer le MDP" name="conf_pass_us" />

                        <a href="#" class="link_forgot_pass d_block" >Mot de passe oublié ?</a>    
                        <div class="terms_and_cons d_none">
                            <p>
                                <input type="checkbox" name="terms_and_cons" /> 
                                <label for="terms_and_cons">Accepter les Termes et Conditions générales.</label>
                            </p>
                        </div>
                    </div>
                    <div class="cont_btn">
                        <button class="btn_sign">Se Connecter</button>
                    </div>
                </form>    
    
                
            </div>
                 <p style="text-align: left;">
                           Vous possédez déjà un compte ? <span style="color: darkgoldenrod; cursor: pointer;" data-toggle="modal" data-target="#se_connecter"><u> Connectez vous</u></span>!
                        </p>  

                    
                
            </div>
            
            
            <div class="col-md-3"></div>
        </div><!-- /.row -->
        
        
        <!-- Modal -->
        <div class="modal fade" id="se_connecter" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h3 class="modal-title">Se connecter</h3>
                    </div> <!-- /.modal-header   --> 

                    <div class="modal-body">
                    
                        <form class="form-horizontal" action="#">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email">Email:</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" placeholder="Saisir votre email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="pwd">Mot de passe:</label>
                                <div class="col-sm-10"> 
                                <input type="password" class="form-control" id="pwd" placeholder="Saisir votre mot de passe">
                                </div>
                                <a style="margin-left: 15px; color: darkgoldenrod; cursor: pointer;" href="#"><u>Mot de passe oublié ?</u></a>
                            </div>
                            <div class="form-group"> 
                                <div class="col-sm-offset-2 col-sm-10">
                                    <div class="checkbox">
                                        <label><input type="checkbox"> Se souvenir de moi</label>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="modal-footer">
                                <div class="row" style="padding : 15px; text-align: left;">
                                    <div class="col-md-8">
                                        <p>
                                            Pas encore de compte ?<br>Vous pouvez en créer un en cliquant <span style="color: darkgoldenrod; cursor: pointer;" data-dismiss="modal" data-target="#se_connecter"><u>ici</u></span>.
                                        </p>
                                        
                                    
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group"> 
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-primary">Se connecter</button>
                                            </div>
                                        </div>
                                        
                                    
                                    </div>
                                </div>
                            </div><!-- /.modal-footer --> 
                            
                        </form>
                    </div><!-- /.modal-body --> 
                    
                    
                </div><!-- /.modal-content -->
            </div>
        </div><!-- /.modal -->
        
        
        
        <!--
        <div class="cont_principal">
            
            
            
            <div class="box">
                    <form action="">
                        <div class="cont_tabs_login">
                            <ul class='ul_tabs'>
                            <li class="active">
                                <a href="#" onclick="sign_in()">Se Connecter</a>
                                <span class="linea_bajo_nom"></span>
                            </li>
                            <li>
                                <a href="#up" onclick="sign_up()">S'inscrire</a>
                                <span class="linea_bajo_nom"></span>
                            </li>
                        </ul>
                        </div>
                    <div class="cont_text_inputs">
                        <input type="text" class="input_form_sign " placeholder="NAME" name="name_us" />

                        <input type="text" class="input_form_sign d_block active_inp" placeholder="EMAIL" name="emauil_us" />

                        <input type="password" class="input_form_sign d_block  active_inp" placeholder="PASSWORD" name="pass_us" />  
                        <input type="password" class="input_form_sign" placeholder="Confirmer le MDP" name="conf_pass_us" />

                        <a href="#" class="link_forgot_pass d_block" >Mot de passe oublié ?</a>    
                        <div class="terms_and_cons d_none">
                            <p>
                                <input type="checkbox" name="terms_and_cons" /> 
                                <label for="terms_and_cons">Accepter les Termes et Conditions générales.</label>
                            </p>
                        </div>
                    </div>
                    <div class="cont_btn">
                        <button class="btn_sign">Se Connecter</button>
                    </div>
                </form>
            </div>
          </div>
-->

        
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
      <script type="text/javascript" src="dist/js/connexion.js"></script>
</body>
</html>