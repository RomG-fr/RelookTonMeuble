<html>
	<head>
		<title>livre d'or</title>
		<script>
			function date(id){
				date = new Date;
				annee = date.getFullYear();
				moi = date.getMonth()+1;
				j = date.getDate();
				if(j<10){
					j = "0"+j;
				}
				if(moi<10){
					moi = "0"+moi;
				}
				resultat = j+'/'+moi+'/'+annee;
				document.getElementById(id).value = resultat;
				setTimeout('date_heure("'+id+'");','1000');
				return true;
			}
		</script>
		 <meta charset="utf-8">
		  <meta http-equiv="X-UA-Compatible" content="IE=edge">
		  <title>Livre d'Or</title>
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
          <link rel="stylesheet" href="css/style_livre_or.css">


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
            Livre d'or
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Accueil</a></li>
        <li class="active"><a href="#">Livre d'Or</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        
        <form action='send.php' method='POST' style="margin-left: 15px;">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-2">
                        <label for="nom">Nom: </label>
                    </div>
                    
                    <div class="col-md-8">
                        <input type='text' placeholder='Votre nom'name='nom' id='nom'/> <br/><br/>
                    </div>
                
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <label for="prenom">Prenom: </label>
                    </div>
                    
                    <div class="col-md-8">
                        <input type='text' placeholder='Votre prenom'name='prenom' id='prenom'/> <br/><br/>
                    </div>
                
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <label for="message">Votre message : </label>
                    </div>
                    
                    <div class="col-md-8">
                        <textarea name="message" placeholder='Votre message'id="message" rows="10" cols="50"></textarea><br/><br/>
                    </div>
                
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <label for="note">Note : </label>
                    </div>
                    
                    <div class="col-md-8">
  

  
                          <div class="rating row">

                              <div class="rating-box">
                                  <ul class="rating-preview">
                                      <li>:'(</li>
                                      <li>:(</li>
                                      <li>:|</li>
                                      <li>:)</li>
                                      <li>:D</li>
                                  </ul>
                              </div>

                            <ul class="rating-n">
                              <li><a href="#1"><span><input type='radio' name='note' value='1'>1</span></a></li>
                              <li><a href="#2"><span><input type='radio' name='note' value='2'>2</span></a></li>
                              <li><a href="#3"><span><input type='radio' name='note' value='3'>3</span></a></li>
                              <li><a href="#4"><span><input type='radio' name='note' value='4'>4</span></a></li>
                              <li><a href="#5"><span><input type='radio' name='note' value='5'>5</span></a></li>
                            </ul>

                        </div>
                        
                        
                        
                        
                        
                        
                    <!--
                        <input type='radio' name='note' value='1'>1
                        <input type='radio' name='note' value='2'>2
                        <input type='radio' name='note' value='3' checked='check'>3
                        <input type='radio' name='note' value='4'>4
                        <input type='radio' name='note' value='5'>5
                        <br/>
                        <br/>
                    -->
                    </div>
                
                </div>
                
                
                
                
                
                <div class="row">
                    <input type='hidden' id='date' name='date'>
                    <!--<span id="date"></span>-->
                    <script type="text/javascript">window.onload = date('date');</script>
                    <br /><br />
                    <input type='submit' value='Envoyer'/>
                </div>
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
            
<script type="text/javascript">
    $(".rating-box").show().css('left',$(".rating-n li").eq(0).offset().left);

    $(".rating-n").mouseenter(function() {
      $(".rating-box").show();
    }).mouseleave(function() {
      //$(".rating-box").hide();
    });


    $(".rating-n li").mouseenter(function() {
    var offset = $(this).offset();
      $(".rating-box").stop().animate({'left':offset.left});

      var index = $(this).index();
      $(".rating-preview").stop().animate({'margin-top':(index*50)*-1});
    });

    // Animation preview
    $('.rating-preview').delay(500).animate({
      'margin-top': -50
      }, 500, function() {
    $('.rating-preview').delay(500).animate({
      'margin-top': -100
      },500);

      });

    $('.rating-box').delay(500).animate({
      'left':"+=45"
      }, 500, function() {

    $('.rating-box').delay(500).animate({
      'left':"+=45"
      }, 500)

    });
            
            
            
</script>
		<?php
			/*
				Page affichant les demandes de stages ressus    
				il est possible de visualiser ou telecharger les documents joins pas le candidat
				les documents ne peuvent etre visualiser que sous les formats traité par le navigateur
				les documents au mauvais format sont téléchargés

				Une fois une demande traité, on peut la supprimer de la liste des demandes
			*/
			include'connection_bd.php';
			
			//compte le nombre de ligne dans la table affichée
			$req = $bdd->query("SELECT  COUNT(*) as compteligne FROM livre_or " );
			$lignes = $req->fetch();
			$req->closeCursor();
				
				
			//si il y à au moins 1 demande de stage
			if($lignes['compteligne']>0){
				$num=0;
				echo "<table style='border:3px solid black; border-collapse: collapse;'>
					<tr style='border:2px solid black'>
					<th style='border:2px solid black'> nom prenom</th>
					<th style='border:2px solid black'>date du poste</th>
					<th style='border:2px solid black'>message</th>
					<th style='border:2px solid black'>note</th>
					</tr> ";
					
				$requete=$bdd -> query('SELECT nom,prenom,message FROM livre_or')or exit(mysql_error());
				//on stoque les deux docs sur la meme lignes ou lignes differentes ?
					while ($donnees = $requete -> fetch()) {
						echo "<tr style='border:2px solid black'> 
						<td style='border:2px solid black'>".$donnees['nom']." ".$donnees['prenom']." </td> ";
						
						$requete1=$bdd -> query('SELECT message,note,date FROM livre_or where nom="'.$donnees['nom'].'"and prenom="'.$donnees['prenom'].'"')or exit(mysql_error());
						while ($donnees1 = $requete1 -> fetch()) {
							echo"<td style='border:2px solid black'>".$donnees1['date']."</td>";
							echo"<td style='border:2px solid black'>".$donnees1['message']."</td>";
							echo"<td style='border:2px solid black'>".$donnees1['note']."</td>";
						}
						echo"</tr> ";
					}
				echo"</table>
				<br />";
			}
			else{
				echo "<h2>aucune candidature</h2>";
			}
		?>
	</body>
</html>
