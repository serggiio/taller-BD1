<?php 

	class metodos{
		public function busqueda($sql){
			$result = pg_query($sql)or die('consulta fallida'.pg_last_error());
			

			
			return pg_fetch_array($result, null, PGSQL_ASSOC);
			//return mysqli_fetch_all($result,MYSQLI_ASSOC);
		}
		public function condicional($usuario,$nombres,$paterno,$materno,$estado,$clave){
			if ($usuario!='' ) {
				
			}
		}
		
	}
 ?>