<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ADSI.</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
  </head>
  <body>
    <div class="container">


      <?php
      $letra='m';
      if ($letra == 'a' or $letra == 'A' or $letra == 'd' or $letra == 'D' or $letra == 's' or $letra == 'S' or $letra == 'i' or $letra == 'I') {
        echo "<h2>$letra</h2>";
        echo "Caracter Correcto";
      }
      else {
        echo "<h2>$letra</h2>";
        echo "Caracter Incorrecto";
      }
    ?>

    </div>




  </body>
  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</html>
