<?php
/*mujeres casadas movil*/
require_once '../../conex.php';
$nombre1="casadas";
$nombre2="activo";
if (empty ($strTitle)) {
	$strTitle = $arreglosSeo[$nombre1]["tituloseo"];
}
if (empty ($strCaption)) {
	$strCaption = $arreglosSeo[$nombre1]["metadescripcion"]; }
	if (empty ($canonical)) {$canonical = $arreglosSeo[$nombre1]["canomovil"]; }
	if (empty ($canopc)) {$canopc = $arreglosSeo[$nombre1]["canopc"]; }

?>

<!DOCTYPE html>
<html class="no-js">
<!--<![endif]-->
<?php include("../head.php"); ?>


<body>
<?php include("../cabecera.html"); ?>

<section class="ds intro_section" style="height: 620px">
				<div class="flexslider vertical-nav">
					<ul class="slides">
						<li data-duration="5000" style="background: url(/movil/images/casadas-movil.jpg);background-position: 50% 0px;max-height: 600px">
							<div style="height: 100px"></div>
							<div class="container">
								<div class="row">
									<div class="col-sm-12 text-center text-md-right">
										<div class="slide_description_wrapper" style="min-height: 600px">
											<div class="slide_description">
												<div class="intro-layer" data-animation="slideExpandUp">
													<h2 class="big margin_0">Mujeres Casadas</h2>

												</div>
											<div class="intro-layer" data-animation="slideExpandUp">
													<p class="entry-excerpt bottommargin_30">
														A lo largo de mi vida, en charlas con amigas, conocidas y ciertas mujeres de buena posición, me han comentado que aún estando casadas y tener un hombre a su lado, se sienten solas.<br>
														Quizás desatendidas, y la monotonía se ha instalado en sus relaciones, muestran gran interés por mis vivencias y me han confesado que les gustaría en ocasiones la experiencia de tener encuentros privados, discretos y sin compromiso.<br>
														Y pensé… ¿Por qué no?<br>
														Os presento la sección de señoras casadas, por razones obvias no disponemos de fotografías, pero indicame tus gustos y te organizaré una velada perfecta, recuerda reservar tu cita con la suficiente antelación.<br>
														Será nuestro secreto…
													</p>
													<h2 style="font-family: 'Herr Von Muellerhoff', cursive;
	font-weight: 400;" class="muellerhoff topmargin_5 bottommargin_50 highlight">Julia Rey</h2>
													<a href="https://api.whatsapp.com/send?phone=34693608861" class="theme_button color1 topmargin_20"><i class="rt-icon2-whatsapp"> </i>Contáctame</a>
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
<!--
<section class="ds parallax calltoaction section_padding_100" style="background-image: url(https://eliteescortmadrid.com/wp-content/uploads/2017/08/couple-love-bedroom-kissing.jpg)">
				<div class="container">
					<div class="row topmargin_60 bottommargin_60">
						<div class="col-sm-12 text-center">
							<h2 class="extra-big topmargin_0 bottommargin_30">Mujeres
								<span class="highlight">Casadas</span>
							</h2>
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
									<!- -<div class="form-group">
										<input name="email" type="email" class="mailchimp_email form-control" placeholder="Email address">
									</div>-->
									<!--<button type="submit" class="theme_button input_button">Send</button>- ->
									<div class="response"></div>
								</form>
							</div>
						</div>
					</div>
				</div>
</section>-->

<?php include("../bienvenida.php"); ?>
<?php include("../cita.php"); ?>
<?php include("../zona.php"); ?>
<?php include("../blog-slide.php"); ?>
<?php include("../footer.html"); ?>
