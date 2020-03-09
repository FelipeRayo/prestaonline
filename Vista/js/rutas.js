$(document).ready(function () {
	MostrarRutas();
	$("#frmcod_ruta1").attr('readonly', true);
});

$("#RegistrarRuta").click(function () {
		frmdesc_ruta1 = $("#frmdesc_ruta").val();

	$.post("index.php?accion=RegistrarRuta", {
		frmdesc_ruta: frmdesc_ruta1
	}, function (datos) {
		$("#frmRegistrarRuta").modal('hide');
		MostrarRutas();

	});
	$("#frmdesc_ruta").val("");
});


function MostrarRutas() {
	var table = $('#MostrarRutas').DataTable({
		destroy: true,
		responsive: true,
		"bDeferRender": true,
		"sPaginationType": "full_numbers",
		"ajax": {
			"url": "VO/MostrarRutas.php",
			"type": "POST"
		},
		"columns": [

			{
				"data": "Codigo"
			},
			{
				"data": "Descripcion"
			},
			{
				"data": "Editar"
			},
			{
				"data": "Eliminar"
			}

		]
	});

	new $.fn.dataTable.FixedHeader(table);
}


function EditarRuta(cod) {

	$.post("index.php?accion=EditarRuta", {
		cod: cod
	}, function (data) {
		var data = JSON.parse(data);
		console.log(data);
		$("#frmcod_ruta1").val(data.Codigo);
		$("#frmdesc_ruta1").val(data.Descripcion);
	});

}

$("#ActualizarRuta").click(function () {

	var cod_ruta1= $("#frmcod_ruta1").val(),
		desc_ruta1 = $("#frmdesc_ruta1").val();
		
	$.post("index.php?accion=ActualizarRuta", {
		frmcod_ruta1: cod_ruta1,
		frmdesc_ruta1: desc_ruta1		
	}, function (datos) {

		$("#frmEditarRuta").modal('hide');
		MostrarRutas();
	});

});

function EliminarRuta(cod) {

	$.post("index.php?accion=EliminarRuta", {
		cod: cod
	}, function (datos) {
		MostrarRutas();
	});

}