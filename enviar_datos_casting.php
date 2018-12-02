<?php
require('phpmailer/class.phpmailer.php');

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$nacionalidad = $_POST['nacionalidad'];
$edad = $_POST['edad'];
$telefono = $_POST['telefono'];
$profesion = $_POST['profesion'];
$horario = $_POST['horario'];
$cara = $_POST['cara'];
$book = $_POST['book'];
$medidas = $_POST['medidas'];
$piercing = $_POST['piercing'];
$natural = $_POST['natural'];
$idiomas = $_POST['idiomas'];
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



/////////////////////  ENVIAR CORREO        ////////////////////////////////// 
 

  $mail = new PHPMailer();
  $mail->From = 'casting@eliteescortmadrid.com';
  $mail->FromName = "casting@eliteescortmadrid.com'' - eliteescortmadrid.com";
  $mail->Subject = 'Envio de la pagina de casting eliteescortmadrid.com';
  $mail->AddAddress('casting@eliteescortmadrid.com',$nombre . ' ' . $apellido);

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
        <tr><td>Horario: </td><td>'.$horario.'</td></tr>
        <tr><td>Mostrar cara: </td><td>'.$cara.'</td></tr>
        <tr><td>Book de fotos: </td><td>'.$book.'</td></tr>
        <tr><td>Medidas: </td><td>'.$medidas.'</td></tr>
        <tr><td>Piercing o tatoo: </td><td>'.$piercing.'</td></tr>
        <tr><td>Natural u operada: </td><td>'.$natural.'</td></tr>
        <tr><td>Idiomas: </td><td>'.$idiomas.'</td></tr>
        <tr><td>Comentario: </td><td>'.$comentario.'</td></tr>
      </table> 

     </body>
  </html>
';


$mail->Body = $body;
    $mail->AltBody = 'texto plano'; 
  
    if(!$mail->Send()) { echo "Error: " . $mail->ErrorInfo; } 
    else 
    {
      $valor = 2;

      $files = glob('fotos/*'); //obtenemos todos los nombres de los ficheros
      foreach($files as $file)
      {
        if(is_file($file))
        unlink($file); //elimino el fichero
      }
    }  
        
echo $valor;  