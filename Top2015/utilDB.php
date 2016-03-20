<?php

//LA FUNCIÓN DE LA BASE DE DATOS
function conectarMySql($schema='u424338900_top', $usuario='u424338900_manu', $pwd='lethal', $host='mysql.hostinger.es')
{
	try{
		$dsn="mysql:host=$host;dbname=$schema";
		return (new PDO($dsn,$usuario,$pwd));
	}
	catch(PDOException $e){
		echo 'No tienes acceso a la BD';
		die();
	}
}
?>