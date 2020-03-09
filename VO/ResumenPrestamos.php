<?php 
	$cod=$_POST['codigo'];
	include ("Conexion.php");
	include ("../DAO/DAOPrestamo.php");
	$conexion = new Conexion();
	$sql = "SELECT * FROM prestamo WHERE Cod_prestamo = '$cod'";
	$conexion->buscar_query($sql);
	$result = $conexion->obtenerResult();
	$filas = $conexion->ObtenerFilasAfectadas();
	$dao= new DAOPrestamo();
        
	$tabla = "";

	while ($filas = $result->fetch()) {
		$valor_prestamo = $filas['Valor_prestamo'];
		$cuotas = $filas['Cant_cuotas_prestamo'];
		$interes = $filas['Interes_prestamo'];
		$valor_total = $dao->ValorTotal($valor_prestamo,$cuotas,$interes);
		$valor_cuota = round(($valor_total/$cuotas));		
	}
	for ($i=1; $i<=$cuotas; $i++) { 
		$valor_total=round(($valor_total-$valor_cuota));
		if($valor_total<0){
			$valor_total=0;
		}
		$tabla.='{
			"Cuota":"'.$i.'",
			"Valor":"'.$valor_cuota.'",
			"Saldo Total":"'.$valor_total.'"
		},';
	}
	$tabla = substr($tabla,0, strlen($tabla) - 1);

	echo '{"data":['.$tabla.']}';
	
?>