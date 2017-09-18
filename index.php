
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
   try
{
  $bdd = new PDO('mysql:host=localhost;dbname=Ecommerce;charset=utf8', 'phpmyadmin', 'maD24101975', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

}
 catch (Exception $e)
  {
    die('Erreur : ' .$e->getMessage());
}


$reponse = $bdd->query('SELECT * FROM produits') or die(print_r($bdd->errorInfo()));
?>


<div class="container">
<div class="row">
<?php 
      
while ($reponse1 = $reponse->fetch()){
  
    # code...


  ?>
            
                <!-- card -->
      <div class="card" style="width: 15rem;">
          <img class="img-fluid" src="<?php echo $reponse1['img']; ?>>
            <div class="card-block">
                <h4 class="card-title"> <?php echo $reponse1['titre']; ?></h4>
                  <p class="card-text"><?php echo $reponse1['description']; ?></p>
                  <p class="card-text"><strong><?php echo $reponse1['prix']; ?></strong></p>

              <!-- //  <form action="infoArticle.php" method="post" >
                 <input type="hidden" name="form" value="<?php echo $key ?>">
                  <input type="submit" value="Valider">
                </form>// -->


                  <a href="infoArticle.php?article=<?php echo $key; ?>" class="btn btn-outline-success">Details</a>

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
