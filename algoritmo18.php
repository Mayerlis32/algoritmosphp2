<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Menu</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
  </head>
  <body>

    <div class="container">
      <h4>Numero Ingresado: <?php $numero = "9"; echo $numero; ?></h4>
      <h4>Numero Ingresado: <?php $numero1 = "3"; echo $numero1; ?></h4>
      <h4>Numero Ingresado: <?php $numero2 = "27"; echo $numero2; ?></h4>

      <?php
      $numero="9";
      $numero1="3";
      $numero2="27";

      if ($numero%$numero1 == $numero2) {
        echo "El modulo de los dos primeros numeros es igual al tercero";
      }
      else {
        echo "El modulo de los dos primeros numeros NO es igual al tercero";
      }
      ?>

    </div>
  </body>
  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</html>
