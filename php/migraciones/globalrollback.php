<?php
#globalrollback.php
include_once 'commitusuarios.php';

function ...{
	#php Sapi name
	#cli -> Common Line Interface
	#cgi -> Common Gateway Interface
	#Apache -> servicio
	#ejecutar UNICAMENTE en consola
	if (php_sapi_name() !== 'cli') {
		//return 0;
		die("Inaccesible");
		
	}
	//todo el codigo
	#ejecutarlo UNICAMENTE en el navegador
	if (php_sapi_name() === 'cgi' || php_sapi_name() !== 'Apache') {
		die("intentas abrirlo en consola");
	}
}
?>