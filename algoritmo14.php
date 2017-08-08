<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Numeros descendentes.</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
  </head>
  <body>

    <div class="container">
      <h4>Numero Ingresado: <?php $n1 = "3"; echo $n1; ?></h4>
      <h4>Numero Ingresado: <?php $n2 = "2"; echo $n2; ?></h4>
      <h4>Numero Ingresado: <?php $n3 = "1"; echo $n3; ?></h4>

      <?php
      $n1=3;
      $n2=2;
      $n3=1;

      if ($n1>$n2 && $n1>$n3 && $n2>$n3) {
        echo "Los numeros estan en orden descendente";
      }
      else {
        echo "Los numeros estan desordenados";
      }
       ?>

    </div>
  </body>
  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</html>
