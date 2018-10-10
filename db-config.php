<?php
//Connexion à la BDD
  try
  {
  
   $bdd = new PDO ('mysql:host=localhost;dbname=easyloc', 'root', '');
  
  }
  
  catch(Exception $e)
  {
   die('Erreur :'.$e->getMessage());
  }



/*session_start();
$_SESSION['login'] = $_POST['login'];
header('Location: LIEN-DE-REDIRECTION');*/

?>