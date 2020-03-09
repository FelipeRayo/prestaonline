<?php
    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
    use PhpOffice\PhpSpreadsheet\IOFactory;

    require '../Vista/phpexcel/vendor/autoload.php';
    include 'Conexion.php';
    include '../DAO/DAOPrestamo.php';

    $cod = $_GET['codigo'];
    $conexion = new Conexion();
    $sql = "SELECT * FROM prestamo WHERE Cod_Prestamo=$cod";
    $conexion->buscar_query($sql);
    $result = $conexion->obtenerResult();
    $row = $result->fetch();          
    $dao = new DAOPrestamo();
    $valor_total = $dao->ValorTotal($row['Valor_prestamo'],$row['Cant_cuotas_prestamo'],$row['Interes_prestamo']);
    $cuotas=$row['Cant_cuotas_prestamo'];
    $valor_cuota = round(($valor_total/$cuotas));		
    $document = new Spreadsheet();
    $document
            ->getProperties()
            ->setCreator("Aquí va el creador, como cadena")
            ->setLastModifiedBy('Parzibyte') 
            ->setTitle('Mi primer documento creado con PhpSpreadSheet')
            ->setSubject('El asunto')
            ->setDescription('Este documento fue generado para parzibyte.me')
            ->setKeywords('etiquetas o palabras clave separadas por espacios')
            ->setCategory('La categoría');
        
        $hoja = $document->getActiveSheet();
        $hoja->setTitle("Prestamos");    
            $hoja->setCellValue('B3', 'Prestamo');
            $hoja->setCellValue('C3', 'Cliente');
            $hoja->setCellValue('D3', 'Ruta');
            $hoja->setCellValue('E3', 'Fecha');
            $hoja->setCellValue('F3', 'Valor');
            $hoja->setCellValue('G3', 'Cuotas');
            $hoja->setCellValue('H3', 'Interes');
            $hoja->setCellValue('I3', 'Valor Total');

            $hoja->setCellValue('B4', $row['Cod_Prestamo']);
            $hoja->setCellValue('C4', $row['Cod_Cliente']);
            $hoja->setCellValue('D4', $row['Cod_Ruta']);
            $hoja->setCellValue('E4', $row['Fecha_prestamo']);
            $hoja->setCellValue('F4', $row['Valor_prestamo']);
            $hoja->setCellValue('G4', $row['Cant_cuotas_prestamo']);
            $hoja->setCellValue('H4', $row['Interes_prestamo']);
            $hoja->setCellValue('I4', $valor_total);

            $f=7;
            for($i=1; $i<=$cuotas; $i++){
                $valor_total=round(($valor_total-$valor_cuota));
                $hoja->setCellValue('B'.$f, $i);
                $hoja->setCellValue('C'.$f, $valor_cuota);
                $hoja->setCellValue('D'.$f, $valor_total);
                $f++;
            }

        $writer = new Xlsx($document);         
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename=primerintento.xlsx');
        header('Cache-Control: max-age=0');
        $writer = IOFactory::createWriter($document, 'Xlsx');
        Ob_end_clean();
        $writer->save('php://output');      
        exit;
?>