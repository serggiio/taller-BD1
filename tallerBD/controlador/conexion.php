<?php 

	class conectar{
		private $host="localhost";
		private $username="postgres";
		private $db="ejem";
		private $password="123";

		public function conexion(){

			$conexion=pg_connect("host=$host dbname=$db user=$username password=$password") or die ("no se pudo conectar a la base de datos");
			/*
			$conexion=mysqli_connect($this->servidor,
									 $this->usuario,
									 $this->password,
									 $this->bd);*/
			return $conexion;
		}

	}




	
 ?>