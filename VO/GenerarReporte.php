<?php
    require '../Vista/pdf/fpdf.php';
    include 'Conexion.php';
    include '../DAO/DAOPrestamo.php';
    $cod = $_GET['codigo'];
    $conexion = new Conexion();
	$sql = "SELECT * FROM prestamo join cliente on cliente.IDENTIFICACION=prestamo.Cod_cliente WHERE Cod_Prestamo=$cod";
	$conexion->buscar_query($sql);
    $result = $conexion->obtenerResult();
    $dao= new DAOPrestamo();

    class PDF extends FPDF
    {
        function Header()
        {
            $this->SetFont('Arial', 'B', 18);
            $this->Cell(60);
            $this->Cell(70,10,'Reporte Prestamo',0,0,'C');
            $this->Ln(20);          
        }

        function Footer()
        {
            // Pie de página
            $this->SetY(-15);
            $this->SetFont('Arial', 'I', 8);
            $this->Cell(0, 10, utf8_decode('Página ').$this->PageNo().'/{nb}', 0, 0, 'C');
        }
    }

    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',16);
   
    while ($filas = $result->fetch()) {
		$valor_prestamo = $filas['Valor_prestamo'];
		$cuotas = $filas['Cant_cuotas_prestamo'];
		$interes = $filas['Interes_prestamo'];
		$valor_total = $dao->ValorTotal($valor_prestamo,$cuotas,$interes);
        $valor_cuota = round(($valor_total/$cuotas));	
        $cliente = $filas['IDENTIFICACION'];
        $title = 'Reporte Prestamo '.$cliente;
        $pdf->SetTitle($title);	

        $pdf->SetFont('Arial','', '14');

        $pdf->Cell(92,10,'Cliente: ',0,0,'R',0);
        $pdf->Cell(40,10,$filas['CLI_NOMBRE']." ".$filas['CLI_APELLIDO'],0,1,'L',0);

        $pdf->Cell(92,10,utf8_decode('Identificación: '),0,0,'R',0);
        $pdf->Cell(25,10,$filas['IDENTIFICACION'],0,1,'C',0);

        $pdf->Cell(92,10,'Codigo:',0,0,'R',0);
        $pdf->Cell(20,10,$filas['Cod_Prestamo'],0,1,'C',0);

        $pdf->Cell(92,10,'Valor:',0,0,'R',0);
        $pdf->Cell(20,10,$filas['Valor_prestamo'],0,1,'C',0);

        $pdf->Cell(92,10,'Interes:',0,0,'R',0);
        $pdf->Cell(20,10,$filas['Interes_prestamo'].'%',0,1,'C',0);

        $pdf->Cell(92,10,'Cuotas:',0,0,'R',0);
        $pdf->Cell(20,10,$filas['Cant_cuotas_prestamo'],0,1,'C',0);

        $pdf->Cell(92,10,'Valor Total: ',0,0,'R',0);
        $pdf->Cell(20,10,$valor_total,0,1,'C',0);
    }
    $pdf->Ln();
    $pdf->SetFont('Arial','B',26);
    $pdf->SetFillColor(0,0,128);
    $pdf->SetTextColor(255,255,255);
    $pdf->Cell(63,15,'Cuota',1,0,'C',true);
    $pdf->Cell(63,15,'Valor',1,0,'C',true);
    $pdf->Cell(63,15,'Saldo Total',1,1,'C',true);
    $pdf->SetFont('Arial','',16);
    for($i=1; $i<=$cuotas; $i++){
        $valor_total=round(($valor_total-$valor_cuota));
        if($valor_total<0){
			$valor_total=0;
		}
        $pdf->SetTextColor(3,3,3);
        $pdf->Cell(63,10,$i,1,0,'C',0);
        $pdf->Cell(63,10,$valor_cuota,1,0,'C',0);
        $pdf->Cell(63,10,$valor_total,1,1,'C',0);
    }
    $pdf->Output('I','Reporte Prestamo '.$cliente,'true');
