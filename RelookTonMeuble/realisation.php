<?php
	session_start();
?>
<html>
<head>
	<title>R&eacute;alisation</title>
	<meta charset="utf-8"/>
	<script>
		function direction(){
			window.location.href='logout.php'
		};
		function Gestion(){
			window.location.href='gestion.php'
		};	
	</script>
</head>
<body>

<input type="button" value="accueil" OnClick="window.location.href='accueil.php'"/>
<input type="button" value="realisation" OnClick="window.location.href='realisation.php'"/>
<input type="button" value="presentation stages" OnClick="window.location.href='presentation_stage.php'"/>
<input type="button" value="presentation entreprise" OnClick="window.location.href='presentation_entreprise.php'"/>

<?php if($_SESSION['connecte']=='oui'){
	echo $_SESSION['login'];
	echo"<input type='button' value='Deconnection' OnClick='direction()'/>";
	echo"truc visible par la secretaire";
	}
	else{
		echo"<input type='button' value='Gestion' OnClick='Gestion()'/>";
		echo"truc visible par tout le monde";
	}
?>
<h1>Nos R&eacute;alisation :</h1>

<img src="images/image-gite.jpg" class="imageGauche" alt="Photo de mon gite" />
</body>
</html>