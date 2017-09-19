<?php 
include 'header.php';
 ?>

<?php  
 try {

  $bdd = new PDO('mysql:host=localhost;dbname=Ecommerce;charset=utf8', 'phpmyadmin', 'maD24101975');

}
catch (Exception $e)
{
  die('Erreur : ' .$e->getMessage());
}

                

if (isset($_POST['titre'])

AND isset($_POST['description'])

 AND isset($_POST['prix'])
 AND isset($_POST['details'])
 AND isset($_POST['jeux'])){
  // Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur

if (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0)
 {
    // Testons si le fichier n'est pas trop gros

        if ($_FILES['monfichier']['size'] <= 1000000)

        {
$infosfichier = pathinfo($_FILES['monfichier']['name']);

$extension_upload = $infosfichier['extension'];

  $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');

                if (in_array($extension_upload, $extensions_autorisees))

                {
                        // On peut valider le fichier et le stocker définitivement

                      move_uploaded_file($_FILES['monfichier']['tmp_name'], 'img/' . $_FILES['monfichier']['name']);


                        // echo "L'envoi a bien été effectué !";

                }

        }
  $titre = $_POST['titre'];

  $description = $_POST['description'];

  $prix = $_POST['prix'];


  $details = $_POST['details'];

  $jeux = $_POST['jeux'];

  # code...

 
$req = $bdd->prepare('INSERT INTO produits(titre, description, prix, details, jeux)

   VALUES(:titre, :description, :prix, :details , :jeux)');


  $req->execute(array(

    'titre' => $titre,

    'description' => $description,

       'prix' => $prix,

    'details' => $details,

    'jeux' => $jeux
  ));

$idLastProduct = $bdd -> lastInsertId();


//  requête insert image
$req = $bdd->prepare('INSERT INTO image(image, type, taille, id_produits)

   VALUES(:image, :type, :taille, :id_produits)');

$req->execute(array(

    'image' => $_FILES['monfichier']['name'],

    'type' => $_FILES['monfichier']['type'],

    'taille' => $_FILES['monfichier']['size'],

    'id_produits' => $idLastProduct,

   
  ));



  //redirection vers index.php "function"

header('Location: index.php');

}
}



?>
	

<?php

include 'footer.php';
 ?>
