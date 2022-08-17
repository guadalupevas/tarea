<?php
$subtotal = 0;
$descuento = 0;
$descuento2 = 0;
$totalapagar = 0;
$acumtotal = 0;
do {
    $descuento = 0;
    $descuento2 = 0;
    echo "BIENVENIDO! \n";
    echo "1. Cuaderno \n";
    echo "2. Revista \n";
    echo "3. Libros \n";
    $opc = readline("SELECCIONE UNA OPCIÓN: ");
    $cantidad = readline("CANTIDAD PRODUCTO: ");
    $precio = readline("PRECIO PRODUCTO: ");
    $tipopago = readline("TIPO DE PAGO: CONTADO/CREDITO");
    $subtotal = $cantidad * $precio;

    $tipopago = strtoupper($tipopago);
    if ($tipopago == "CONTADO") {
        $descuento2 = $subtotal * 0.06;
    }
    switch ($opc) {
        case "1":
            $descuento = $subtotal * 0.1;
            break;
        case "2":
            $descuento = $subtotal * 0.16;
            break;
        case "3":
            $descuento = $subtotal * 0.22;
            break;

        default:
            echo "Opción Incorrecta";
            break;
    }

    $totalapagar = $subtotal - $descuento - $descuento2;
    $acumtotal += $totalapagar;
    echo "TOTAL A PAGAR: $ " . $totalapagar . "\n";
    $pregunta = readline("DESEA INGRESAR OTRO CLIENTE? SI/NO ");
    $pregunta = strtoupper($pregunta);
} while ($pregunta == "SI");

echo "TOTAL COMPRAS POR TODOS LOS CLIENTES: " . $acumtotal;