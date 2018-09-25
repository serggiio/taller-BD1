<?php
 $cadena="host='localhost' port='5432' dbname='ejem' user='postgres' password='123'";
 $con=pg_connect($cadena) or die("Error de conexion.". pg_error());
 
 $sql = "SELECT * FROM alm.items";
 
 $result = pg_query($sql) or die("Error query.". pg_error());
 
 $cont=pg_num_rows($result);
 
 echo "RESULTADOS DE LA CONSULTA";
 echo "<hr/>";
 echo "<ul>";
 while($row=pg_fetch_array($result, null, PGSQL_ASSOC))
 {
 echo "<li>".$row["descripcion"].", ".$row["codigo"].", ".$row["unidad"].", ".$row["id_item"]."</li>";
 }
 echo "</ul>";
 echo "<hr/>".$cont." resultados obtenidos";
?>