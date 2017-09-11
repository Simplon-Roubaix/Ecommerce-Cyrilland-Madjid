<?php
	include "header.php";
	include "description.php";
?>

<?php
	function search($description) {
		$valtest = $_POST['form'];
		foreach ($description as $key => $value) { 
			// var_dump($value['titre']);
				if ($valtest == $value['titre']) {
					return $key;
				}
			}	
			return false;
}

if (search($description) || search($description) == 0) {
	$article = search($description);
	include 'card.php';
}
else {
	echo "Casse toi!";
}
?>







<?php 
	include "footer.php";
?>