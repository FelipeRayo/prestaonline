 <?php 
	$codigo = $_POST['cod'];
	include ("Conexion.php");
	$conexion = new Conexion();
	$sql = "SELECT * FROM ruta";
	$conexion->buscar_query($sql);
	$result = $conexion->obtenerResult();

	$sql = "SELECT * FROM ruta WHERE Cod_Ruta = $codigo";
	$conexion->buscar_query($sql);
	$result1 = $conexion->obtenerResult();	

	$sql = "SELECT * FROM ruta WHERE Cod_Ruta <> $codigo";
	$conexion->buscar_query($sql);
	$result2 = $conexion->obtenerResult();	
		if($codigo>= 1){
			while($filas1 = $result1->fetch()){
		?>
			<option value="<?php echo $filas1['Cod_Ruta']?>"  >
				<?php echo $filas1['Desc_Ruta'] ?>
			</option>

		<?php
			}	
		
			while($filas2 = $result2->fetch()){
		?>
			<option value="<?php echo $filas2['Cod_Ruta']?>" >
				<?php echo $filas2['Desc_Ruta'] ?>
			</option>
		<?php
			}
		?>
	<?php
		}else{
			?>
			<option value="" selected >Seleccione una Ruta</option>
	<?php
		while ($filas = $result->fetch()) {
	?>		
		<option value="<?php echo $filas['Cod_Ruta']?>">
			<?php echo $filas['Desc_Ruta'] ?>
		</option>
	<?php
		}
	}
	?>

		
	
	
	
	

