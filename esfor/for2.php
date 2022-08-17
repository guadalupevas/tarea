<?php
$nombre = "";
$sueldo = 0;
$aumento = 0;
for ($i=0; $i < 50; $i++) { 
    $aumento = 0;
   $nombre = readline("Ingrese un nombre");
   $sueldo = readline("Ingrese su sueldo");
   if ($sueldo < 1000) {
    $aumento = $sueldo * 0.12;
   }else if ($sueldo > 1000 && $sueldo <= 25000 ) {
    $aumento = $sueldo * 0.10;
   }else if ($sueldo > 25000 ) {
    $aumento = $sueldo * 0.08;
   } 
   echo "el sueldo es: ". $sueldo . "<br>";
   echo "El aumento es: " . $aumento;
   echo "Total a Pagar: " . ($sueldo + $aumento);
}
?>