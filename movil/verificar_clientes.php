<?php
session_start();
require_once '../conex.php';
/*movil*/
$usuario = $_POST['usuario'];
$password = md5($_POST['password']);

	$consulta = "SELECT idclientes,nombre,password,ingresa,cambio,email FROM pbrh_users WHERE usuario='$usuario'";
	$resultado = $conex->query($consulta);
	$fila = $resultado -> fetch_array();

	if($fila[idclientes]=="")
	{
		$valor=2;
	}
	else
	{
		if($fila[cambio] =="0")
		{
			$valor=6;
		}
		else
		{
			if($fila[ingresa]=="1")
			{
		   			$valor=3;
			}
			else
			{
				if($fila[password]!=$password)
				{
					$valor=4;
				}
				else
				{
					$valor=5;
					$_SESSION["idclientes"] = $fila[idclientes];
					$_SESSION["cliente"] = $fila[nombre];
					$_SESSION["correo"] = $fila[email];

				}
			}
		}
	}

echo $valor;