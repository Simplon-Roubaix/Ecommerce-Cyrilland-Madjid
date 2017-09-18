<?php 
include ('header.php');
 ?>
<?php
// le nom d'hôte (localhost) ;
//
// la base de données (test) ;
//
// le login (root) ;
//
// le mot de passe ;
try
{
  $bdd = new PDO('mysql:host=localhost;dbname=Ecommerce;charset=utf8', 'phpmyadmin', 'maD24101975', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

}
 catch (Exception $e)
  {
    die('Erreur : ' .$e->getMessage());
}


$reponse = $bdd->query('SELECT * FROM produits') or die(print_r($bdd->errorInfo()));


while ($donnees = $reponse->fetch()){
?>

<form action="loginPost.php" method="post" accept-charset="utf-8">
	<input type="text" name="titre" value="" placeholder="titre">
	<input type="text" name="description" placeholder="description">
	<input type="number" name="prix" value="" placeholder="prix">
	<input type="text" name="details" value="" placeholder="details">
	<input type="text" name="jeux" value="" placeholder="jeux">
	<input type="file" name="image" value="" placeholder="image">
	<input type="submit" name="valider" value="valider" placeholder="">
</form>
<?php  



$reponse->closeCursor(); // Termine le traitement de la requête

}
include 'footer.php';
 ?>
