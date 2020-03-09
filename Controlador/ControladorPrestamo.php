<?php
class ControladorPrestamo
{
    public function RegistrarPrestamo($cod_cliente, $cod_ruta, $valor_prestamo, $cant_cuotas_prestamo, $intereses_prestamo)
    {
        $daoPrestamo = new DAOPrestamo();
        $prestamo = new Prestamo();
        $prestamo->setcod_cliente($cod_cliente);
        $prestamo->setcod_ruta($cod_ruta);
        $prestamo->setvalor_prestamo($valor_prestamo);
        $prestamo->setcant_cuotas_prestamo($cant_cuotas_prestamo);
        $prestamo->setintereses_prestamo($intereses_prestamo);
        $result = $daoPrestamo->RegistrarPrestamo($prestamo);
    }

    public function EditarPrestamo($cod_prestamo)
    {
        $daoPrestamo = new DAOPrestamo();
        $prestamo = new Prestamo();
        $prestamo->setcod_prestamo($cod_prestamo);
        $result = $daoPrestamo->EditarPrestamo($prestamo);
        $row = $result->fetch();
        $data = array(
            'Codigo' => $row['Cod_Prestamo'],
            'Cliente' => $row['Cod_Cliente'],
            'Ruta' => $row['Cod_Ruta'],
            'Fecha' => $row['Fecha_prestamo'],
            'Valor' => $row['Valor_prestamo'],
            'Cuotas' => $row['Cant_cuotas_prestamo'],
            'Interes' => $row['Interes_prestamo'],
        );
        echo json_encode($data);
    }

    public function ActualizarPrestamo($cod_prestamo, $cod_ruta, $valor_prestamo, $cant_cuotas_prestamo, $intereses_prestamo)
    {
        $daoPrestamo = new DAOPrestamo();
        $prestamo = new Prestamo();
        $prestamo->setcod_prestamo($cod_prestamo);
        $prestamo->setcod_ruta($cod_ruta);
        $prestamo->setvalor_prestamo($valor_prestamo);
        $prestamo->setcant_cuotas_prestamo($cant_cuotas_prestamo);
        $prestamo->setintereses_prestamo($intereses_prestamo);
        $result = $daoPrestamo->ActualizarPrestamo($prestamo);
    }

    public function EliminarPrestamo($cod)
    {
        $daoPrestamo = new DAOPrestamo();
        $prestamo = new Prestamo();
        $prestamo->setcod_prestamo($cod);
        $result = $daoPrestamo->EliminarPrestamo($prestamo);
    }

    public function VerPrestamo($cod_prestamo)
    {
        $daoPrestamo = new DAOPrestamo();
        $prestamo = new Prestamo();
        $prestamo->setcod_prestamo($cod_prestamo);
        $result = $daoPrestamo->VerPrestamo($prestamo);
        $row = $result->fetch();
        $valor_total = $daoPrestamo->ValorTotal($row['Valor_prestamo'], $row['Cant_cuotas_prestamo'], $row['Interes_prestamo']);
        $data = array(
            'Codigo' => $row['Cod_Prestamo'],
            'Valor' => $row['Valor_prestamo'],
            'Interes' => $row['Interes_prestamo'],
            'Cuotas' => $row['Cant_cuotas_prestamo'],
            'ValorTotal' => $valor_total,
        );
        echo json_encode($data);
    }

    public function ReporteExcel(){
        $daoPrestamo = new DAOPrestamo();
        $result = $daoPrestamo->Prestamos();
        
    }
   
}
