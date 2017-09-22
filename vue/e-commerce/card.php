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