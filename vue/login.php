<?php
include ('vue/e-commerce/header.php');
 ?>

<<<<<<< HEAD:vue/login.php
<?php

 ?>
<form action="loginPost.php" method="post" enctype="multipart/form-data">


=======




<form action="loginPost.php" method="post" accept-charset="utf-8" enctype="multipart/form-data">
>>>>>>> 6c409db235782757244d9dbad79cab6c31b15213:login.php
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
