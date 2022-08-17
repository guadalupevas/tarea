<?php
$numero = 0;
$pares = 0;
$impares = 0;
$promedio = 0;
$suma = 0;
$suma2 = 0;

for ($i = 0; $i < 5; $i++ ) {
    $numero = readline("Ingrese un numero # " . $i +1);
    if ($numero % 2 == 0) {
        $suma = $suma + $numero;
    } else {
        $impares++;
        $suma2 = ($suma2 + $numero);
    }

}
$promedio = $suma2 / $impares;
    echo "La suma de los numeros pares es: " . number_format($suma,2) . "\n";
    echo "El Promedio de los numeros impares es: " . number_format($promedio,2) . "\n";
?>
