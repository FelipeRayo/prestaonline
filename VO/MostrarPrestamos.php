<?php 
	include ("Conexion.php");
	$conexion = new Conexion();
	$sql = "SELECT * FROM prestamo";
	$conexion->buscar_query($sql);
	$result = $conexion->obtenerResult();
	$filas = $conexion->ObtenerFilasAfectadas();

	$tabla = "";

	while ($filas = $result->fetch()) {

		$resumen = '<button class=\"btn btn-cyan btn-xs\" data-toggle=\"modal\" data-target=\"#frmResumenPrestamo\" onclick=\"VerResumen('.$filas['Cod_Prestamo'].')\"><i class=\"fa fa-file-text\"></i></button>';
		$editar = '<button class=\"btn btn-cyan btn-xs\" data-toggle=\"modal\" data-target=\"#frmEditarPrestamo\" onclick=\"EditarPrestamo('.$filas['Cod_Prestamo'].')\"><i class=\"fa fa-edit\"></i></button>';
		$eliminar = '<button class=\"btn btn-danger btn-xs\" onclick=\"EliminarPrestamo('.$filas['Cod_Prestamo'].')\"><i class=\"fa fa-trash\"></i></button>';

		$tabla.='{
			"Resumen":"'.$resumen.'",
			"Editar":"'.$editar.'",
			"Eliminar":"'.$eliminar.'",
			"Codigo":"'.$filas['Cod_Prestamo'].'",
			"Cliente":"'.$filas['Cod_Cliente'].'",
			"Ruta":"'.$filas['Cod_Ruta'].'",
			"Fecha":"'.$filas['Fecha_prestamo'].'",
			"Valor":"'.$filas['Valor_prestamo'].'",
			"Cuotas":"'.$filas['Cant_cuotas_prestamo'].'",
			"Interes":"'.$filas['Interes_prestamo'].'"
		},';

	}

	$tabla = substr($tabla,0, strlen($tabla) - 1);

	echo '{"data":['.$tabla.']}';
?>