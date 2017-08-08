<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Vocal</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
  </head>
  <body>

    <div class="container">
    <?php

    $letra='b';
    if ($letra == 'a' or $letra == 'e' or $letra == 'i' or $letra == 'o' or $letra == 'u') {
      echo "<h3>$letra</h3>";
      echo "Es una vocal";
    }
    else {
      echo "<h3>$letra</h3>";
      echo "No es una vocal";
    }
     ?>

    </div>
  </body>
  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</html>
