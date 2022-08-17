<?php
$peso = 0;
$altura = 0;
$peso1 = 0;
$altura2 = 0;
$pron1 = 0;
$pron2 = 0;
$pro1 = 0;
$pro2 = 0;
$p1 = 0;
$p2 = 0;
$sig = "KG";
$s ="CM";
$op = 0;
$pron3 = 0;
$pron4 = 0;
$pro3 = 0;
$pro4 = 0;

for ($i=0; $i < 50; $i++) { 
   echo " 1. M" .  "\n";
   echo " 2. F" .  "\n";
   $op = readline("Seleccione su sexo") .  "\n";
   switch($op){
    case 1:
        $altura = readline("Ingrese su altura en cm " . ($i + 1));
        $peso = readline("Ingrese su peso en kg");
        $pron2 = $pron2 + $altura;
        $pron1 = $pron1 + $peso;
        $p2++;
        break;
        case 2:
            $altura1 = readline("Ingrese su altura en cm " . ($i + 1));
            $peso1 = readline("Ingrese su peso en kg");
            $pron3 = $pron3 + $altura1;
            $pron4 = $pron4 + $peso1;
            $p1++;
            break;
   }



}
$pro2 = $pron2 / $p2;
$pro1 = $pron1 / $p2;
$pro3 = $pron3 / $p1;
$pro4 = $pron4 / $p1;
echo "Masculino" .  "\n";
echo "El promedio de altura es: " .$pro2 . $s .  "\n";
echo "_______________________________________________" .  "\n";
echo "El promedio de peso es : " . $pro1 .$sig .  "\n";
echo "_______________________________________________" .  "\n";
echo "Femenino" .  "\n";
echo "El promedio de altura es: " .$pro3 . $s .  "\n";
echo "_______________________________________________" .  "\n";
echo "El promedio de peso es : " . $pro4 .$sig .  "\n";

?>