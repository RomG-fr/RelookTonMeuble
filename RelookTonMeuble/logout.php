<?php
//Detruit la session
session_start();
session_unset();
// On détruit notre session
//session_destroy ();

//Redirige vers la page d'accueil
header('Location: index.php');
exit();
?>




