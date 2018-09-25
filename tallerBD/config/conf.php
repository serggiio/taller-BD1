<?php
	require('bd.php');
	//print_r($host);
	$conexion=pg_connect("host=$host dbname=$db user=$username password=$password") or die ("no se pudo conectar a la base de datos");
	
	if ($conexion) {
		//echo "se conecto a la base de datos";
	}



?>