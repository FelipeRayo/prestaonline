$(document).ready(function () {
	MostrarPrestamos();
	CargarRutas(0);
	CargarClientes();
	$("#frmcod_pre1").attr('readonly', true);
	$("#frmcod_cliente1").attr('readonly', true);
	$("#frmfecha_pre1").attr('readonly', true);
	$("#frmvalor_total1").attr('readonly', true);
});

function CargarRutas(dest) {
	$.post("VO/CargarRutas.php",{cod:dest},function(mensaje){
		if(dest>=1){
			$("#frmcod_ruta1").html(mensaje);
		}else{
			$("#frmcod_ruta").html(mensaje);
		}
	});
}

function CargarClientes() {
	$.post("VO/CargarClientes.php",{},function(mensaje){
		$("#frmcod_cliente").html(mensaje);
	});
}
	
$("#RegistrarPrestamo").click(function () {
	var frmcod_cliente1 = $("#frmcod_cliente").val(),
		frmcod_ruta3 = $("#frmcod_ruta").val(),
		frmvalor_prestamo1 = $("#frmvalor_prestamo").val(),
		frmcuotas_pre1 = $("#frmcuotas_pre").val(),
		frminteres_pre1 = $("#frminteres_pre").val();
	$.post("index.php?accion=RegistrarPrestamo", {
			frmcod_cliente: frmcod_cliente1,
			frmcod_ruta: frmcod_ruta3,
			frmvalor_prestamo: frmvalor_prestamo1,
			frmcuotas_pre: frmcuotas_pre1,
			frminteres_pre: frminteres_pre1
		},
		function (datos) {
			$("#frmRegistrarPrestamo").modal('hide');
			MostrarPrestamos();
		});

	$("#frmcod_cliente").val("");
	$("#frmcod_ruta1").val("");
	$("#frmvalor_prestamo").val("");
	$("#frmcuotas_pre").val("");
	$("#frminteres_pre").val("");
});

function VerResumen(cod) {
	$.post("index.php?accion=VerPrestamo", {
		cod: cod
	}, function (data) {
		var data = JSON.parse(data);
		console.log(data);
		$("#cod_prestamo").text(data.Codigo);
		$("#valor").text(data.Valor);
		$("#interes").text(data.Interes);
		$("#cuotas").text(data.Cuotas);
		$("#valor_total").text(data.ValorTotal);
		VerResumenCuotas(cod);		
	});
}

function VerResumenCuotas(cod) {
	var table = $('#VerPrestamos').DataTable({
		destroy: true,
		responsive: true,
		"bDeferRender": true,
		"sPaginationType": "full_numbers",
		"ajax": {
			"url": "VO/ResumenPrestamos.php",
			"type": "POST",
			"data": {
				'codigo':cod
			}
		},
		"columns":[
			{
				"data": "Cuota"
			},
			{
				"data": "Valor"
			},
			{
				"data": "Saldo Total"
			}
		]
	});
	new $.fn.dataTable.FixedHeader(table);
}

function MostrarPrestamos() {
	var table = $('#MostrarPrestamos').DataTable({
		destroy: true,
		responsive: true,
		"bDeferRender": true,
		"sPaginationType": "full_numbers",
		"ajax": {
			"url": "VO/MostrarPrestamos.php",
			"type": "POST"
		},
		"columns": [
			{
				"data": "Resumen"
			},
			{
				"data": "Editar"
			},
			{
				"data": "Eliminar"
			},
			{
				"data": "Codigo"
			},
			{
				"data": "Cliente"
			},
			{
				"data": "Ruta"
			},
			{
				"data": "Fecha"
			},
			{
				"data": "Valor"
			},
			{
				"data": "Cuotas"
			},
			{
				"data": "Interes"
			}
		]
	});
	new $.fn.dataTable.FixedHeader(table);
}

function EditarPrestamo(cod) {
	$.post("index.php?accion=EditarPrestamo", {
		cod: cod
	}, function (data) {
		var data = JSON.parse(data);
		console.log(data);
		CargarRutas(data.Ruta);
		$("#frmcod_pre1").val(data.Codigo);
		$("#frmcod_cliente1").val(data.Cliente);
		$("#frmfecha_pre1").val(data.Fecha);
		$("#frmvalor1").val(data.Valor);
		$("#frmcuotas1").val(data.Cuotas);
		$("#frminteres1").val(data.Interes);
	});
}

$("#ActualizarPrestamo").click(function () {
	var cod_pre = $("#frmcod_pre1").val(),
		cod_ruta = $("#frmcod_ruta1").val(),
		valor_prestamo = $("#frmvalor1").val(),
		cuotas = $("#frmcuotas1").val(),
		intereses = $("#frminteres1").val();
	$.post("index.php?accion=ActualizarPrestamo", {
			frmcod_pre1: cod_pre,
			frmcod_ruta1: cod_ruta,
			frmvalor_pre1: valor_prestamo,
			frmcant_cuotas1: cuotas,
			frminteres1: intereses,
		},
		function (datos) {
			$("#frmEditarPrestamo").modal('hide');
			MostrarPrestamos();
		});
});

function EliminarPrestamo(cod) {
	$.post("index.php?accion=EliminarPrestamo", {
		cod: cod
	}, function (datos) {
		MostrarPrestamos();
	});
} 

function GenerarReporte(){
	cod = $("#cod_prestamo").text();
	window.open("VO/GenerarReporte.php?codigo="+cod);
}

function EnviarCorreo(){
	cod = $("#cod_prestamo").text();
	window.location.href="VO/EnviarCorreo.php?codigo="+cod;
}
function ReporteExcel(){
	cod = $("#cod_prestamo").text();
	window.location.href="VO/ReporteExcelPrestamo.php?codigo="+cod;
}