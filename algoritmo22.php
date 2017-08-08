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

      $S=34000000/12;
      $A="7";

      if ($A==5) {
     $AU=$S*0.05;
     $SN=$S+$AU;
     echo "Su Salario mensual es de $ $S Su aumento es del 5% equivale a: $ $AU  Salario neto es:$$SN";
   }
   elseif ($A<10 && $A>5) {
     $AU=$S*0.10;
     $SN=$S+$AU;
     echo "Su Salario mensual es de $ $S Su aumento es del 10% equivale a: $ $AU  Salario neto es: $ $SN";
   }
   elseif ($A<5 && $A>3) {
     $AU=$S*0.025;
     $SN=$S+$AU;
     echo "Su Salario mensual es de $ $S Su aumento es del 2,5% equivale a: $ $AU  Salario neto es: $ $SN";
   }
   elseif ( $A>10) {
     $AU=$S*0.15;
     $SN=$S+$AU;
     echo "Su Salario mensual es de $ $S Su aumento es del 15% equivale a: $ $AU  Salario neto es: $ $SN";
   }
     else {
       echo "No Aplica aumento";
     }
       ?>

    </div>
  </body>
  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</html>
