<!--Ejemplo-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ejemplo2 php Estructura condicionales.</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
  </head>
  <body>
    <div class="container">
      <h3>Ejemplo 2 PHP: Estructuras Condicionales.</h3>
      <h4>Usuario: <?php $usuario = "Admin"; echo $usuario ?></h4>

      <?php
      if ($usuario == "Admin") { echo "<h5>Bienvenido usuario administrador</h5>";}

      elseif ($usuario == "Invitado") { echo "<h5>Bienvenido usuario Invitado</h5>";}

      else { echo "<h5>Bienvenido a la pagina de usuario";}
       ?>

    </div>
  </body>
  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</html>
