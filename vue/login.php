<?php
include ('vue/e-commerce/header.php');
 ?>

<?php

 ?>
<form action="loginPost.php" method="post" enctype="multipart/form-data">


	<input type="text" name="titre" value="" placeholder="titre">
	<input type="text" name="description" placeholder="description">
	<input type="number" name="prix" value="" placeholder="prix">
	<input type="text" name="caracteristiques" value="" placeholder="caracteristiques">
	<input type="text" name="resume" value="" placeholder="resume">
	<?php include 'vue/e-commerce/img_up.php'; ?>
</form>
<?php





include 'vue/e-commerce/footer.php';
?>
