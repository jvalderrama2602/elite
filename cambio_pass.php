<?php
require_once 'conex.php';
require('phpmailer/class.phpmailer.php');


/*pc*/
$email = $_POST['cambio_pass_email'];
$password = md5($_POST['cambio_pass_1']);
$pass = $_POST['cambio_pass_1'];

	$consulta = "SELECT idclientes,usuario FROM pbrh_users WHERE email='$email'";
	$resultado = $conex->query($consulta);
	$fila = $resultado -> fetch_array();

	if($fila[idclientes]=="")
	{
		$valor=1;
	}
	else
	{ 
		$query = "UPDATE pbrh_users SET password='$password',cambio='1',nombre='$fila[usuario]' WHERE idclientes=$fila[idclientes] LIMIT 1 ";
		mysqli_query($conex, $query) or die(mysqli_error());

		
		$valor=2;
	}

echo $valor;