<?php
require_once '../../conex.php';
$nombre1="fantasia";
$nombre2="activo";
if (empty ($strTitle)) {
	$strTitle = $arreglosSeo[$nombre1]["tituloseo"];
}
if (empty ($strCaption)) {
	$strCaption = $arreglosSeo[$nombre1]["metadescripcion"]; }
	if (empty ($canonical)) {$canonical = $arreglosSeo[$nombre1]["canomovil"]; }
	if (empty ($canopc)) {$canopc = $arreglosSeo[$nombre1]["canopc"]; }


$consultaS = 'SELECT * FROM escorts WHERE fantasias=1 ORDER BY RAND()';
$resultadoS= $conex->query($consultaS);
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
						<li data-duration="5000" style="background: url(/images/fantasia.jpg);background-position: 30% 0px;max-height: 600px">
							<div style="height: 250px"></div>
							<div class="container">
								<div class="row">
									<div class="col-sm-12 text-center text-md-right">
										<div class="slide_description_wrapper" style="min-height: 600px">
											<div class="slide_description">
												<div class="intro-layer" data-animation="slideExpandUp">
													<h2 class="big margin_0">Servicio Fantasía Erótica</h2>

												</div>
											<div class="intro-layer" data-animation="slideExpandUp">
													<p class="entry-excerpt bottommargin_30">
													Tus sueños eróticos hechos realidad.
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

<section class="ds parallax calltoaction section_pad1ding_100" style="background-image:url(https://eliteescortmadrid.com/wp-content/uploads/2018/04/04-min.jpg)">
				<div class="container">
					<div class="row">

						<div class="col-sm-7 col-md-8 col-lg-8 col-sm-push-5 col-md-push-4 col-lg-push-4">


							<div class="row">

								<div class="col-sm-12 bottommargin_40">

									<div class="side-item event-item content-padding with_background">

										<div class="row">

											<div class="col-md-4">
												<div class="item-media">
													<img src="/images/Fantasia-erotica.jpg" alt="">
													<div class="media-links">
														<!--	<a class="abs-link" title="" href="event-single-left.html"></a>-->
													</div>
												</div>
											</div>

											<div class="col-md-8">
												<div class="item-content">
													<h3 class="entry-title topmargin_0">
													Cumplimos tus sueños
													</h3>

														<p>En Elite Escorts Madrid perseguimos constantemente satisfacer tus necesidades eróticas más intimas. Convertimos en realidad todos sus deseos. Es por ello que nos encantaría que dejaras volar su imaginación y explorar desde lo más profundo de tu mente todas sus fantasías, esas <strong>fantasías eróticas</strong> que nunca te has atrevido nunca a llevar a cabo. Te invitamos a dejarlo en nuestras manos y llegarás a alcanzar tus más altos niveles de placer.</p>
<p>Las <strong>fantasías eróticas</strong> aparecen durante el día o durante el acto sexual y se forman en función de la personalidad de cada uno. Las fantasías más recurrentes son las que se tienen con una persona concreta (un famoso, un desconocido, un compañero de trabajo o un amigo o con algún accesorio (manos atadas, ojos vendados, juguetes, etc. ). Abajo te dejo las chicas dispuestas a complacer tus fantasias eróticas.</p>

													<p class="item-meta grey">

													</p>

												</div>
											</div>

										</div>
									</div>

								</div>



<style>
	.texto-blanco{color:#ffffff;}
	.texto-blanco:hover{color:#D5BD53;}

	.imgborder2{
		width:430px;
		border: 1px solid #D1A254;
			}
</style>


		<?php foreach ($resultadoS as $row ):	?>

		<div class="container-fluid ds" style="background-image:url(/images/fondo-chicas-o.jpg);background-position: 50% -30px;">
		<div class="row">

		<div class="col-md-12" ><a href=<?php echo "'/movil/escorts-madrid/";?><?= $row['nombre']; ?><?php echo "'";?>>
		<p style='padding-top: 6px;margin-bottom: 0px' ><img class="imgborder2" style="width:430px" src=<?= $row['imagenppal']; ?> alt=<?= $row['alt']; $i=$i+1;echo '$row' ?>></p>
		<div class="model-parameters">
		<h3 style="text-align: center;font-family: Garamond;margin-top: 0px"  class="texto-blanco">
				<?= $row['nombre']; ?>
		</h3></div></a>
		</div>
		</div>
		</div>





<?php endforeach; ?>


<!-- cita a ciegas -->
		<section class="ds parallax calltoaction section_pad1ding_100" style="background-image:url(https://eliteescortmadrid.com/wp-content/uploads/2018/04/02-min.jpg)">
		<div class="container-fluid">
		<div class="row">
		<div class="col-md-4" ><a href="/movil/servicios-cita-ciegas-elite-escorts-madrid/">
		<p style='padding-top:1px;text-align: center;' ><img class="imgborder2" src="/images/citaaciega.png" alt="Cita a ciegas"></p>
		<div class="model-parameters">
		<h3 style="text-align: center;font-family: Garamond;margin-top: 0px" class="texto-blanco">
			Cita a ciegas
									</h3></div></a>
		</div>

	</div>
</div>



							</div>



						</div>
						<!--eof .col-sm-8 (main content)-->

						<!-- sidebar -->

						<!-- eof aside sidebar -->

					</div>
				</div>
			</section>

<?php include("../bienvenida.php"); ?>
<?php include("../cita.php"); ?>
<?php include("../zona.php"); ?>
<?php include("../blog-slide.php"); ?>
<?php include("../footer.html"); ?>
