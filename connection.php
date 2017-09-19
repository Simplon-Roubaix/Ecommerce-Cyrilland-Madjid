 <?php   session_start(); ?>

<?php

  // connection a la base de donnees
try {

  $bdd = new PDO('mysql:host=localhost;dbname=E-Commerce;charset=utf8', 'root', 'DarkShot666');

}
catch (Exception $e)
{
  die('Erreur;' .$e->getMessage());
}

if (isset($_POST["pseudo"]) AND isset($_POST["userPass"])) {

  // code
  // recuperer les informations de cet utilisateur
  $req = $bdd->prepare('SELECT * FROM administration WHERE user = :user AND password = :userPass' );

  $req->execute(array(
    'user' => $_POST["pseudo"],
    'userPass' => $_POST['userPass']
  ));

  if(!$req -> fetch()) {

    header('refresh:1,espaceclient.php');
  }
 else  { 		# code...

 	$_SESSION['pseudo'] = $_POST['pseudo'];
 	$_SESSION['userPass']= $_POST['userPass'];

 		header('Location:login.php');

}
}
 ?>
