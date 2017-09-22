
<?php
    require "contoleur/e-commerce/informations.php" ;
    require"contoleur/e-commerce/description.php";
        include "vue/e-commerce/header.php";
        include 'vue/e-commerce/navbar.php';
       ?>

          <div class="container">
              <div class="row">

<?php
  foreach ($description as $key => $value) {
  ?>
                <!-- card -->
      <div class="card" style="width: 15rem;">
          <img class="img-fluid" src="<?php echo $value['img']; ?>" alt="<?php echo $value['alt']; ?>">
            <div class="card-block">
                <h4 class="card-title"> <?php echo $value['titre']; ?></h4>
                  <p class="card-text"><?php echo $value['description']; ?></p>
                  <p class="card-text"><strong><?php echo $value['prix']; ?></strong></p>

                  <a href="infoArticle.php?article=<?php echo $key; ?>" class="btn btn-outline-success">Details</a>
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
          include "vue/e-commerce/footer.php";
         ?>
         <!-- end footer -->
