<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Numero entre 10 - 100.</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
  </head>
  <body>

    <div class="container">
      <?php

      $numero=100;

      if ($numero >=10 and $numero <=100) {
        echo "El numero $numero se encuentra entre 10 - 100";
      }
      else {
        echo "El numero $numero no se encuentra entre 10 - 100";
      }
       ?>

    </div>
  </body>
  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</html>
