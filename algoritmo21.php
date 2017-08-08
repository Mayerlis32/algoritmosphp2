<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Positivo Negativo</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
  </head>
  <body>

    <div class="container">
      

      <?php

      $vb="260000";

      if ($vb > 250000) {
        $vn=$vb-($vb*0.10);
        echo "El valor neto es: $vn";
      }
      else {
        $vn=$vb-($vb*0.5);
        echo "El valor neto es: $vn";
      }

       ?>

    </div>
  </body>
  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</html>
