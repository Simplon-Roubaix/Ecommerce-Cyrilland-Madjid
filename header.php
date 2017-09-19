<?php 

require "informations.php";
 ?>
<!doctype html>
<html class="no-js" lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>E-Gaming</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="favicon.ico">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">

        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
  </head>
    <body>
      <header>
        <div class="jumbotron">
          <h1 class="display-3 text-center">
            <?php
               echo $info['h1'];
            ?>
          </h1>

          <h2 class="lead text-center"> <?php
            echo $info['description'];?>
            <a href="espaceclient.php"><i class="fa fa-sign-out" aria-hidden="true"></i></a>

            <?php if(isset($_SESSION['pseudo'])){?>
               <a href="ko.php"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
           <?php }  ?>

          </h2>

          <hr class="my-4">

        </div>
      </header>
