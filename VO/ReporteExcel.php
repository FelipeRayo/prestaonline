<?php
    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
    use PhpOffice\PhpSpreadsheet\IOFactory;

    require '../Vista/phpexcel/vendor/autoload.php';
    include 'Conexion.php';

    $conexion = new Conexion();
    $sql = "SELECT * FROM prestamo";
    $conexion->buscar_query($sql);
    $result = $conexion->obtenerResult();
    
    $document = new Spreadsheet();
    $document
            ->getProperties()
            ->setCreator("Felipe Rayo")
            ->setLastModifiedBy('Prestamos Rayo') 
            ->setTitle('Prestamos Rayo')
            ->setSubject('Prestamo')
            ->setDescription('')
            ->setKeywords('')
            ->setCategory('');
        
        $hoja = $document->getActiveSheet();
        $hoja->setTitle("Prestamos");    
            $hoja->setCellValue('B2', 'Prestamo');
            $hoja->setCellValue('C2', 'Cliente');
            $hoja->setCellValue('D2', 'Ruta');
            $hoja->setCellValue('E2', 'Fecha');
            $hoja->setCellValue('F2', 'Valor');
            $hoja->setCellValue('G2', 'Cuotas');
            $hoja->setCellValue('H2', 'Interes');
        $i = 3;    
        while ($row = $result->fetch()) {          
            $hoja->setCellValue('B'.$i, $row['Cod_Prestamo']);
            $hoja->setCellValue('C'.$i, $row['Cod_Cliente']);
            $hoja->setCellValue('D'.$i, $row['Cod_Ruta']);
            $hoja->setCellValue('E'.$i, $row['Fecha_prestamo']);
            $hoja->setCellValue('F'.$i, $row['Valor_prestamo']);
            $hoja->setCellValue('G'.$i, $row['Cant_cuotas_prestamo']);
            $hoja->setCellValue('H'.$i, $row['Interes_prestamo']);
            $i++;
        }

        $writer = new Xlsx($document);         
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename=Reporte General Prestamos.xlsx');
        header('Cache-Control: max-age=0');
        $writer = IOFactory::createWriter($document, 'Xlsx');
        Ob_end_clean();
        $writer->save('php://output');      
        exit;
?>