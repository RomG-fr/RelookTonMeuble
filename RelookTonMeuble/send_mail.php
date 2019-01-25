<!-- dans contacte mettre de quoi envoyer le mail-->

<?php
 
    ini_set( 'display_errors', 1 );
 
    error_reporting( E_ALL );
 
    $from = $_POST['from'];
	echo "from : ".$from."<br />";
    $to = "mail.entreprise@mail.com";
 
    $subject = $_POST['subject'];
	echo "le sujet :" .$subject."<br />";
    $message = "Prenom = ".$_POST['prenom']."; Nom = ".$_POST['nom']."; message = ".$_POST['message'];
	echo "message : ".$message."<br />";
    $headers = "From:" . $from;
 
    mail($to,$subject,$message, $headers);
 
    echo "L'email a été envoyé.";
	header('Location:contact.php');
?>