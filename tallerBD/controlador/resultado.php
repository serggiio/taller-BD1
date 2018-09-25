<?php 
$codigo = $_POST["codigo"];
$descripcion = $_POST["descripcion"];
$unidad = $_POST["unidad"];
$ubicacion = $_POST["ubicacion"];
$partida = $_POST["partida"];
require_once('../config/conf.php');



$Datos = "SELECT * FROM alm_busqueda('$codigo','$descripcion','$unidad','$ubicacion',$partida )";
$resDatos = pg_query($Datos)or die('consulta fallida'.pg_last_error());
$rows=pg_num_rows($resDatos);
 ?>


 <!DOCTYPE html>
<html>
<head>

<script type="text/javascript" scr="script.js"></script>
<script src="jquery-3.3.1.min"></script>
	<title></title>
	<!-- Bootstrap core CSS -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../bootstrap/js/bootstrap.min.js" rel="stylesheet">
    <link href="../bootstrap/body.css" rel="stylesheet">
</head>
<body>

	<div class="row">
		<a href="../vistas/usuario.php">USUARIOS</a>
		<div class="col-md-2"></div>

		<div class="col-md-8">
			<h1>Gestion items</h1>
			<div class="panel panel-default">

				<div class="panel-heading">Buscar items</div>
  					<div class="panel-body">


  						<form class="form-inline" method="POST" action="resultado.php">
  						<div class="row">

  							<div class="col-md-1"></div>

  							<div class="col-md-10">
						  <div class="form-group">
						    <label for="exampleInputName2" class="control-label">Codigo</label> 
							    <input type="text" class="form-control" id="textoCodigo" name="codigo" placeholder="">
						  </div>

						  <div class="form-group">
						    <label for="exampleInputName2">Descripcion</label>
						    <input type="text" class="form-control" id="textoDescripcion" name="descripcion" placeholder="">
						  </div><br>


						  
						  <div style="padding-right: 50px;" class="form-group">
						    <label for="exampleInputName2">Unidad</label>
						    <select name="unidad">
						    	<option>pza</option>
						    	<option>ltrs</option>
						    </select>
						  </div>

						  <div style="padding-left: 75px;" class="form-group">
						    <label for="exampleInputName2">Ubicacion</label>
						    <select name="ubicacion">
						    	<option>almacen1</option>
						    	<option>almacen2</option>
						    	<option>almacen3</option>
						    </select>
						  </div><br>

						  <div class="form-group">
						    <label for="exampleInputName2">partida presup.</label>
						    <select name="partida">
						    	<option>1000</option>
						    	<option>1100</option>
						    	<option>1200</option>
						    </select>
						  </div><br>
						  
						  <input  class="btn btn-primary" type="submit" id="btn-submit" value="Buscar">
						  </div>

						  <div class="col-md-1"></div>
						</div>
						</form>
  					</div>
			</div>	
			<a href="" class="btn btn-primary">Nuevo</a>
			<a href="" class="btn btn-success">Imprimir</a><br>

			
        <table class="table table-striped" >
	                <tr>
	                  <td>Comando</td>
	                  <td>Codigo</td>
	                  <td>Descripcion</td>
	                  <td>unidad</td>
	                  <td>ubicacion</td>
	                  <td>partida p.</td>
	                </tr>

	                
					<?php
				
					while($row=pg_fetch_array($resDatos, null, PGSQL_ASSOC))
					 {

					echo '<tbody>
								<tr>
								<td><a href=" " class="btn role="button">Remover</a><a href="editar.php?id='.$row['r_id_items'].'" class="btn role="button">Editar</a></td>
								<td>'.$row['r_codigo'].'</td>
								<td>'.$row['r_descripcion'].'</td>
								<td>'.$row['r_unidad'].'</td>
								<td>'.$row['r_ubicacion'].'</td>
								<td>'.$row['r_part_p'].'</td>
								</tr>
							</tbody>';

					 
					 }
						
					?>
								
					

								
									
								
	
	    
        
	      </table>
     
			


		</div>

		<div class="col-md-2"></div>



	</div>

</body>
</html>