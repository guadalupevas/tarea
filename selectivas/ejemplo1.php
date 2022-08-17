<?php
$nombre = "";
$sueldo = "";
$aumento = "";
for($i = 0; $i < 20; $i++){
    $descuento = 0;
    $nombre = readline("ingrese su nombre");
    $sueldo = readline("ingrese su sueldo");
    if($sueldo < 800){
      $aumento = $sueldo * 0.15;
    }
    echo "el sueldo es: " .$sueldo;
    echo "Aumento " .$aumento; 
    echo "Total a pagar: "  .($sueldo + $descuento);

}
?>