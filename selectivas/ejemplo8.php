<?php
$modelo = "Toyota";
$precio = 25000;
$descuento = 0;
$total = 0;

if ($modelo == "VOLSKWAGEN") {
    $descuento = $precio * 0.08;
}else if ($modelo == "TOYOTA") {
    $descuento = $precio * 0.09;
}else if ($modelo == "HYUNDAY") {
    $descuento = $precio * 0.06; 
}else if ($modelo == "MAZDA") {
        $descuento = $precio * 0.05;
}else {
    echo "No aplicas a nuestra promocion de descuento<br>" ;
}
$total = $precio - $descuento;
echo "MODELO DEL CARRO: " . $modelo ."<br>";
echo "PRECIO: " . $precio ."<br>";
echo "DESCUENTO: " . $descuento ."<br>";
echo "TOTAL A PAGAR: " . $total ."<br>";
?>