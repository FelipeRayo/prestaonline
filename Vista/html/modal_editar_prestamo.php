<div class="modal fade" id="frmEditarPrestamo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg cascading-modal" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header cyan white-text">
                <h4 class="title"><i class="fa fa-pencil"></i> Actualizar</h4> <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            </div>
            <!--Body-->
            <div class="modal-body mb-0">
                <div class="row no-gutters">
                    <div class="col-md-6">
                    <label>Codigo Prestamo</label>
                        <div class="md-form form-sm">
                            <i class="fa fa-bank prefix"></i> 
                            <input type="text" id="frmcod_pre1" class="form-control"> 
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label>Cliente</label>
                        <div class="md-form form-sm"> 
                            <i class="fa fa-id-card prefix"></i> 
                            <input type="text" id="frmcod_cliente1" class="form-control"> 
                        </div>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col-md-6">
                    <label>Ruta</label>
                        <div class="md-form form-sm"> 
                            <i class="fa fa-map-marker prefix"></i> 
                            <select class="browser-default ml-4 form-control w-75" id="frmcod_ruta1">

                            </select> 
                        </div>
                    </div>
                    <div class="col-md-6">
                    <label>Fecha</label>
                        <div class="md-form form-sm"> 
                            <i class="fa fa-calendar prefix"></i> 
                            <input type="text" id="frmfecha_pre1" class="form-control datepicker"> 
                        </div>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col-md-6">
                    <label>Valor</label>
                        <div class="md-form form-sm"> 
                            <i class="fa fa-dollar prefix"></i> 
                            <input type="text" id="frmvalor1" class="form-control"> 
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label>Cuotas</label>
                        <div class="md-form form-sm"> 
                            <i class="fa fa-list-alt prefix"></i> 
                            <input type="text" id="frmcuotas1" class="form-control"> 
                        </div>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col-md-6">
                    <label>Interes</label>
                        <div class="md-form form-sm"> 
                            <i class="fa fa-percent prefix"></i> 
                            <input type="text" id="frminteres1" class="form-control"> 
                        </div>
                    </div>
                </div>              
                <div class="text-center mt-1-half"> <button class="btn btn-cyan mb-2" id="ActualizarPrestamo">Actualizar <i class="fa fa-send ml-1"></i></button> </div>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>