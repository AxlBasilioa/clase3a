<?php
$cred = "misdatos.json";

if (file_exists($cred)) {//true
		$datos = json_decode(file_get_contents($cred), true);
	if ($datos !== null) {
		foreach($datos as $dato) { 
			echo $dato . "\n";
		}
	}else{
		echo "error";
	}
}else{//false
	$datos = array(
		'nombre'=>'nombreUsuario',
		'nivel'=>'nivelUsuario',
		'otroCampo'=>'otroCampo'
	);
	$datos_encode = json_encode($datos, JSON_PRETTY_PRINT);
	if (file_put_contents($cred, $datos_encode)) {
		echo "credenciales guardadas";
	}
}


?>