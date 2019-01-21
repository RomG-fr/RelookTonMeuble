<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Relook' Ton Meuble</title>
	<link rel="icon" type="image/png" href="img/logo.png" />
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
  <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
    <script type="text/javascript">
    //permet d'afficher l'infobulle
    $(document).ready(function() {
     
      // Sélectionner tous les liens ayant l'attribut rel valant tooltip
      $('a[rel=tooltip]').mouseover(function(e) {
     
        // Récupérer la valeur de l'attribut title et l'assigner à une variable
        var tip = $(this).attr('title');   
     
        // Supprimer la valeur de l'attribut title pour éviter l'infobulle native
        $(this).attr('title','');
     
        // Insérer notre infobulle avec son texte dans la page
        $(this).append('<div id="tooltip"><div class="tipHeader"></div><div class="tipBody">' + tip + '</div><div class="tipFooter"></div></div>');    
     
        // Ajuster les coordonnées de l'infobulle
        $('#tooltip').css('top', e.pageY + 10 );
        $('#tooltip').css('left', e.pageX + 20 );
     
        // Faire apparaitre l'infobulle avec un effet fadeIn
        $('#tooltip').fadeIn('500');
        $('#tooltip').fadeTo('10',0.8);
     
      }).mousemove(function(e) {
     
        // Ajuster la position de l'infobulle au déplacement de la souris
        $('#tooltip').css('top', e.pageY + 10 );
        $('#tooltip').css('left', e.pageX + 20 );
     
      }).mouseout(function() {
     
        // Réaffecter la valeur de l'attribut title
        $(this).attr('title',$('.tipBody').html());
     
        // Supprimer notre infobulle
        $(this).children('div#tooltip').remove();
     
      });
     
    });
    </script>
    <style>
      /* {
        color:#aaa;text-decoration:none;
        cursor:pointer;
        cursor:hand}
      a:hover {
        color:#000;
        text-decoration:none;}
       */
       
      /* Infobulle */
      
      /* style infobulle*/
       
      #tooltip {
        position:absolute;
        z-index:9999;
        color:#000;
        font-size:20px;
        width:180px;
       
      }
       
      #tooltip .tipHeader {
        height:8px;
        background:url(images/tipHeader.gif) no-repeat;
      }
       
      /* hack IE */
      *html #tooltip .tipHeader {margin-bottom:-6px;}
       
      #tooltip .tipBody {
        background-color:#fff;
        padding:20px;
      }
       
      #tooltip .tipFooter {
        height:8px;
        background:url(images/tipFooter.gif) no-repeat;
      }
    </style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <?php include "menu.php"; ?>
    
    
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
            Relook'Ton Meuble
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Accueil</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <center>
      <br  />
      <br  />
        <p>Armoire, commode, table, chaise... Peu de meubles résistent au pouvoir rajeunissant d'une peinture fraîche et éclatante. Et c'est tant mieux ! La peinture, en pot ou en bombe, reste la solution la plus accessible pour le petit relooking pas cher d'un meuble. Une cuisine en pin se modernisera sous l'effet d'une couleur actuelle comme le noir, le gris ou des teintes plus douces et poudrées. Vous pouvez par ailleurs préférer une patine ou une céruse à la peinture pour éclaircir et offrir un style différent à un vieux meuble en bois. Enfin, il n'est pas toujours nécessaire de repeindre le meuble dans sa totalité pour produire un effet waouh. Ne colorer que les piètements, qu'une moitié de porte ou de dossier suffit souvent à lui donner du cachet. Voici tout plein d'idées pour vous inspirer et relooker un meuble rustique ou chiné avec de la peinture.</p>
      <br  />
      <br  />
      <div id="paragraph">
      <a rel="tooltip" title="exemple de realisation...");>
        <video width="320" height="240" controls>
          <source src='video/relooking_meuble.mp4' type="video/mp4">
          Votre navigateur ne supporte pas la balise vidéo.
        </video>
      </a>
    </div>
    </center>
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
