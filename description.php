    <?php
    try
{
  $bdd = new PDO('mysql:host=localhost;dbname=E-Commerce;charset=utf8', 'root', 'DarkShot666', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

}
 catch (Exception $e)
  {
    die('Erreur : ' .$e->getMessage());
}



$reponse = $bdd->prepare('SELECT * FROM produits WHERE id = :id') or die(print_r($bdd->errorInfo()));

$reponse->execute(array(
                    'id' => $_GET['id'] ));


while ($donnees = $reponse->fetch()){

		# code...


?>

    <p>

    <strong>Jeu</strong> : <?php echo $donnees['titre']; ?><br />

    Le possesseur de ce jeu est : <?php echo $donnees['description']; ?>, et il le vend à <?php echo $donnees['prix']; ?> euros !<br />

    Ce jeu fonctionne sur <?php echo $donnees['details']; ?> et on

    <?php echo $donnees['jeux']; ?> a laissé ces commentaires sur

   </p>
<?php





}

 ?>
