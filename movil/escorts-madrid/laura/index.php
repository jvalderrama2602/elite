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
<style type="text/css">
	.mfp-hide {
    display: none!important;
}

    video::-internal-media-controls-download-button {
    display:none;
}

video::-webkit-media-controls-enclosure {
    overflow:hidden;
}

video::-webkit-media-controls-panel {
    width: calc(100% + 25px);
}

</style>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.0.0/magnific-popup.min.css" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.0.0/jquery.magnific-popup.min.js"></script>

<?php include("../../cabecera.html"); ?>


<?php foreach ($resultado as $row ): ?>
<?php $texto=str_replace('"','',$row['imagenmovil']); ?>
<section class="ds parallax calltoaction section_padding_100" style="background-image: url(<?php echo $texto; ?>)">
				<div class="container">
					<div class="row topmargin_60 bottommargin_60">
						<div class="col-sm-12 text-center">
							<h2 class="extra-big2 topmargin_0 bottommargin_30">
								<span class="highlight"><?= $row['nombre']; ?></span>

							</h2>
								<h1 style="font-family: 'Herr Von Muellerhoff', cursive; font-size: 30px" class="muellerhoff topmargin_5 bottommargin_50 highlight"><?= $row['titulo']; ?></h1>


							<div class="row">
								<div class="col-md-offset-2 col-md-8 text-center">
									<?= $row['contenido']; ?>
								</div>
							</div>
							<p style="text-align: center" class="entry-excerpt bottommargin_30">
							<strong style="color:#ffdf9c">Reserva la cita cómo mínimo con una hora de antelación.</strong><br>
							<strong style="color:#ffdf9c"><?= $row['horario']; ?></strong><br>
							<a href="https://api.whatsapp.com/send?phone=34693608861" class="theme_button color1 topmargin_20"><i class="rt-icon2-whatsapp"> </i>Contáctame</a>	<a href="#videoStory" class="theme_button color1 topmargin_20" id="videoLink">Ver Video  <i class="fa fa-play-circle" aria-hidden="true">&nbsp;</i></a></p>


													<div id="videoStory" class="mfp-hide" style="max-width: 75%; margin: 0 auto;">

<video width="100%" controls controlsList="nodownload">
  <source src="https://eliteescortmadrid.com/wp-content/uploads/Nuevos-videos/ELITE%20LAURA.mp4" type="video/mp4">
</video>


</div>
<script type="text/javascript">
$('#videoLink')
.magnificPopup({
	  type:'inline',
	  midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
  })
</script>
						</div>
					</div>
				</div>
</section>
<?php endforeach; ?>


<?php include("../fotos.php"); ?>


<section class="ds parallax calltoaction section_pad1ding_100" style="background-image:url(https://eliteescortmadrid.com/wp-content/uploads/2018/04/02-min.jpg)">

<div class="container-fluid">
	<div class="row">
		<div class="col-md-3 borde">
			<div class="with_background2 page-meta topmargin_1">

								<div class="widget widget_tag_cloud2">

									<h3 class="widget-title">Información</h3>


								</div>
								<div class="media small-teaser">
									<li class="list-item">
									<strong>Estatura: </strong><?= $row['estatura']; ?>
									</li>
								</div>
								<div class="media small-teaser">
								<li>
									<strong>Medidas: </strong><?= $row['busto']; ?>/<?= $row['cintura']; ?>/<?= $row['cadera']; ?>
									</li>
								</div>

								<div class="media small-teaser">
								<li>
									<strong>Edad: </strong><?= $row['edad']; ?>
									</li>
								</div>
								<div class="media small-teaser">
								<li>
									<strong>Ojos: </strong><?= $row['ojos']; ?>
									</li>
								</div>
								<div class="media small-teaser">
								<li>
									<strong>Talla: </strong><?= $row['talla']; ?>
									</li>
								</div>
								<div class="media small-teaser">
								<li>
									<strong>Calzado: </strong><?= $row['calzado']; ?>
									</li>
								</div>
								<div class="media small-teaser">
								<li>
									<strong>Idioma: </strong><?= $row['idioma']; ?>
									</li>
								</div>
								<div class="media small-teaser">
								<li>
									<strong>Nacionalidad: </strong><?= $row['nacionalidad']; ?>
									</li>
								</div>
			</div>
		</div>
		<div class="col-md-3 borde">
			<div class="with_background2 page-meta topmargin_1">
								<div class="widget widget_tag_cloud2">
									<h3 class="widget-title">Tarifas</h3>
								</div>
								<?php
										$tarifa= explode(',',$row['tarifas']);
										$cantidad= sizeof($tarifa);
										for($i = 0; $i < $cantidad;$i++)
										{
											echo "<div class='media small-teaser'>
									<li class='list-item'>
									$tarifa[$i]<strong>€</strong>
									</li>
								</div>";
										}
										  ?>
			</div>
		</div>
		<div class="col-md-3 borde">
			<div class="with_background2 page-meta topmargin_1">
								<div class="widget widget_tag_cloud2">
									<h3 class="widget-title">Servicios</h3>
								</div>
								<?php
										$serv= explode(',',$row['Servicios']);
										$cantidad= sizeof($serv);

										for($i = 0; $i < $cantidad;$i++)
										{
											echo "<div class='media small-teaser'>
									<li class='list-item'>
									 $serv[$i]
									</li>
								</div>"
								;
										}
										  ?>

										  <div class='media small-teaser'>
									<li class='list-item'>
									Otros servicios consultar
									</li>

								</div>"
			</div>
		</div>
		<div class="col-md-3 borde">
			<div class="with_background2 page-meta topmargin_1">
								<div class="widget widget_tag_cloud2">
									<h3 class="widget-title">Me gusta</h3>
								</div>

<?php
										$gusto= explode(',',$row['megusta']);
										$cantidad= sizeof($gusto);

										for($i = 0; $i < $cantidad;$i++)
										{
											echo "<div class='media small-teaser'>
									<li class='list-item'>
									 $gusto[$i]
									</li>
								</div>";
										}

										  ?>
<p style="text-align: center;padding-top: 20px;">


									<img src="/images/PEGATINA.png">
								</p>
			</div>
		</div>
	</div>
</div>
</section>

<?php include("../../../slider-movil.php"); ?>
<?php include("../../bienvenida.php"); ?>
<?php include("../../cita.php"); ?>
<?php include("../../zona.php"); ?>
<?php include("../../blog-slide.php"); ?>
<?php include("../../footer.html"); ?>


