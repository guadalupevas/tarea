<?php

	$stdin = fopen('php://stdin','r');
	settype($temperatura,'float');
	settype($temmayor,'float');
	settype($temmenor,'float');
	settype($promedio,'float');
	settype($i,'float');
	echo 'INGRESE LA TEMPERATURA',1,PHP_EOL;
	fscanf($stdin,"%f",$temperatura);
	$temmenor = $temperatura;
	$temmayor = $temperatura;
	for ($i=2;$i<=3;$i++) {
		echo 'INGRESE LA TEMPERATURA',$i,PHP_EOL;
		fscanf($stdin,"%f",$temperatura);
		$promedio = ($promedio+$temperatura);
		if ($temperatura>$temmayor) {
			$temmayor = $temperatura;
		} else {
			if ($temperatura<$temmenor) {
				$temmenor = $temperatura;
			}
		}
	}
	echo 'EL PROMEDIO DE LA TEMPERATURA ES: ',$promedio/24,PHP_EOL;
	echo 'LA TEMPERATURA MAYOR ES: ',$temmayor,PHP_EOL;
	echo 'LA TEMPERATURA MENOR ES: ',$temmenor,PHP_EOL;
?>