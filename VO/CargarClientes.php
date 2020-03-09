<?php 
	include ("Conexion.php");
	$conexion = new Conexion();
	$sql = "SELECT * FROM cliente";
	$conexion->buscar_query($sql);
	$result = $conexion->obtenerResult();
	$filas = $conexion->ObtenerFilasAfectadas();
	?>
	<option value="" selected >Seleccione un Cliente</option>
	<?php
		while ($filas = $result->fetch()) {
	?>		
		<option value="<?php echo $filas['IDENTIFICACION']?>"><?php echo $filas['IDENTIFICACION']." ". $filas['CLI_NOMBRE']." ".$filas['CLI_APELLIDO']?></option>
	<?php
		}
	?>
	
	

