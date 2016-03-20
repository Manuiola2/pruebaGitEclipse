<?php


require_once ("utilDB.php");
$usuario = (isset ( $_REQUEST ['usuario'] ) ? $_REQUEST ['usuario'] : null);
$cancion1 = (isset ( $_REQUEST ['cancion1'] ) ? $_REQUEST ['cancion1'] : null);
$cancion2 = (isset ( $_REQUEST ['cancion2'] ) ? $_REQUEST ['cancion2'] : null);
$cancion3 = (isset ( $_REQUEST ['cancion3'] ) ? $_REQUEST ['cancion3'] : null);
$cancion4 = (isset ( $_REQUEST ['cancion4'] ) ? $_REQUEST ['cancion4']: null);
$cancion5 = (isset ( $_REQUEST ['cancion5'] ) ? $_REQUEST ['cancion5'] : null);


	$db = conectarMySql ();


	$consulta = <<<SQL
insert into top2015 (Usuario,Cancion1,Cancion2,Cancion3,Cancion4,Cancion5)
values (?,?,?,?,?,?)
SQL;
	$sentenciaPreparada = $db->prepare ( $consulta );
	
		$perfecto = $sentenciaPreparada->execute ( [
				$usuario,
				$cancion1,
				$cancion2,
				$cancion3,
				$cancion4,
				$cancion5
		] );

	
	header ( "Location:view2.php" );
