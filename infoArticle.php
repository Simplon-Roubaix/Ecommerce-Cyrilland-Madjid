<?php 
include "header.php";
include "description.php";
include 'navbar.php';
$article = $_GET['article'];
 ?>

<article class="card">
  	<h1><?php echo $description[$article]['titre']; ?></h1>


  		<div class="container">
			<div class="row">

  				<div class="col-lg-4">
  					<img class="card-img-top " src="<?php echo $description[$article]['img'];?>" alt="Jeux">
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
include "footer.php";
 ?>
