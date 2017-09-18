<?php
	include "header.php";
	
	include 'navbar.php';
?>

<?php
	function search($donnees) {
		$valtest = $_POST['form'];
		foreach ($donnees as $key => $value) { 
			// var_dump($value['titre']);
				if ($valtest == $value['titre']) {
					return $key;
				}
			}	
			return false;
}

if (search($donnees) || search($donnees) === 0) {
	$article = search($donnees);
	include 'card.php';
}
else {
	echo "Nous avons pas cet article en stock!";
}
?>







<?php 
	include "footer.php";
?>