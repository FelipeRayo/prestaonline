<?php 

	include ("Conexion.php");
	$conexion = new Conexion();
	$sql = "SELECT * FROM ruta";
	$conexion->buscar_query($sql);
	$result = $conexion->obtenerResult();


	$tabla = "";

	while ($filas = $result->fetch()) {

		$editar = '<button class=\"btn btn-cyan\" data-toggle=\"modal\" data-target=\"#frmEditarRuta\" onclick=\"EditarRuta('.$filas['Cod_Ruta'].')\"><i class=\"fa fa-edit\"></i></button>';
		$eliminar = '<button class=\"btn btn-danger\" onclick=\"EliminarRuta('.$filas['Cod_Ruta'].')\"><i class=\"fa fa-trash\"></i></button>';

		$tabla.='{

			"Codigo":"'.$filas['Cod_Ruta'].'",
			"Descripcion":"'.$filas['Desc_Ruta'].'",
			"Editar":"'.$editar.'",
			"Eliminar":"'.$eliminar.'"

		},';

	}

	$tabla = substr($tabla,0, strlen($tabla) - 1);

	echo '{"data":['.$tabla.']}';

?>