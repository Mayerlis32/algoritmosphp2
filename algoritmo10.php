<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Meses del año</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
  </head>
  <body>

    <div class="container">

      <?php
      $meses='12';
      if ($meses == 1) {
        echo "Enero";
      }
      elseif ($meses == 2) {
        echo "Febrero";
      }
      elseif ($meses == 3) {
        echo "Marzo";
      }
      elseif ($meses == 4) {
        echo "Abril";
      }
      elseif ($meses == 5) {
        echo "Mayo";
      }
      elseif ($meses == 6) {
        echo "Junio";
      }
      elseif ($meses == 7) {
        echo "Julio";
      }
      elseif ($meses == 8) {
        echo "Agosto";
      }
      elseif ($meses == 9) {
        echo "Septiembre";
      }
      elseif ($meses == 10) {
        echo "Octubre";
      }
      elseif ($meses == 11) {
        echo "Noviembre";
      }
      elseif ($meses == 12) {
        echo "Diciembre";
      }
      else {
        echo "Numero invalido, por favor digite nuevamente";
      }

       ?>

    </div>
  </body>
  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</html>
