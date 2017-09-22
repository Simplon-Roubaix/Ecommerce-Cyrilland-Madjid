
<nav class="navbar sticky-top navbar-light bg-faded navbar navbar-toggleable-md navbar-light bg-faded" style="background-color: #e3f2fd;">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost/E-Commerce/e-commerce.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Liste des jeux
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <?php
    foreach ($description as $key => $value) { ?>
      <a href="infoArticle.php?article=<?php echo $key; ?>" class= "dropdown-item"><?php echo $value['titre']; ?></a>
    <?php
    }
    ?>
  </div>
</div>
    </ul>
    <form class="form-inline my-2 my-lg-0" action="search.php" method="post">
      <input class="form-control mr-sm-2" name="form" type="text" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
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

if (search($description) || search($description) === 0) {
	$article = search($description);
	include 'vue/e-commerce/card.php';
}
else {
	echo "Nous avons pas cet article en stock!";
}
?>
