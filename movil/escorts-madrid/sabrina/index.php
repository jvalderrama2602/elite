<?php
require_once '../../../conex.php';
$ruta= dirname(__FILE__);
$arregloruta= explode('/',$ruta);
$cantidad= sizeof($arregloruta);
$nombre1=$arregloruta[$cantidad-1];
$nombre2 = ucwords($nombre1);

if (empty ($strTitle)) {
	$strTitle = $arreglosSeo[$nombre1]["tituloseo"];
}
if (empty ($strCaption)) {
	$strCaption = $arreglosSeo[$nombre1]["metadescripcion"]; }
	if (empty ($canonical)) {$canonical = $arreglosSeo[$nombre1]["canomovil"]; }
	if (empty ($canopc)) {$canopc = $arreglosSeo[$nombre1]["canopc"]; }
$consulta = "SELECT * FROM escorts WHERE nombre='".$nombre2."'";
$resultado= $conex->query($consulta);
?>

<!DOCTYPE html>
<html class="no-js" lang="es-ES">
<!--<![endif]-->
<?php include("../../head.php"); ?>

<body ondragstart="return false" onselectstart="return false" oncontextmenu="return false">

<?php include("../../cabecera.html"); ?>

<?php include("../hero.php"); ?>

<?php include("../fotos.php"); ?>

<?php include("../servicios.php"); ?>


<?php include("../../../slider-movil.php"); ?>
<?php include("../../bienvenida.php"); ?>
<?php include("../../cita.php"); ?>
<?php include("../../zona.php"); ?>
<?php include("../../blog-slide.php"); ?>
<?php include("../../footer.html"); ?>


