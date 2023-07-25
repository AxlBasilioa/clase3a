<?php
#encriptar


function encriptar($inputString){

	$tmp = hash('sha256', $inputString);
	return $tmp;
}
?>