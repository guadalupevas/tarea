<?php
$venta1 = 0;
$venta2 = 0;
$ven1 = 0;
$ven2 = 0;
$opcion = " si";
$i = 0;
$total = 0;
while($op == " si"){
$venta1 = readline("Ingrese las compras del mismo precio o marca " . ($i + 1));
$venta2 = readline("Ingrese las demas compras");
$opcion = readline("Desea seguir comprando");
$ven1 = $ven1 + $venta1;
$ven2 = $ven2 + $venta2;
$i++;
}
$total = $ven1 + $ven2;
echo "EL TOTAL DE COMPRAS DEL MISMO PRECIO ES:" . "\n";
echo number_format($ven1,2) . "\n"; 
echo "El total de las demas compras es:" . "\n";
echo number_format($ven2,2) . "\n"; 
echo "El total de compras es:" . "\n";
echo number_format($total,2) . "\n"; 
?> 