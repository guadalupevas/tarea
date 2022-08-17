<?php
$ventas = 0;
$a1 = 0;
$b2 = 0;
$c3 = 0;
$d4 = "si";
do {
   $ventas = readline("INGRESE SU VENTA" . "\n");
   $d4 = readline("DESEA SEGUIR AGREGANDO COMPRAS" . "\n");
   if($ventas <= 200){
    $a1++;

}else if($ventas > 200 && $ventas < 400){
    $b2++;

}else if($ventas >= 400){
    $c3++;
}
} while ($i == "si");
echo "-----------------------------------------------" . "\n";
echo "SUS VENTAS IGUALES O MENORES A 200 FUERON: " . $a1 . "\n";
echo "SUS VENTAS MAYORES A 200 Y MENORES DE 400 FUERON: " . $b2 . "\n";
echo "SUS VENTAS MAYORES A 400 FUERON: " . $c3 . "\n";
?>