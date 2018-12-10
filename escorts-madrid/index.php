<?php
require_once '../conex.php';
$nombre1="escorts";
$nombre2="activo";
if (empty ($strTitle)) { $strTitle = $arreglosSeo[$nombre1]["tituloseo"];}
if (empty ($strCaption)) { $strCaption = $arreglosSeo[$nombre1]["metadescripcion"]; }
if (empty ($canonical)) {$canonical = $arreglosSeo[$nombre1]["canopc"];}
if (empty ($canomovil)) {$canomovil = $arreglosSeo[$nombre1]["canomovil"];}	
$consulta = 'SELECT * FROM escorts WHERE status="activo" ORDER BY RAND()';
$resultado= $conex->query($consulta);
?>

<!DOCTYPE html>
<html class="no-js" lang="es-ES">
<!--<![endif]-->
<?php include("../head.php"); ?>


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

<?php include("../cabecera.html"); ?>

<section class="ds intro_section">
				<div class="flexslider vertical-nav">
					<ul class="slides">

						<li data-duration="2500">
							<img src="/images/fondo-escorts.jpg" alt="">
							<div class="container">
								<div class="row">
									<div class="col-sm-12 text-center text-md-right">
										<div class="slide_description_wrapper">
											<div class="slide_description">
												<div class="intro-layer" data-animation="slideExpandUp">
													<h1 class="big margin_0">Escorts en Madrid, Fotos 100% Reales</h1>
													<h2 class="muellerhoff topmargin_5 bottommargin_50 highlight">by Julia Rey</h2>
												</div>
												<div class="intro-layer" data-animation="slideExpandUp">
													<p id="p" class="entry-excerpt bottommargin_30">
												Agencia de Escorts de Lujo de Alto Standing caracterizada por su discreción y que dispone de exclusivas señoritas, seleccionadas por su belleza, elegancia y discreción de nuestra chicas de compañia. ¿No logra decidirse? Llamenos y le podremos asesorar.
													</p>
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

<!--<div class="breadcrumb">
		<div class="container">
			<ul class="breadcrumb__list" itemscope="" itemtype="http://schema.org/BreadcrumbList">

									<li class="breadcrumb__el" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
						<a href="https://romsmania.cc" itemprop="item" class="breadcrumb__link"><span itemprop="name">Home</span></a>
						<meta itemprop="position" content="1">
					</li>
									<li class="breadcrumb__el" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
						<a href="https://romsmania.cc/roms" itemprop="item" class="breadcrumb__link"><span itemprop="name">ROMS</span></a>
						<meta itemprop="position" content="2">
					</li>
									<li class="breadcrumb__el" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
						<a href="https://romsmania.cc/roms/nintendo-wii" itemprop="item" class="breadcrumb__link"><span itemprop="name">Nintendo Wii</span></a>
						<meta itemprop="position" content="3">
					</li>
									<li class="breadcrumb__el" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
						<a href="" itemprop="item" class="breadcrumb__link"><span itemprop="name">Super Smash Bros Brawl</span></a>
						<meta itemprop="position" content="4">
					</li>
				
			</ul>
		</div>
	</div>-->


<section class="ds parallax calltoaction section_pad1ding_100" style="background-image:url(/images/background.jpg)">
<?php include("fotos-escort.php"); ?>
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

