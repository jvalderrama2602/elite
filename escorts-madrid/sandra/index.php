<?php
require_once '../../conex.php';

$ruta= dirname(__FILE__);
$arregloruta= explode('/',$ruta);
$cantidad= sizeof($arregloruta);
$nombre1=$arregloruta[$cantidad-1];
$nombre2 = ucwords($nombre1);

if (empty ($strTitle)) {
	$strTitle = $arreglosSeo[$nombre1]["tituloseo"];}
if (empty ($strCaption)) {
	$strCaption = $arreglosSeo[$nombre1]["metadescripcion"]; }
if (empty ($canonical)) {$canonical = $arreglosSeo[$nombre1]["canopc"];}
if (empty ($canomovil)) {$canomovil = $arreglosSeo[$nombre1]["canomovil"];}

$consulta = "SELECT * FROM escorts WHERE nombre='".$nombre2."'";
$resultado = $conex->query($consulta);
?>

<!DOCTYPE html>
<html class="no-js" lang="es-ES">
<!--<![endif]-->
<?php include("../../head.php"); ?>


<link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.0.0/magnific-popup.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.0.0/jquery.magnific-popup.min.js"></script>

<body ondragstart="return false" onselectstart="return false" oncontextmenu="return false">
<script type="text/javascript">
function typeEffect(element, speed) {
	var text = $(element).text();
	$(element).html('');

	var i = 0;
	var timer = setInterval(function() {
					if (i < text.length) {
						$(element).append(text.charAt(i));
						i++;
					} else {
						clearInterval(timer);
					}
				}, speed);
}

$( document ).ready(function() {
  var speed = 75;
  var delay = $('#p').text().length * speed + speed;
  typeEffect($('#p'), speed);
  /*setTimeout(function(){
    $('#p2').css('display', 'inline-block');
    typeEffect($('#p'), speed);
  }, delay);*/
});
</script>
<?php include("../../cabecera.html"); ?>
<?php foreach ($resultado as $row ): ?>

	<section class="ds intro_section">
				<div class="flexslider vertical-nav">
					<ul class="slides">

						<li>
							<img src=<?= $row['imagenwide']; ?> alt="<?= $row['titulo']; ?>">
							<div class="container">
								<div class="row">
									<div class="col-sm-12 text-center text-md-right">
										<div class="slide_description_wrapper">
											<div class="slide_description">
												<div class="intro-layer" data-animation="slideExpandUp">

												<h2 class="big margin_0"><?= $row['nombre']; ?>  </h2>
													<h1 id="type" class="muellerhoff topmargin_5 bottommargin_50 highlight"><?= $row['titulo']; ?></h1>
												</div>
												<div class="intro-layer" data-animation="slideExpandUp">
													<p id="p" class="entry-excerpt bottommargin_30">
														<?= $row['contenido']; ?>
													</p>
													<p style="text-align: center" class="entry-excerpt bottommargin_30">
													<strong style="color:#ffdf9c">Reserva la cita cómo mínimo con una hora de antelación.</strong><br>
													<strong style="color:#ffdf9c"><?= $row['horario']; ?></strong><br>
													<a href="https://api.whatsapp.com/send?phone=34693608861" class="theme_button color1 topmargin_20"><i class="rt-icon2-whatsapp"> </i>Contáctame</a></p>

													<p style="text-align: center;">
													<a href="#videoStory" class="theme_button color1 topmargin_20" id="videoLink">Ver Video  <i class="fa fa-play-circle" aria-hidden="true">&nbsp;</i></a></p>


													<?php if(!$row['video']=="" ){ ?>


													<div id="videoStory" class="mfp-hide" style="max-width: 75%; margin: 0 auto;">
													<!--<iframe width="100%" height="600px" src="https://eliteescortmadrid.com/images/Carla/CARLA.mp4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>-->
													<video width="100%" controls controlsList="nodownload">
 													<source src="<?= $row['video'] ?>" type="video/mp4">
													</video>
													</div>
													<script type="text/javascript">
													$('#videoLink')
													.magnificPopup({
												    type:'inline',
												    midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
													})
													</script>

													<?php } ?>


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

<?php include("../fotos.php"); ?>

<div style="padding-top: 30px;background: #000000;">
</div>

<?php include("../servicios.php"); ?>

<div style="padding-top: 30px;background: #000000;">
</div>

<?php include("../../slider.php"); ?>

<?php include("../../bienvenida.php"); ?>
<div style="padding-top: 30px;background: #000000;">
</div>
<?php include("../../cita.php"); ?>
<div style="padding-top: 30px;background: #000000;">
</div>
<?php include("../../zona.php"); ?>
<div style="padding-top: 30px;background: #000000;">
</div>
<?php include("../../blog-slide.php"); ?>
<?php include("../../footer.html"); ?>

<style type="text/css">

	#type {
	font-family: 'Herr Von Muellerhoff', cursive;
    font-weight: 400;
	color:#ffdf9c;
	font-size: 50px;
    text-align: center;
}
</style>