<?php
session_start();
if(isset($_SESSION['pseudo'])){
echo $_SESSION['pseudo']; }?>
<?php
    require "informations.php" ;


        include "header.php";
        include 'navbar.php';


       ?>

       <!-- end header -->

        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <!-- start body -->


<?php
   try {
       $bdd = new PDO('mysql:host=localhost;dbname=E-Commerce;charset=utf8', 'root', 'DarkShot666', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
   } catch (Exception $e) {
     die('Erreur : ' .$e->getMessage());
 }


$reponse = $bdd->query('SELECT * FROM image
                        INNER JOIN  produits
                        ON id_produits =  produits.id '
                      ) or die(print_r($bdd->errorInfo()));
?>


<div class="container">

  <div class="row">
<?php

while ($reponse1 = $reponse->fetch()){

    # code...

    # code... ?>

                <!-- card -->
      <div class="card" style="width: 20rem;">
          <img class="img-fluid" src="img/<?php echo $reponse1['image']; ?>">
            <div class="card-block">
                <h4 class="card-title"> <?php echo $reponse1['titre']; ?></h4>
                  <p class="card-text"><?php echo $reponse1['description']; ?></p>
                  <p class="card-text"><strong><?php echo $reponse1['prix']; ?></strong></p>



                  <a href="infoArticle.php?id=<?php echo $reponse1['id']; ?>" class="btn btn-outline-success">Details</a>


            </div>
      </div>


<?php
}
 ?>
</div>
</div>
        <!-- end body -->

         <!-- start footer -->
        <?php
          include "footer.php";
         ?>
         <!-- end footer -->
