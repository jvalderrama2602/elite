<?php
require_once '../../conex.php';
$nombre1="escorts";
$nombre2="activo";
if (empty ($strTitle)) {
	$strTitle = $arreglosSeo[$nombre1]["tituloseo"];
}
if (empty ($strCaption)) {
	$strCaption = $arreglosSeo[$nombre1]["metadescripcion"]; }

	if (empty ($canonical)) {$canonical = $arreglosSeo[$nombre1]["canomovil"]; }
	if (empty ($canopc)) {$canopc = $arreglosSeo[$nombre1]["canopc"]; }
$consulta = 'SELECT * FROM escorts WHERE status="activo" ORDER BY RAND()';
$resultado= $conex->query($consulta);
?>

<!DOCTYPE html>
<html class="no-js" lang="es-ES">
<!--<![endif]-->
<?php include("../head.php"); ?>


<body ondragstart="return false" onselectstart="return false" oncontextmenu="return false">
<?php include("../cabecera.html"); ?>

	<section class="ds intro_section" style="height: 620px">
				<div class="flexslider vertical-nav">
					<ul class="slides">

						<li data-duration="5000" style="background: url(/movil/images/slidermovil06.jpg);background-position: 30% 0px;max-height: 616px">
							<div style="height: 250px"></div>
							<div class="container">
								<div class="row">
									<div class="col-sm-12 text-center text-md-right">
										<div class="slide_description_wrapper" style="min-height: 600px">
											<div class="slide_description">
												<div class="intro-layer" data-animation="slideExpandUp">
													<h1 class="big margin_0">Elite Escort Madrid, Fotos 100% Reales</h1>
													<h2 style="font-family: 'Herr Von Muellerhoff', cursive;font-weight: 400;" class="muellerhoff topmargin_5 bottommargin_50 highlight">Julia Rey</h2>
												</div>
											<div class="intro-layer" data-animation="slideExpandUp">
													<p class="entry-excerpt bottommargin_30">
													Agencia de Escort de Lujo de Alto Standing caracterizada por su discreción y que dispone de exclusivas señoritas, seleccionadas por su belleza, elegancia y discreción de nuestra chicas de compañia. ¿No logra decidirse? Llamenos y le podremos asesorar.</p>

												<p style="text-align: center" class="entry-excerpt bottommargin_30">
													<a href="https://api.whatsapp.com/send?phone=34693608861" class="theme_button color1 topmargin_20"><i class="rt-icon2-whatsapp"> </i>Contáctame</a></p>
												</div>
											</div>
											<!-- eof .slide_description -->
										</div>
										<!-- eof .slide_description_wrapper -->
									</div>
									<!-- eof .col-* -->
								</div>
								<!-- eof .row -->
							</div>
							<!-- eof .container -->
						</li>



					</ul>
				</div>
				<!-- eof flexslider -->
			</section>


<?php include("fotos-escort.php"); ?>
<?php include("../bienvenida.php"); ?>
<?php include("../cita.php"); ?>
<?php include("../zona.php"); ?>
<?php include("../blog-slide.php"); ?>
<?php include("../footer.html"); ?>

