<?php
include "header.php";
include "description.php";
$id = $_POST['form'];

 ?>

<article class="card">
  	<h1><?php echo $description[$id]['titre']; ?></h1>


  		<div class="container">
			<div class="row">

  				<div class="col-lg-3">
  					<img class="card-img-top " src="<?php echo $description[$id]['img'];?>" alt="preservatif">
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
