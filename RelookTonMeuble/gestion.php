<?php
session_start();
?>
<html>
<head>
<script>
	function direction(){
			window.location.href='logout.php'
		};
		function connection(){
			window.location.href='connection.php'
		};
		function inscription(){
			window.location.href='inscription.php'
		};
		function Gestion(){
			window.location.href='gestion.php'
		};	
</script>		
</head>
<body>
<?php if($_SESSION['connecte']=='oui'){
	echo $_SESSION['login'];
	echo"<input type='button' value='Deconnection' OnClick='direction()'/>";
	}
	else{
		echo"<input type='button' value='Gestion' OnClick='Gestion()'/>";
		echo"<input type='button' value='Connection' OnClick='connection()'/>";
		echo"<input type='button' value='Inscription' OnClick='inscription()'/>";
	}
?>
</body>
</html>