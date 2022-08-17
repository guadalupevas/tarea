<?php
$venta = 0;
$media = 0;
$media2 = 0;
$ven = 0;
$a = "si";
$empleados = 1;
$i = 1;
do {
    $a = readline("HOLA DESEA INGRESAR NUEVAS VENTAS" . "\n");

    if($a == "si"){
        $empleados = readline("CUANTAS VENTAS DECEA PROCESAR" . "\n");
        for ($i=1; $i <= $empleados; $i++) { 
           $venta = readline("INGRESE SU VENTA " . ($i) . "\n");
           $media = $media + $venta;
        }

    }
    $ven++;
} while ($a == "si");
$media2 = $media / $ven;
echo "LA MEDIA DE N EMPLEADOS ES " . $media2 . "\n";
?>