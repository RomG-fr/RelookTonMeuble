  <header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo menu_gauche">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>RT</b>M</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Relook'</b>  Ton Meuble</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top menu_haut">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <?php
		if(isset($_SESSION['connecte'])){
		   	echo'<ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">';
		if($_SESSION['statut']=='admin'){
              	echo'<img src="dist/img/secretaire.jpg" class="user-image" alt="User Image">
		<span class="hidden-xs">Secrétaire</span>';
		}
		else{
		echo'<img src="dist/img/avatar5.png" class="user-image" alt="User Image">		
		<span class="hidden-xs">Stagiaire</span>';
		}
           echo'</a>
		<ul class="dropdown-menu" id="ul-navbar-custom-menu">
		
		      <!-- User image -->
		      <li class="user-header">';
          if($_SESSION['statut']=='admin'){
            echo'
		        <img src="dist/img/secretaire.jpg" class="img-circle" alt="User Image">

		        <p>
		          '.$_SESSION['login'].' - Secrétaire
		          <small>Membre depuis Nov. 2012</small>
		        </p>';}
            else{echo'<img src="dist/img/avatar5.png" class="img-circle" alt="User Image">
            <p>
            '.$_SESSION['login'].' - Secrétaire
              <small>Membre depuis Nov. 2012</small>
            </p>';
            }
		      echo'</li>
		      <li class="user-footer">
			<div class="pull-left">';
			if($_SESSION['statut']=='stagiaire'){
				echo'
				  <a href="stagiaire.php" class="btn btn-default btn-flat">Mes réalisations</a><p>';
			}
			echo'</div>
			<div class="pull-right">
		          <a href="logout.php" class="btn btn-default btn-flat">Se déconnecter</a>
		        </div>
		      </li>
		    </ul>
          </li>
        </ul>';}
	?>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar menu_gauche">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
	<?php
		if(isset($_SESSION['connecte'])){
     			 echo '<div class="user-panel">';
			if($_SESSION['statut']=='admin'){
        			echo '<div class="pull-left image">
        	  		<img src="dist/img/secretaire.jpg" class="img-circle" alt="User Image">
        			</div>
				<div class="pull-left info">
         		 	<p  style="color: azure; font-weight: bold;">Alexandra Pierce</p>
          			<p  style="color: silver;"><i class="fa fa-circle text-success"></i> En Ligne</p>
        			</div>';
			}
			else{
				echo '<div class="pull-left image">
        	  		<img src="dist/img/avatar5.png" class="img-circle" alt="User Image">
        			</div>
				<div class="pull-left info">
         		 	<p  style="color: azure; font-weight: bold;">Stagiaire</p>
          			<p  style="color: silver;"><i class="fa fa-circle text-success"></i> En Ligne</p>
        			</div>';
			}
       			
      		echo'</div>';}
	   ?>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form" id="barre_de_recherche">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Recherche...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree" style="margin-top: 50px;">
        <li class="header" id="separation_a">NAVIGATION</li>
        <li>
        	<a href="index.php">
        		<i class="fa fa-home"></i> <span>Accueil</span>
        	</a>
        </li>
        <li>
        	<a href="galerie.php">
        		<i class="fa fa-photo"></i> <span>Galerie</span>
        	</a>
        </li>
        <li>
        	<a href="contact.php">
        		<i class="fa fa-envelope"></i> <span>Contact</span>
        	</a>
        </li>
        <?php
        if(isset($_SESSION['connecte'])){
          if($_SESSION['statut']!='stagiaire'){
            echo'
            ';
          }
         
        }
     ?>
    <?php
	     if(isset($_SESSION['connecte'])){
		      if($_SESSION['statut']=='admin'){
		      	echo'<li class="treeview">
              		<a href="#">
            	    <i class="fa fa-user-o"></i><span>Stage</span>
            		<i class="fa fa-angle-left pull-right"></i>
            	    <span class="pull-right-container"></span>
            	  </a><ul class="treeview-menu" style="margin-left: 10px;">
            	</li>
            	<li><a href="analyse_candidature.php"><i class="fa fa-circle-o"></i> Demande de stage reçu</a></li>
		        <li><a href="inscription.php"><i class="fa fa-circle-o"></i> Inscription des stagiaires</a></li>
		        </ul>';
          }
	       }
	     else{
		      echo'<li><a href="demande_stage.php"><i class="fa fa-user-o"></i> Demande de stage</a></li>';}
		?>      
      <li>
      	<a href="livre_or.php">
      		<i class="fa fa-book"></i> <span>Livre d'or</span>
      	</a>
      </li>
        <li class="header" id="separation_b"> </li>
        <?php
		      if(!isset($_SESSION['connecte'])){
		          echo'<li>
		      	   <a href="connection_ajax.php">
		      		  <i class="fa fa-address-book-o"></i> <span>Se Connecter</span>
		      	   </a>
		          </li>';
          }
		      if(isset($_SESSION['connecte'])){
		          echo'<li>
              	<a href="logout.php">
              		<i class="fa fa-power-off"></i> <span>Déconnexion</span>
              	</a>';
          }
	?>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
