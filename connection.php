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

 		# code...

 	$_SESSION['pseudo'] = $_POST['pseudo'];
 	$_SESSION['userPass']= $_POST['userPass'];
 	echo'Bienvenue';
 		header('Location:login.php');

}
}
 ?>
