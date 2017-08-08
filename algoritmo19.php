<?php
$i="2";
$lados="3";
$pt=$lados*3;

$lr1="6";
$lr2="3";
$pr=2*($lr1+$lr2);

$ht="6";
$bs="12";
$bi="15";
$ptr=(2*$ht)+$bs+$bi; 
 ?>

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
      <h2>El numero ingresado es : <?php echo $i ?></h2>
      <?php
 switch ($i) {
     case '1':
     echo "Los lados del triangulo son iguales a: $lados cm, El perimetro del triangulo es: $pt";
     break;
     case '2':
     echo "Los lados del rectangulo son iguales a: $lr1 cm y $lr2 cm, El perimetro del rectangulo es: $pr";
     break;
     case '3':
     echo "Los lados del trapecio son iguales a: $ht cm de altura, $bs cm en la base superior y $bi en la base inferior, El perimetro del trapecio es: $ptr";
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
