<?php

#commit -> enviamos a la base de datos, cambios.
#rollback -> deshacer los cambios del commit
#commitusuarios ->archivo
#usuariorollback -> function
	function usuarioscommit(){
		try {
			#php data object
			$pdo = new PDO("mysql:host=localhost;dbname=clase3a", "root", "");
			#iniciar transaccion
			#envio de informacion a la base de datos
			$pdo -> beginTransaction();
			#la transaccion a realizar
			#execute
			$pdo -> exec("
				CREATE TABLE usuarios(
						ID_usuarios INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
						columna1 VARCHAR(21) NOT NULL
					)");
			$pdo -> commit();
		} catch (Exception $e) {
			#otro codigo en caso de error
		}
	}


	function usuariosrollback(){
		
		$pdo -> exec("DROP TABLE usuarios");
	}
	/*
	constancia - limpieza de codigo
	modular
	cursos
	encuestas
	codigo
	calif
	responsive
	70%
	DJango
	Python
	Session Timer
	
	*/
	try{
		//toda el cod funct
		try{

		}catch(){

		}
	}catch(){
		//$e
	}
?>