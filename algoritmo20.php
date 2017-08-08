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
      <h2>Convertir Kilometros a: Seleccione una opcion</h2>
      <h4>Opciones: <br> 1:Hectometro <br> 2:Decametro <br> 3:Metros <br>4:Decimetros <br>5:Centimetros <br>6:Milimetros</h4>
      <h4>Selecciono la opcion : <?php echo $Op ?></h4>


      <?php
      $Op="6";

       switch ($Op) {
           case '1':
           $km="3";
           $ht=$km*10;
           echo " Cantidad de Kilometros $km Numero de Hectometros: $ht";
           break;
           case '2':
           $km="2";
           $DM=$km*100;
           echo " Cantidad de Kilometros $km En decametros: $DM";
           break;
           case '3':
           $km="2";
           $M=$km*1000;
           echo " Cantidad de Kilometros $km En metros: $M";
           break;
           case '4':
           $km="2";
           $dm=$km*10000;
           echo " Cantidad de Kilometros $km En Decimetros: $dm";
           break;
           case '5':
           $km="2";
           $cm=$km*100000;
           echo " Cantidad de Kilometros $km En Centimetros: $cm";
           break;
           case '6':
           $km="2";
           $ml=$km*1000000;
           echo " Cantidad de Kilometros $km En Milimetros: $ml";
           break;
           default:
           echo "Opcion incorrecta";
           break;
       }

       ?>

    </div>
  </body>
  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</html>
