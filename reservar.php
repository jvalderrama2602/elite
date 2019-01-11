<?php
require_once 'conex.php';
require('phpmailer/class.phpmailer.php');

/*pc*/
$promo = $_POST['promo'];
$user = $_POST['user1'];
$correocliente = $_POST['correocliente'];
$iduser = $_POST['iduser'];
$resultado2 = $_POST['c_reservas'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$comentario = $_POST['comentario'];

///////////// REGISTRO BD//////////////

  $consulta = "INSERT INTO reservas (id_user,nombre_reserva,nombre_user,fecha,hora,comentario) VALUES ('$iduser','$promo','$user','$fecha','$hora','$comentario')";
  mysqli_query($conex, $consulta)or die(mysqli_error($conex));

    /////////////////         ENVIAR CORREO        //////////////////////////

    $sql61 = "SELECT fromregistar,fromname,subject,email_envio FROM registrar_cliente";
    $result61 = $conex->query($sql61);
    $fila61 = $result61 -> fetch_array();


    $mail = new PHPMailer();
    $mail->From = $correocliente;
    $mail->FromName = $user;
    $mail->Subject = "Nueva Reserva Zona Amiga";
    $mail->AddAddress($fila61[fromregistar]);

    $body = '<strong>Nueva Reserva de <br></strong>'
     .$user.
     '<br>
     <strong>Desea la promocion</strong><br>'
      .$promo.'<br>
      <strong>Fecha Reserva</strong><br>'
      .$fecha.'<br>
      <strong>Hora Reserva</strong><br>'
      .$hora.'<br>
      <strong>Comentario</strong><br>'
      .$comentario.'<br>
      <strong>Correo del cliente</strong><br>'
       .$correocliente. ''
       
       
       
       
       
       ;



    $mail->Body = $body;
    $mail->AltBody = 'texto plano';

    if(!$mail->Send()) { echo "Error: " . $mail->ErrorInfo; } else { $valor = 2;  }

echo $valor;