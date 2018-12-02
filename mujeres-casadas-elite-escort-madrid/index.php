<?php
require_once '../conex.php';
$nombre1="casadas";
$nombre2="activo";
if (empty ($strTitle)) { $strTitle = $arreglosSeo[$nombre1]["tituloseo"]; }
if (empty ($strCaption)) { $strCaption = $arreglosSeo[$nombre1]["metadescripcion"]; }
if (empty ($canonical)) {$canonical = $arreglosSeo[$nombre1]["canopc"];}
if (empty ($canomovil)) {$canomovil = $arreglosSeo[$nombre1]["canomovil"];}	
?>

<!DOCTYPE html>
<html class="no-js" lang="es-ES">
<!--<![endif]-->
<?php include("../head.php"); ?>


<body ondragstart="return false" onselectstart="return false" oncontextmenu="return false">
<?php include("../cabecera.html"); ?>



<section class="ds parallax calltoaction section_padding_100" style="background-image: url(/images/casadas.jpeg)">
				<div class="container">
					<div class="row topmargin_60 bottommargin_60">
						<div class="col-sm-12 text-center">
							<h1 class="extra-big topmargin_0 bottommargin_30">Mujeres
								<span class="highlight">Casadas</span>
							</h1>
							<div class="row">
								<div class="col-md-offset-2 col-md-8 text-center">

			<p class="entry-excerpt bottommargin_30">A lo largo de mi vida, en charlas con amigas, conocidas y ciertas mujeres de buena posición, me han comentado que aún estando casadas y tener un hombre a su lado, se sienten solas.</p>
<p class="entry-excerpt bottommargin_30">Quizás desatendidas, y la monotonía se ha instalado en sus relaciones, muestran gran interés por mis vivencias y me han confesado que les gustaría en ocasiones la experiencia de tener encuentros privados, discretos y sin compromiso.</p>
<p class="entry-excerpt bottommargin_30">Y pensé… ¿Por qué no?</p>
<p class="entry-excerpt bottommargin_30">Os presento la sección de señoras casadas, por razones obvias no disponemos de fotografías, pero indicame tus gustos y te organizaré una velada perfecta, recuerda reservar tu cita con la suficiente antelación.</p>
<p class="entry-excerpt bottommargin_30">Será nuestro secreto…</p>

								</div>
							</div>
							<div class="widget widget_mailchimp topmargin_20">
								<form class="signup form-inline" action="/" method="get">
									<!--<div class="form-group">
										<input name="email" type="email" class="mailchimp_email form-control" placeholder="Email address">
									</div>-->
									<!--<button type="submit" class="theme_button input_button">Send</button>-->
									<div class="response"></div>
								</form>
							</div>
						</div>
					</div>
				</div>
</section>



<div style="padding-top: 30px;background: #000000;">
</div>
<?php include("../bienvenida.php"); ?>
<div style="padding-top: 30px;background: #000000;">
</div>
<?php include("../cita.php"); ?>
<div style="padding-top: 30px;background: #000000;">
</div>
<?php include("../zona.php"); ?>
<div style="padding-top: 30px;background: #000000;">
</div>
<?php include("../blog-slide.php"); ?>
<?php include("../footer.html"); ?>

