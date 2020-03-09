<div class="modal fade" id="frmResumenPrestamo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg cascading-modal" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header cyan white-text">
                <h4 class="title"><i class="fa fa-file-text"></i> Resumen</h4> <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            </div>
            <!--Body-->
            <div class="modal-body mb-0">
                <div class="row no-gutters">
                    <div class="col-md-6">
                        <div class="md-form form-sm">
                            <i class="fa fa-bank prefix"></i>
                            <label><h4>Codigo:</h4></label> 
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="md-form form-sm">
                            <label id="cod_prestamo" class="h1"></label> 
                        </div>
                    </div>
                </div>
                
                <div class="row no-gutters mt-5">
                    <div class="col-md-6">
                        <div class="md-form form-sm">
                        <i class="fa fa-dollar prefix"></i> 
                            <label><h4>Valor:</h4></label> 
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="md-form form-sm"> 
                            <label id="valor" class="h1"></label> 
                        </div>
                    </div>
                </div>
                <div class="row no-gutters mt-5">
                    <div class="col-md-6">
                        <div class="md-form form-sm"> 
                        <i class="fa fa-percent prefix"></i>
                            <label><h4>Interes:</h4></label> 
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="md-form form-sm"> 
                            <label id="interes" class="h1"></label> 
                        </div>
                    </div>
                </div>
                <div class="row no-gutters mt-5">
                    <div class="col-md-6">
                        <div class="md-form form-sm"> 
                        <i class="fa fa-list-alt prefix"></i>
                            <label><h4>Cuotas:</h4></label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="md-form form-sm"> 
                            <label id="cuotas" class="h1"></label>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters mt-5 mb-5">
                    <div class="col-md-6">
                        <div class="md-form form-sm"> 
                        <i class="fa fa-money prefix"></i>
                            <label><h4>Valor Total:</h4></label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="md-form form-sm"> 
                            <label id="valor_total" class="h1"></label>
                        </div>
                    </div>
                </div>    
                <h4 class="title text-center mt-5">Resumen Cuotas</h4>
                <table id="VerPrestamos" class="table table-striped table-bordered nowrap" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Cuota</th>
                            <th>Valor</th>
                            <th>Saldo Total</th>
                        </tr>
                    </thead>
                    <tbody> </tbody>
                </table>
                <div class="text-center mt-1-half">
                     <button class="btn btn-blue mb-2" id="EnviarPrestamo" onclick="EnviarCorreo()">Enviar correo <i class="fa fa-envelope ml-1"></i></button> 
                     <button class="btn btn-red mb-2" id="DescargarReporte" onclick="GenerarReporte()">Descargar PDF <i class="fa fa-download ml-1"></i></button> 
                     <button class="btn btn-green mb-2" id="ReporteExcel" onclick="ReporteExcel()">Descargar Excel <i class="fa fa-download ml-1"></i></button> 
                </div>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>