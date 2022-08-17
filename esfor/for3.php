<?php
$numero = 0;
$positivos = 0;
$negativos = 0;
$nulos = 0;

for($i = 0; $i < 100; $i++){
$numero = readline("ingrese un numero #" . ($i + 1));
if($numero == 0) {
$positivos++;
}else if($numero < 0) {
    $negativos++;
    }else{
        $nulos++;
    }

}
echo "\n";
echo"_________________________________\n";
echo "------------------------------------" ."\n";
echo "numeros nulos: " .$positivos ."\n";
echo "------------------------------------" ."\n";
echo "Numeros Negativos: " .$negativos ."\n";
echo "------------------------------------" ."\n";
echo "Numeros positivos: " .$nulos ."\n";

?> 