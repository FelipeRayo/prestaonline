<div class="modal fade" id="frmRegistrarPrestamo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg cascading-modal" role="document">
            <!--Content-->
            <div class="modal-content">
    
                <!--Header-->
                <div class="modal-header cyan white-text">
                    <h4 class="title"><i class="fa fa-pencil"></i> Registro</h4>
                    <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!--Body-->
                <div class="modal-body mb-0">                    
                    <div class="row no-gutters">
                        <div class="col-md-6">
                            <div class="md-form form-sm">
                                <i class="fa fa-id-card prefix mr-3"></i>
                                <select class="browser-default form-control ml-5 w-75" id="frmcod_cliente">

                                </select>                            
                            </div>
                        </div>
                       
                        <div class="col-md-6">                              
                            <div class="md-form form-sm">
                                <i class="fa fa-map-marker prefix"></i>
                                <select class="browser-default form-control ml-5 w-75" id="frmcod_ruta">

                                </select>                                   
                            </div>
                        </div>    
                    </div>

                    <div class="row no-gutters">       
                        <div class="col-md-6">
                            <div class="md-form form-sm">
                                <i class="fa fa-dollar prefix"></i>
                                <input type="number" id="frmvalor_prestamo" class="form-control">
                                <label for="frmvalor_prestamo">Valor</label>
                            </div>
                        </div>
                            
                        <div class="col-md-6">    
                            <div class="md-form form-sm">
                                <i class="fa fa-list-alt prefix"></i>
                                <input type="number" id="frmcuotas_pre" class="form-control">
                                <label for="frmcuotas_pre">Cuotas</label>
                            </div>
                        </div>    
                    </div>

                    <div class="row no-gutters">
                        <div class="col-md-6">
                            <div class="md-form form-sm">
                                <i class="fa fa-percent prefix"></i>
                                <input type="number" step="any" id="frminteres_pre" class="form-control" >
                                <label for="frminteres_pre">Interes</label>
                            </div>
                        </div>
                    </div>

                    <div class="text-center mt-1-half">
                        <button class="btn btn-cyan mb-2" id="RegistrarPrestamo">Registrar <i class="fa fa-send ml-1"></i></button>
                    </div>   
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>

    