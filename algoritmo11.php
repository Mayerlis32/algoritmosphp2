<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Primos numero</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
  </head>
  <body>

    <div class="container">

      <?php
      $numero1= 5;
      $numero2= 4;

      if ($numero1 == 1 && $numero2 == 2) {
        echo "El numero $numero1 es primo";
        echo "El numero $numero2 es primo";
      }
      elseif ($numero1 == 3 && $numero2 == 5) {
        echo "El numero $numero1 es primo";
        echo "El numero $numero2 es primo";
      }
      elseif ($numero1 == 2 && $numero2 == 1) {
        echo "El numero $numero1 es primo";
        echo "El numero $numero2 es primo";
      }
      elseif ($numero1 == 5 && $numero2 == 3) {
        echo "El numero $numero1 es primo";
        echo "El numero $numero2 es primo";
      }
      elseif ($numero1 == 5 && $numero2 == 4) {
        echo "El numero $numero1 es primo";
        echo "El numero $numero2 no es primo";
      }
      elseif ($numero1 == 4 && $numero2 == 5) {
        echo "El numero $numero1 no es primo";
        echo "El numero $numero2 es primo";
      }
      elseif ($numero1 == 1 && $numero2 == 4) {
        echo "El numero $numero1 es primo";
        echo "El numero $numero2 no es primo";
      }
      elseif ($numero1 == 4 && $numero2 == 1) {
        echo "El numero $numero1 no es primo";
        echo "El numero $numero2 es primo";
      }
      elseif ($numero1 == 2 && $numero2 == 4) {
        echo "El numero $numero1 es primo";
        echo "El numero $numero2 no es primo";
      }
      elseif ($numero1 == 4 && $numero2 == 2) {
        echo "El numero $numero1 no es primo";
        echo "El numero $numero2 es primo";
      }
      elseif ($numero1 == 3 && $numero2 == 4) {
        echo "El numero $numero1 es primo";
        echo "El numero $numero2 no es primo";
      }
      elseif ($numero1 == 4 && $numero2 == 3) {
        echo "El numero $numero1 no es primo";
        echo "El numero $numero2 es primo";
      }
      elseif ($numero1 == 4 && $numero2 == 4) {
        echo "El numero $numero1 no es primo";
        echo "El numero $numero2 no es primo";
      }
      else {
        echo "Numero fuera de rango";
      }
      
       ?>

    </div>
  </body>
  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</html>
