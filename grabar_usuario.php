<?php
require('phpmailer/class.phpmailer.php');

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$nacionalidad = $_POST['nacionalidad'];
$edad = $_POST['edad'];
$telefono = $_POST['telefono'];
$profesion = $_POST['profesion'];
$idiomas = $_POST['idiomas'];
$peso = $_POST['peso'];
$estatura = $_POST['estatura'];
$pecho = $_POST['pecho'];
$cintura = $_POST['cintura'];
$cadera = $_POST['cadera'];
$comentario= $_POST['comentario'];


$i=1;

$foto1 = $_FILES['foto1']['name'];
$foto2 = $_FILES['foto2']['name'];
$foto3 = $_FILES['foto3']['name'];
$foto4 = $_FILES['foto4']['name'];
$foto5 = $_FILES['foto5']['name'];
$foto6 = $_FILES['foto6']['name'];

//capturamos los datos del fichero subido  
if(!$_FILES['foto1']['name']=="")
{  
  $type=$_FILES['foto1']['type'];
  $tmp_name = $_FILES['foto1']["tmp_name"];
  $name = $_FILES['foto1']["name"];
  $nuevo_path="fotos/nuevaImagen".$i.".jpg";
  move_uploaded_file($tmp_name,$nuevo_path);
  $array=explode('.',$nuevo_path);
  $ext= end($array);
  $i++;
}

if(!$_FILES['foto2']['name']=="")
{  
  $type=$_FILES['foto2']['type'];
  $tmp_name = $_FILES['foto2']["tmp_name"];
  $name = $_FILES['foto2']["name"];
  $nuevo_path="fotos/nuevaImagen".$i.".jpg";
  move_uploaded_file($tmp_name,$nuevo_path);
  $array=explode('.',$nuevo_path);
  $ext= end($array);
  $i++;
}

if(!$_FILES['foto3']['name']=="")
{  
  $type=$_FILES['foto3']['type'];
  $tmp_name = $_FILES['foto3']["tmp_name"];
  $name = $_FILES['foto3']["name"];
  $nuevo_path="fotos/nuevaImagen".$i.".jpg";
  move_uploaded_file($tmp_name,$nuevo_path);
  $array=explode('.',$nuevo_path);
  $ext= end($array);
  $i++;
}


if(!$_FILES['foto4']['name']=="")
{  
  $type=$_FILES['foto4']['type'];
  $tmp_name = $_FILES['foto4']["tmp_name"];
  $name = $_FILES['foto4']["name"];
  $nuevo_path="fotos/nuevaImagen".$i.".jpg";
  move_uploaded_file($tmp_name,$nuevo_path);
  $array=explode('.',$nuevo_path);
  $ext= end($array);
  $i++;
}

if(!$_FILES['foto5']['name']=="")
{  
  $type=$_FILES['foto5']['type'];
  $tmp_name = $_FILES['foto5']["tmp_name"];
  $name = $_FILES['foto5']["name"];
  $nuevo_path="fotos/nuevaImagen".$i.".jpg";
  move_uploaded_file($tmp_name,$nuevo_path);
  $array=explode('.',$nuevo_path);
  $ext= end($array);
  $i++;
}

if(!$_FILES['foto6']['name']=="")
{  
  $type=$_FILES['foto6']['type'];
  $tmp_name = $_FILES['foto6']["tmp_name"];
  $name = $_FILES['foto6']["name"];
  $nuevo_path="fotos/nuevaImagen".$i.".jpg";
  move_uploaded_file($tmp_name,$nuevo_path);
  $array=explode('.',$nuevo_path);
  $ext= end($array);
  $i++;
}



/////////////////////////////////         ENVIAR CORREO        ////////////////////////////////// 
 

  $mail = new PHPMailer();
  $mail->From = 'info@soft-hard-computer.com.ve';
  $mail->FromName = "info@soft-hard-computer.com.ve' - eliteescortmadrid.es";
  $mail->Subject = 'Envio de la pagina de casting eliteescortmadrid.es';
  $mail->AddAddress($email,$nombre . ' ' . $apellido);

  for($x=1;$x<=$i;$x++)
  {  
    $archivo = "nuevaImagen".$x.".jpg";
    $ff = $nuevo_path="fotos/nuevaImagen".$x.".jpg";
      $mail->AddAttachment($ff,$archivo);
  }
  $body = ' 
  <!DOCTYPE html>
    <html lang="en" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
      <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      </head>
    <body style="box-sizing: border-box; margin: 0; padding: 0; width: 100%;">

      <table>
        <tr><td>Nombre: </td><td>'.$nombre.'</td></tr>
        <tr><td>Email: </td><td>'.$email.'</td></tr>
        <tr><td>Nacionalidad: </td><td>'.$nacionalidad.'</td></tr>
        <tr><td>Edad: </td><td>'.$edad.'</td></tr>
        <tr><td>Telefono: </td><td>'.$telefono.'</td></tr>
        <tr><td>Profesión: </td><td>'.$profesion.'</td></tr>
        <tr><td>Idiomas: </td><td>'.$idiomas.'</td></tr>
        <tr><td>Peso: </td><td>'.$peso.'</td></tr>
        <tr><td>Estatura: </td><td>'.$estatura.'</td></tr>
        <tr><td>Pecho: </td><td>'.$pecho.'</td></tr>
        <tr><td>Cintura: </td><td>'.$cintura.'</td></tr>
        <tr><td>Cadera: </td><td>'.$cadera.'</td></tr>
         <tr><td>Comentario: </td><td>'.$comentario.'</td></tr>
      </table> 
      
     </body>
  </html>
';


 $mail->Body = $body;
  $mail->AltBody = 'texto plano'; 
  

  if(!$mail->Send()) { echo "Error: " . $mail->ErrorInfo; } else { echo "Enviado!"; }   

?>



  
  
  
  
  
 