<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Numeros de mayor a menor.</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
  </head>
  <body>

    <div class="container">
      <h4>Numero Ingresado: <?php $numero = "6"; echo $numero; ?></h4>
      <h4>Numero Ingresado: <?php $numero1 = "2"; echo $numero1; ?></h4>
      <h4>Numero Ingresado: <?php $numero2 = "18"; echo $numero2; ?></h4>

      <?php

      if ($numero > $numero1 and $numero1 > $numero2)  {echo "$numero, $numero1, $numero2";}
      elseif ($numero1 > $numero2 and $numero2 > $numero) {echo "$numero1, $numero2, $numero";}
      elseif ($numero2 > $numero and $numero > $numero1) {echo "$numero2, $numero, $numero1";}
      elseif ($numero > $numero1 and $numero1 > $numero2) {echo "$numero2, $numero1, $numero";}
      elseif ($numero1 > $numero2 and $numero2 > $numero) {echo "$numero, $numero2, $numero1";}
      elseif ($numero2 > $numero and $numero > $numero1) {echo "$numero1, $numero, $numero2";}
      else {echo "Los numeros son iguales";}
       ?>

    </div>
  </body>
  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</html>
