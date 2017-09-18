<?php

  // connection a la base de donnees
try {

  $bdd = new PDO('mysql:host=localhost;dbname=Ecommerce;charset=utf8', 'phpmyadmin', 'maD24101975');

}
catch (Exception $e)
{
  die('Erreur;' .$e->getMessage());
}

if (isset($_POST)) {

  // code
  // recuperer les informations de cet utilisateur
  $req = $bdd->prepare('SELECT * FROM administration WHERE user = :user AND password = :userPass' );

  $req->execute(array(
    'user' => $_POST["pseudo"],
    'userPass' => $_POST['userPass']
  ));

  if(!$req -> fetch()) {

    echo'Verifier vos informations';
    header('refresh:1,espaceclient.php');
  }
 else  {

 	
 	session_start();

 
 		# code...
 	
 	$_SESSION['pseudo'] = $_POST['pseudo'];
 	$_SESSION['userPass']= $_POST['userPass'];
 	echo'Bienvenue';
 		header('Location:login.php');

}
}
 ?>
