$(document).ready(function () {
    MostrarClientes();
    $("#frmcli_iden1").attr('readonly', true);
}); /*----------------------------------------------Modulo Cliente-------------------------------------------*/
$("#RegistrarCliente").click(function () {
    var frmcli_iden1 = $("#frmcli_iden").val(),
        frmcli_nomb1 = $("#frmcli_nomb").val(),
        frmcli_apel1 = $("#frmcli_apel").val(),
        frmcli_fech1 = $("#frmcli_fech").val(),
        frmcli_dire1 = $("#frmcli_dire").val(),
        frmcli_correo1 = $("#frmcli_correo").val(),
        frmcli_tele1 = $("#frmcli_tele").val(),
        frmcli_cel11 = $("#frmcli_cel1").val(),
        frmcli_cel21 = $("#frmcli_cel2").val(),
        frmcli_dirt1 = $("#frmcli_dirt").val(),
        frmcli_telt1 = $("#frmcli_telt").val(),
        frmcli_fiad1 = $("#frmcli_fiad").val(),
        frmcli_conf1 = $("#frmcli_conf").val();
    $.post("index.php?accion=RegistrarCliente", {
        frmcli_iden: frmcli_iden1,
        frmcli_nomb: frmcli_nomb1,
        frmcli_apel: frmcli_apel1,
        frmcli_fech: frmcli_fech1,
        frmcli_dire: frmcli_dire1,
        frmcli_correo: frmcli_correo1,
        frmcli_tele: frmcli_tele1,
        frmcli_cel1: frmcli_cel11,
        frmcli_cel2: frmcli_cel21,
        frmcli_dirt: frmcli_dirt1,
        frmcli_telt: frmcli_telt1,
        frmcli_fiad: frmcli_fiad1,
        frmcli_conf: frmcli_conf1
    }, function (datos) {
        $("#frmRegistrarCliente").modal('hide');
        MostrarClientes();
    });
    $("#frmcli_iden").val("");
    $("#frmcli_nomb").val("");
    $("#frmcli_apel").val("");
    $("#frmcli_fech").val("");
    $("#frmcli_dire").val("");
    $("#frmcli_correo").val("");
    $("#frmcli_tele").val("");
    $("#frmcli_cel1").val("");
    $("#frmcli_cel2").val("");
    $("#frmcli_dirt").val("");
    $("#frmcli_telt").val("");
    $("#frmcli_fiad").val("");
    $("#frmcli_conf").val("");
});

function MostrarClientes() {
    var table = $('#MostrarClientes').DataTable({
        destroy: true,
        responsive: true,
        "bDeferRender": true,
        "sPaginationType": "full_numbers",
        "ajax": {
            "url": "VO/MostrarClientes.php",
            "type": "POST"
        },
        "columns": [{
            "data": "CC"
        }, {
            "data": "Nombre"
        }, {
            "data": "Apellido"
        }, {
            "data": "Fe de Nacimiento"
        }, {
            "data": "Direccion"
        }, {
            "data": "Correo"
        }, {
            "data": "Tel"
        }, {
            "data": "Cel1"
        }, {
            "data": "Cel2"
        }, {
            "data": "Direc Trabajo"
        }, {
            "data": "Telef Trabajo"
        }, {
            "data": "Fiador"
        }, {
            "data": "Contacto Fiador"
        }, {
            "data": "Estado"
        }, {
            "data": "Fecha Creacion"
        }, {
            "data": "Editar"
        }, {
            "data": "Eliminar"
        }]
    });
    new $.fn.dataTable.FixedHeader(table);
}

function EditarCliente(id) {
    $.post("index.php?accion=EditarCliente", {
            id: id
        }, function (data) {
            var data = JSON.parse(data);
            console.log(data);
            $("#frmcli_iden1").val(data.CC);
            $("#frmcli_nomb1").val(data.Nombre);
            $("#frmcli_apel1").val(data.Apellido);
            $("#frmcli_fech1").val(data.FedeNacimiento);
            $("#frmcli_dire1").val(data.Direccion);
            $("#frmcli_correo").val(data.Correo);
            $("#frmcli_tele1").val(data.Tel);
            $("#frmcli_cel11").val(data.Cel1);
            $("#frmcli_cel21").val(data.Cel2);
            $("#frmcli_dirt1").val(data.DirecTrabajo);
            $("#frmcli_telt1").val(data.TelefTrabajo);
            $("#frmcli_fiad1").val(data.Fiador);
            $("#frmcli_conf1").val(data.ContactoFiador);
        });
    $("#ActualizarCliente").click(function () {
        var frmcli_iden1 = $("#frmcli_iden1").val(),
            frmcli_nomb1 = $("#frmcli_nomb1").val(),
            frmcli_apel1 = $("#frmcli_apel1").val(),
            frmcli_fech1 = $("#frmcli_fech1").val(),
            frmcli_dire1 = $("#frmcli_dire1").val(),
            frmcli_correo1 = $("#frmcli_correo1").val(),
            frmcli_tele1 = $("#frmcli_tele1").val(),
            frmcli_cel11 = $("#frmcli_cel11").val(),
            frmcli_cel21 = $("#frmcli_cel21").val(),
            frmcli_dirt1 = $("#frmcli_dirt1").val(),
            frmcli_telt1 = $("#frmcli_telt1").val(),
            frmcli_fiad1 = $("#frmcli_fiad1").val(),
            frmcli_conf1 = $("#frmcli_conf1").val();
        $.post("index.php?accion=ActualizarCliente", {
            frmcli_iden1: frmcli_iden1,
            frmcli_nomb1: frmcli_nomb1,
            frmcli_apel1: frmcli_apel1,
            frmcli_fech1: frmcli_fech1,
            frmcli_dire1: frmcli_dire1,
            frmcli_correo1: frmcli_correo1,
            frmcli_tele1: frmcli_tele1,
            frmcli_cel11: frmcli_cel11,
            frmcli_cel21: frmcli_cel21,
            frmcli_dirt1: frmcli_dirt1,
            frmcli_telt1: frmcli_telt1,
            frmcli_fiad1: frmcli_fiad1,
            frmcli_conf1: frmcli_conf1
        }, function (datos) {
            $("#frmEditarCliente").modal('hide');
            MostrarClientes();
        });
    });
}

    function EliminarCliente(id) {
        $.post("index.php?accion=EliminarCliente", {
            id: id
        }, function (datos) {
            MostrarClientes();
        });
    }