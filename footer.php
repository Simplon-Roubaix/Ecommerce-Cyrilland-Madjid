<?php 
require "informations.php";
 ?>

<div class="jumbotron">
  <h4 class="display-5 text-center ">Merci<br> <?php echo $info['auteur'][0];?> et <?php echo $info['auteur'][1] ?> </h4><br>
  <p class="display-6 text-center"><?php echo $info['auteur'][2]; ?></p>

</div>



<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
    e=o.createElement(i);r=o.getElementsByTagName(i)[0];
    e.src='https://www.google-analytics.com/analytics.js';
    r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X','auto');ga('send','pageview');
</script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
