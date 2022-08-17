<?php
$venta1 = 0;
$venta2 = 0;
$venta3 = 0;
$ventat = 0;
$sueldo = 0;
$comision = 0;
$sueldot = 0;
$comisiot = 0;
$sueldo2 = 0;

for($i = 0; $i < 30; $i++) {
    $sueldo = readline("Ingrese su sueldo " . ($i + 1));
    $venta1 = readline("Ingrese su venta");
    $venta2 = readline("Ingrese su venta");
    $venta3 = readline("Ingrese su venta");

    $ventat = $venta1 + $venta2 + $venta3;
    $comision = $ventat * 0.10;
    $sueldo2 = $sueldo + $comision;

    $comisiot = $comisiot + $comision;
    $sueldot = $sueldot + $sueldo2;

    echo "_____________________________" .  "\n";
    echo "Su sueldo es: $" .$sueldo .  "\n";
    echo "El total en sus 3 ventas es: $" .$ventat .  "\n";
    echo "Su comision por las 3 ventas es el 10% : $" .$comision . "\n";
    echo "Su sueldo con comisiones es: $" .$sueldo2 . "\n";


}
echo "_______________________________________" .  "\n";
echo "El total de comisiones es: $" . $comisiot .  "\n";
echo "El total a pagar en sueldos es: $" .$sueldot .  "\n";
?> 