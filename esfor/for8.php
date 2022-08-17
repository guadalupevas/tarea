<?php
$peso = 0;
$altura = 0;
$pro1 = 0;
$pro2 = 0;
$pe1 = 0;
$pe2 = 0;
$pn1 = 0;
$pn2 = 0;
$sig = "kg";
$m ="cm";


for ($i=0; $i < 50; $i++) { 
    $altura = readline("Ingrese su altura en cm " . ($i + 1));
    $peso = readline("Ingrese su peso en kg");
    $pro2 = $pro2 + $altura;
    $pro1 = $pro1 + $peso;


}

$pro2 = $pro2 / $i;
$pro1 = $pro1 / $i;

echo "Su promedio de altura es: " .$pe2 . $m .  "\n";
echo "_______________________________________________" .  "\n";
echo "Su promedio de peso es : " . $pe1 .$sig .  "\n";
?>