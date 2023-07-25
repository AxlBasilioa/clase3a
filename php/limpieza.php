<?php
#limpiarCaracteres
function limpiarCaracteres($inputString){
	$patron = "/[^a-zA-Z0-9]/";
	$tmp = preg_replace($patron, "", $inputString);
	return $tmp;
}
?>