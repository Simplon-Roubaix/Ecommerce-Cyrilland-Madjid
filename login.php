<?php 
session_start();
include ('header.php');
 ?>
<?php

 ?>
<form action="loginPost.php" method="post" enctype="multipart/form-data">
	<input type="text" name="titre" value="" placeholder="titre">
	<input type="text" name="description" placeholder="description">
	<input type="number" name="prix" value="" placeholder="prix">
	<input type="text" name="details" value="" placeholder="details">
	<input type="text" name="jeux" value="" placeholder="jeux">
	<input type="file" name="monfichier" placeholder="image">
	<input type="submit" name="valider" value="valider"  >
</form>
<?php  
include 'footer.php';
?>
