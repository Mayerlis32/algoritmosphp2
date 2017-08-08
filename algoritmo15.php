
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>suma de los numeros</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
  </head>
  <body>
    <?php
    $numero="2";
    $numero1="2";
    $numero2="4";
    ?>
    <div class="container">
      <h2>Numero1: <?php echo $numero ?></h2>
      <h2>Numero2: <?php echo $numero1 ?></h2>
      <h2>Numero3: <?php echo $numero2 ?></h2>
            <?php
            $suma=$numero+$numero1;
                   if ($suma==$numero2) {
                     echo "El tercer numero es igual a la suma de los dos primeros: $suma";
                   }
                else {
                  echo "error";
                }
       ?>
    </div>
  </body>
  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</html>
