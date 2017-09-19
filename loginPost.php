
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

<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=E-Commerce;charset=utf8', 'root', 'DarkShot666');
} catch (Exception $e) {
    die('Erreur : '.$e->getMessage());
};
$titre = $_POST['titre'];
$description = $_POST['description'];
$prix = $_POST['prix'];
$caracteristiques = $_POST['caracteristiques'];
$resume = $_POST['resume'];

$req = $bdd->prepare('INSERT INTO produits(titre, description, prix, caracteristiques, resume)
VALUES(:titre, :description, :prix, :caracteristiques, :resume)');


$req->execute(array(

    'titre' => $titre,


    'description' => $description,

    'prix' => $prix,


    'caracteristiques' => $caracteristiques,

    'resume' => $resume



    ));

echo 'Le jeu a bien été ajouté !';


?>
<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=E-Commerce;charset=utf8', 'root', 'DarkShot666');
} catch (Exception $e) {
    die('Erreur : '.$e->getMessage());
};
$req = $bdd->query('SELECT MAX(id) FROM produits');


//  requête insert image
$req = $bdd->prepare('INSERT INTO image(image, type, taille, id_produits)

$id_produits =  $req->fetchAll();


$req = $bdd->prepare('INSERT INTO images(titre, id_produits) VALUES(:titre, :id_produits)');

$req->execute(array(

    'titre' => $titre,
    'id_produits' => $id_produits[0][0]
    ));
    ?>
<?php

// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur

if (isset($_FILES['monfichier']) and $_FILES['monfichier']['error'] == 0) {
    // Testons si le fichier n'est pas trop gros


    if ($_FILES['monfichier']['size'] <= 1000000) {
        $infosfichier = pathinfo($_FILES['monfichier']['name']);
        $extension_upload = $infosfichier['extension'];
        $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');


  //redirection vers index.php "function"

header('Location: index.php');

        if (in_array($extension_upload, $extensions_autorisees)) {
          // On peut valider le fichier et le stocker définitivement

                        move_uploaded_file($_FILES['monfichier']['tmp_name'], 'img/' . basename($_FILES['monfichier']['name']));


                        echo "L'envoi a bien été effectué !";
        }
    }
}
?>
