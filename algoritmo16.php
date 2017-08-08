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
      <h4>Numero Ingresado: <?php $opcion = "9"; echo $opcion; ?></h4>

      <?php
      $opcion="9";

      if ($opcion == 1) {
        echo "La opcion es correcta: Añadir";
      }
      elseif ($opcion == 2) {
        echo "La opcion es correcta: Editar";
      }
      elseif ($opcion == 3) {
        echo "La opcion es correcta: Eliminar";
      }
      else {
        echo "La opcion es incorrecta";
      }
      ?>

    </div>
  </body>
  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</html>
