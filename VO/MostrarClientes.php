<?php 

	include ("Conexion.php");
	$conexion = new Conexion();
	$sql = "SELECT * FROM cliente";
	$conexion->buscar_query($sql);
	$result = $conexion->obtenerResult();
	$filas = $conexion->ObtenerFilasAfectadas();


	$tabla = "";

	while ($filas = $result->fetch()) {

		$editar = '<button class=\"btn btn-cyan\" data-toggle=\"modal\" data-target=\"#frmEditarCliente\" onclick=\"EditarCliente('.$filas['IDENTIFICACION'].')\"><i class=\"fa fa-edit\"></i></button>';
		$eliminar = '<button class=\"btn btn-danger\" onclick=\"EliminarCliente('.$filas['IDENTIFICACION'].')\"><i class=\"fa fa-trash\"></i></button>';

		$tabla.='{

			"CC":"'.$filas['IDENTIFICACION'].'",
			"Nombre":"'.$filas['CLI_NOMBRE'].'",
			"Apellido":"'.$filas['CLI_APELLIDO'].'",
			"Fe de Nacimiento":"'.$filas['CLI_FECNAC'].'",
			"Direccion":"'.$filas['CLI_DIRECCION'].'",
			"Correo":"'.$filas['CLI_CORREO'].'",
			"Tel":"'.$filas['CLI_TEL'].'",
			"Cel1":"'.$filas['CLI_CEL1'].'",
			"Cel2":"'.$filas['CLI_CEL2'].'",
			"Direc Trabajo":"'.$filas['CLI_DIRTRA'].'",
			"Telef Trabajo":"'.$filas['CLI_TELTRA'].'",
			"Fiador":"'.$filas['CLI_FIADOR'].'",
			"Contacto Fiador":"'.$filas['CLI_CONTACFIADOR'].'",
			"Estado":"'.$filas['CLI_ESTADO'].'",
			"Fecha Creacion":"'.$filas['CLI_FECREG'].'",
			"Editar":"'.$editar.'",
			"Eliminar":"'.$eliminar.'"

		},';

	}

	$tabla = substr($tabla,0, strlen($tabla) - 1);

	echo '{"data":['.$tabla.']}';

?>