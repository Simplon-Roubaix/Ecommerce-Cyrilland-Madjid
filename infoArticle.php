<?php 
include "header.php";
 ?>

<article class="card">
  	<h1><?php echo $_GET['titre']; ?></h1>


  		<div class="container">
			<div class="row">

  				<div class="col-lg-3">
  					<img class="card-img-top " src="<?php echo $_GET['img'];?>" alt="preservatif">
  				</div>

  				<div class="col-lg-7">
  					<div class="card-block ">
    					<p class="card-text ">Le plaisir commence ici.</p>
  					</div>
  				</div>

  			</div>
  		</div>
</article>

<?php 
include "footer.php";
 ?>
