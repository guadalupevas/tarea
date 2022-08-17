<?php
$mayor0 = 0;
$positivos = 0;
$positivopron = 0;
$prontotal = 0;
$total = 0;
$n = 0;
$total2 = 0;
for($i = 0; $i < 100; $i++){
    $n = readline("Ingrese un numero" . ($i + 1));
if($n > 0){
    $mayor0++;
    $positivos = $positivos + $n;
}
$total++;
 $prontotal = $prontotal + $n;
}
$positivopron = $positivos / $mayor0;
$total2 = $prontotal / $total;

echo "EL TOTAL DE NUMEROS POSITIVOS ES: " . $mayor0 . "\n";
echo "***********************************************" . "\n";
echo "LA SUMA DE NUMEROS POSITIVOS ES: " . $positivos . "\n";
echo "***********************************************" . "\n";
echo "EL PROMEDIO DE NUMEROS POSITIVOS ES: " . $positivopron . "\n";
echo "***********************************************" . "\n";
echo "EL PROMEDIO DE TODOS LOS NUMEROS ES: " . $total2 . "\n";
echo "***********************************************" . "\n";
echo "LA SUMA DE TODOS LOS NUMEROS ES: " .$prontotal ."\n";
echo "***********************************************" , "\n";
echo "EL TOTAL DE NUMEROS ES: " . $total . "\n";

?>