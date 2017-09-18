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








<article class="card">
  	<h1><?php echo $description[$article]['titre']; ?></h1>


  		<div class="container">
			<div class="row">

  				<div class="col-lg-4">
  					<img class="card-img" src="<?php echo $description[$article]['img'];?>" alt="Jeux">
  				</div>
          <div class="col-lg-4">
            <p class="card-text"><?php echo $description[$article]['details'];?></p>
            <p class="card-text"><strong><?php echo $description[$article]['prix'];?></strong></p>
          </div>

  				<div class="col-lg-8">
  					<div class="card-block ">
    					<p class="card-text ">
                <?php echo $description[$article]['jeux'];?>
              </p>
  					</div>
  				</div>

  			</div>
  		</div>
</article>
<?php  



$reponse->closeCursor(); // Termine le traitement de la requête

}

 ?>
