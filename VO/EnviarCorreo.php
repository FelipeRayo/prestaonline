<?php
    use PHPMailer\PHPMailer\PHPMailer;
    require '../Vista/phpmailer/vendor/autoload.php';
    include 'Conexion.php';
    $id = $_GET['codigo'];
    $conexion = new Conexion();
	$sql = "SELECT * FROM prestamo join cliente on cliente.IDENTIFICACION=prestamo.Cod_cliente WHERE Cod_Prestamo=$id";
	$conexion->buscar_query($sql);
    $result = $conexion->obtenerResult();
    while($filas= $result->fetch()){
        $correo = $filas['CLI_CORREO'];
        $cliente = $filas['CLI_NOMBRE']." ".$filas['CLI_APELLIDO']; 
    }

    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host='smtp.gmail.com';
    $mail->Port=587;
    $mail->SMTPAuth=
    $mail->Password='';
    $mail->setFrom('piperayo062001@gmail.com');
    $mail->addAddress($correo);
    $mail->isHTML(true);
    $mail->Subject='Reporte Prestamo '.$cliente;
    $mail->Body='<h1 align="center">Nombre: '.$cliente.'<br>Mensaje: Mensaje de prueba 2 para correo electronico </h1>';

    if(!$mail->send()){
        echo "<script>alert('El Correo no ha podido ser Enviado');</script>";
        echo "<script>window.history.back();</script>";
    }else{
        echo "<script>alert('Correo Enviado');</script>";
        echo "<script>window.history.back();</script>";

    }

?>