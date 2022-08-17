<?php //inicio
//TIPOS DE DATOS EN PHP
//Texto = Cadena
//Numerico
//Int
//Float, double
//Char

$nombre = "Guadalupe del Carmen"; //Cadena
$num = 20 ; //Entero
$nota = 9.12 ;
$letra = 'A';
$dui = "06556334-4";
$apellido = " Vasquez Aguillon";
$num1 = "77677207";
$sexo = "femenino";


echo "<strong>Nombre:</strong> " . $nombre . $apellido . "<br/>";
echo "<strong> edad:</strong> " . $num . "<br/>";
echo "<strong>DUI:</strong> " . $dui . "<br/>";
echo "<strong>Telefono:</strong> " . $num1 . "<br/>";
echo "<strong>Sexo:</strong> " . $sexo . "<br/>";

$n1 = 6;
$n2 = 9;
$n3 = 10;

$promedio = ($n1 + $n2 + $n3) /3;
echo "<strong>EL NOMBRE DEL ALUMNA ES: </strong>" . $nombre . $apellido . "<br/>";
echo "<strong>EL PROMEDIO ES: </strong>" . $promedio . "<br/>"  ;

$nu1 = 5;
$nu2 = 5;
$nu3 = 5;
$nu4 = 5;

$calcular = ($nu1 + $nu2 + $nu3 + $nu4)*100;
$calcular2 = ($nu1 * $nu2 * $nu3 * $nu4);

echo "<strong> EL perimtro es: </strong>" . $calcular . "<br/>";
echo "<strong> EL area calculada es: </strong>" . $calcular2;

?>