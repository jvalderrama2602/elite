<?php
require_once '../conex.php';
$nombre1="porque-elite";
$nombre2="activo";
if (empty ($strTitle)) {
	$strTitle = $arreglosSeo[$nombre1]["tituloseo"];
}
if (empty ($strCaption)) {
	$strCaption = $arreglosSeo[$nombre1]["metadescripcion"]; }
?>

<!DOCTYPE html>
<html class="no-js">
<!--<![endif]-->
<?php include("../head.php"); ?>


<body>
<?php include("../cabecera.html"); ?>

<section class="ds parallax calltoaction section_padding_100" style="background-image: url(/images/porque-elite.jpeg)">
				<div class="container">
					<div class="row topmargin_60 bottommargin_60">
						<div class="col-sm-12 text-center">
							<h2 class="extra-big topmargin_0 bottommargin_30">¿Por qué
								<span class="highlight">Elite?</span>
							</h2>
							<div class="row">
								<div class="col-md-offset-2 col-md-8 text-center">

			<p class="entry-excerpt bottommargin_30">Desde Elite escort Madrid os pedimos disculpas y lamentamos las malas experiencias que nos contáis a menudo. Desde aquí, quiero garantizaros esa duda que frecuentemente os asalta y deciros que nuestras fotos son absolutamente reales y actuales, no tenemos duplicidades de la escorts y en ningún caso se manda una señorita por otra.</p>
<p class="entry-excerpt bottommargin_30">En Elite Escort Madrid tenéis la GARANTÍA que no habrá sorpresas desagradables en el encuentro con la escort elegida. Las señoritas disponen de sus fotos de book con rostro para poder demostrar a los más incrédulos la veracidad de las fotografías. No tenemos nada que ocultar. Por ésta misma razón pedimos compresión con la disponibilidad de las señoritas.</p>
<p class="entry-excerpt bottommargin_30">Otra de la razones para elegir Elite Escort Madrid es que las escorts son absolutamente libres para decidir su disponibilidad, por ello en tu encuentro te garantizas que la señorita elegida acude a la cita contigo porque realmente le apetece pasarlo bien.</p>

<p class="entry-excerpt bottommargin_30">Si alguna vez te has sentido engañado, Elite escort Madrid será tu agencia de referencia.</p>


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

<?php
$consul_reino = 'SELECT * FROM sliderreino';
$resul_reino= $conex->query($consul_reino);
?>
<section class="ds intro_section">
				<div class="flexslider vertical-nav">
					<ul class="slides">
						<?php foreach ($resul_reino as $row ): ?>
						<li>
							<img src="<?= $row['foto']; ?>" alt="<?php print $strTitle; ?>">
							<div class="container">
								<div class="row">
									<div class="col-sm-12 text-center text-md-right">
										<div class="slide_description_wrapper">
											<div class="slide_description">
												<div class="intro-layer" data-animation="slideExpandUp">
													<!--<h2 class="bi1g mar1gin_0"><?= $row['texto']; ?></h2>-->
													<!--<h2 class="muellerhoff topmargin_5 bottommargin_50 highlight"></h2>-->
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
							<?php endforeach; ?>
					</ul>
				</div>
				<!-- eof flexslider -->
			</section>
<div style="padding-top: 30px;background: #000000;">
</div>
<?php include("../slider.php"); ?>
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


		

