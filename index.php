
<?php
    require "informations.php" ;
    require"description.php";
 ?>
      <!--  start header -->
      <?php
        include "header.php";
       ?>
       <!-- end header -->

        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <!-- start body -->


          <div class="container">
              <div class="row">

<?php
  foreach ($description as $key => $value) {
  ?>
                <!-- card -->
      <div class="card" style="width: 20rem;">
          <img class="card-img-top img-fluid" src="<?php echo $value['img']; ?>" alt="<?php echo $value['alt']; ?>">
            <div class="card-block">
                <h4 class="card-title"> <?php   echo $value['titre']; ?></h4>
                  <p class="card-text"><?php echo $value['description']; ?></p>
                  
                  <a href="infoArticle.php?titre=<?php echo $value['titre']; ?>&amp;img=<?php echo $value['img']; ?>&amp;description=<?php echo $value['description']; ?>" class="btn btn-danger">Clito</a>
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
