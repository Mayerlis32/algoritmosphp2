<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dias de la semana</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
  </head>
  <body>

    <div class="container">

      <?php
      $dias='6';

      switch ($dias) {
        case 1:
          echo "Lunes";
          break;
          case 2:
            echo "Martes";
            break;
            case 3:
            echo "Miercoles";
            break;
            case 4:
            echo "Jueves";
            break;
            case 5:
            echo "Viernes";
            break;
            case 6:
            echo "Sabado";
            break;
            case 7:
            echo "Domingo";
            break;
            default:
            echo "Numero invalido, por favor digite nuevamente";
            break;
      }
       ?>

    </div>
  </body>
  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</html>
